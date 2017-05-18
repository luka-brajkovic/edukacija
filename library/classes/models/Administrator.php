<?php 

class Administrator extends Model {
    
    static protected $_tableName = "administrator";
  
    const SESSION_ADMIN_KEY = 'konkursi_admin_logged_admin';
    
    const ADMIN_LOGIN_PAGE = 'login.php';
    
    const ADMIN_DASH_PAGE = 'index.php';

    const ALL_ADMINISTRATORS_CACHE_KEY = 'all_administrators';
        
    public static function isAdminLogged($redirect = TRUE) {
        $status = FALSE;
        if(isset($_SESSION[self::SESSION_ADMIN_KEY]) && !empty($_SESSION[self::SESSION_ADMIN_KEY])) {
            $status = TRUE;
        }
        if($redirect) {
            $request = Request::instance();
            $url = $status ? self::ADMIN_DASH_PAGE : self::ADMIN_LOGIN_PAGE;
            $request->redirect(APP_URL . $url);
        } 
        return $status;
    }
    
    public static function loginAdmin($adminID) {
        $_SESSION[self::SESSION_ADMIN_KEY] = $adminID;
    }
    
    public static function logoutAdmin() {
        unset($_SESSION[self::SESSION_ADMIN_KEY]);
    }
    public static function clearAllAdministratorsCache() {
        $cache = Cache::instance();
        $cache->remove(self::ALL_ADMINISTRATORS_CACHE_KEY);
    }
    public static function checkAdminCredentials($email, $password, $loginAuto = TRUE) {
        $db = Database::instance();
        $select = $db->select()
                ->from('administrator')
                ->where('email = ?', $email)
                ->where('password = ?', md5($password))
                ;
        if($adminData = $select->query()->fetch()) {
            $adminID = $adminData['id'];
            if($loginAuto) {
                self::loginAdmin($adminID);
            }
            return $adminID;
        }
        return FALSE;
    }
    
    public static function redirectToDashboard() {
        $request = Request::instance();
        $request->redirect(APP_URL . self::ADMIN_DASH_PAGE);
    }
    
    public static function redirectToLogin($error = FALSE) {
        $request = Request::instance();
        $url = $error ? APP_URL . self::ADMIN_LOGIN_PAGE . "?error=true" 
                : APP_URL . self::ADMIN_LOGIN_PAGE;
        $request->redirect($url);
    }
    
    public static function generateAdminCacheKey($adminID) {
        return "master_administrator_" . $adminID;
    }
    
    public static function getLoggedAdminInfo() {
        if(!isset($_SESSION[self::SESSION_ADMIN_KEY])) {
          return array();
        }
        $adminID    = $_SESSION[self::SESSION_ADMIN_KEY];
        $cache      = Cache::instance();
        $cacheKey   = self::generateAdminCacheKey($adminID);
        if($cache->test($cacheKey)) {
            $data = $cache->load($cacheKey);
        }
        else {
            $db = Database::instance();
            $select = $db->select()
              ->from(array('A' => 'administrator'), '')
              ->columns(array(
                'A.first_name',
                'A.last_name',
                'A.email',
                'A.id',
              ))
              ->where('A.id = ?', $adminID)
              ;

            $data = $select->query()->fetch();
            $cache->save($data, $cacheKey);
        }
        return $data;
    }
    
    /**
     * Method will clear cache saved for specific administrator
     * 
     * @param bigint $adminID
     * @return boolean
     */
    public static function clearAdminCache($adminID) {
        $cache      = Cache::instance();
        $cacheKey   = self::generateAdminCacheKey($adminID);
        return $cache->remove($cacheKey);
    }

    public static function getAllAdministrators() {
        $cache = Cache::instance();
        if(!$data = $cache->load(self::ALL_ADMINISTRATORS_CACHE_KEY)) {
            $db = Database::instance();
            $data = $db->select()
            ->from('administrator')
            ->query()
            ->fetchAll();
            $cache->save($data, self::ALL_ADMINISTRATORS_CACHE_KEY);
        }
        return $data;
    }
    
    public static function create($data) {
      
      $admin = new View('administrator');
      $admin->first_name  = $data['first_name'];
      $admin->last_name   = $data['last_name'];
      $admin->ctime       = time();
      $admin->mtime       = time();
      $admin->email       = $data['email'];
      $admin->password    = md5($data['password']);
      $admin->save();
      
      Administrator::clearAllAdministratorsCache();
      
    }
    
    public static function edit($data) {
      $id     = $data['admin_id'];
      $admin  = new View('administrator', $id);
      
      $admin->first_name  = $data['first_name'];
      $admin->last_name   = $data['last_name'];
      $admin->email       = $data['email'];
      $admin->mtime       = time();
      if(!empty($data['password']) && !empty($data['confirm_password']) && $data['confirm_password'] == $data['password']) {
        $admin->password    = md5($data['password']);
      }
      $admin->save();
      
      Administrator::clearAllAdministratorsCache();
    }
    
    public static function remove($id) {
      $db = Database::instance();
      $stmt = $db->query('DELETE FROM administrator WHERE id = ?', $id);
      Administrator::clearAllAdministratorsCache();
    }
    
}