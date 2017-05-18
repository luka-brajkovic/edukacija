<?php 

class User extends Model {
  
  static protected $_tableName = "user";
  
  /**
   * Method will return user if exists, else it will return false
   * 
   * @return array
   */
  public static function getUser($username, $password) {
    $db = Database::instance();
    $data = $db->select()
      ->from('user')
      ->where('email = ?', $username)
      ->where('password = ?', $password)
      ->where('active = 1')
      ->query()
      ->fetch();
    return $data ? $data : false;
  }
  
  public static function getAllUsers() {
    $db = Database::instance();
    $data = $db->select()
      ->from('user')
      ->query()
      ->fetchAll();
    return $data;
  }
  
  /**
   * Methdo will create new user
   * 
   * @param array $data
   * @return boolean
   */
  public static function create($data) {
    $db = Database::instance();
    $row = $db->select()
      ->from('user')
      ->where('email = ?', $data['email'])
      ->query()
      ->fetch();
    if($row) {
      return array('status' => false, 'message' => 'Korisnik sa ovom email adresom vec postoji');
    }
    
    if($data['password'] != $data['password_confirm']) {
      return array('status' => false, 'message' => 'Sifre se ne podudaraju');
    }
 
    $data['password'] = md5($data['password']);
    
    $admin = new View('user');
    $admin->first_name  = $data['first_name'];
    $admin->last_name   = $data['last_name'];
    $admin->password    = $data['password'];
    $admin->address     = $data['address'];
    $admin->home_number = $data['home_number'];
    $admin->city        = $data['city'];
    $admin->zip         = $data['zip'];
    $admin->country     = $data['country'];
    $admin->ip          = $_SERVER['REMOTE_ADDR'];
    //$admin->active      = $data['active'];
    $admin->phone       = $data['phone'];
    $admin->mtime       = time();
    $admin->ctime       = time();
    $admin->email       = $data['email'];
    $admin->save();
    
    return $admin;
  }
  
  public static function edit($data) {
    $id     = $data['id'];
    $admin  = Model::find('user', $id);
    foreach (User::getEditableFields() as $oneField) {
      if (!empty($data[$oneField])) {
        if ($oneField === 'password') {
          $data[$oneField] = md5($data[$oneField]);
        }
        $admin->{$oneField} = $data[$oneField];
      }
    }

    $admin->mtime = time();
    $admin->save();
    Website::loginUser($admin->toArray());
    return $admin;
  }
  
  /**
   * Method will activate user
   * 
   * @param int $userID
   * @param int $vendorID
   * @return boolean
   */
  public static function activate($userID) {
    $db         = Database::instance();
    $db->query("UPDATE user SET is_active = 1 WHERE id = ?", array($userID));
    return TRUE;
  } 
  
  /**
   * Method will deactivate user
   * 
   * @param int $userID
   * @param int $vendorID
   * @return boolean
   */
  public static function deactivate($userID) {
    $db         = Database::instance();
    $db->query("UPDATE user SET active = 0 WHERE id = ?", array($userID));
    return TRUE;
  } 

  /**
   * Method will return user by his email
   * @param string $email
   * @param int $vendorID
   * @return array
   */
  public static function getUserByEmail($email) {
    $db = Database::instance();
    $data = $db->select()
      ->from('user')
      ->where('email = ?', $email)
      ->query()
      ->fetch();
    return $data ? $data : false;
  }

  /**
  * Function will return array with all fields that can be edited for user
  * @return array
  */
  public static function getEditableFields() {
    return array(
      'first_name',
      'last_name',
      'email',
      'password',
      'address',
      'home_number',
      'city',
      'zip',
      'phone',
      'country',
      'shipping_address',
      'shipping_city',
      'shipping_zip',
      'shipping_phone',
      'shipping_country',
      'shipping_home_number',
    );
  }
  
  public static function checkUserCredentials($email, $password, $loginAuto = TRUE) {
      $db = Database::instance();
      $select = $db->select()
              ->from('user')
              ->where('email = ?', $email)
              ->where('password = ?', md5($password))
              //->where('active = ?', '1')
              ;
      if($adminData = $select->query()->fetch()) {
          $adminID = $adminData['id'];
          if($loginAuto) {
              Website::loginUser($adminData);
          }
          return $adminID;
      }
      $_SESSION['message'] = 'Korisnik ne postoji ili nije aktiviran';
      $_SESSION['status']  = 'danger';
      return FALSE;
  }
  
  public static function isShippingAddressSameAsHome($id) {
    $user = Model::find('user', $id);
    return
      $user->address     == $user->shipping_address &&
      $user->home_number == $user->shipping_home_number &&
      $user->city        == $user->shipping_city &&
      $user->zip         == $user->shipping_zip &&
      $user->country     == $user->shipping_country &&
      $user->phone       == $user->shipping_phone
    ;
  }
  
  public static function getOrders($userID) {
    $db = Database::instance();
    return $db->select()
            ->from('cart')
            ->where('user_id = ?', $userID)
            ->query()->fetchAll();
  }
}