<?php 

class Course extends Model {
  
  static protected $_tableName = "course";
  
 
  public static function getImageUrl($image) {
   try {
    if($image && is_file(IMAGES_PATH . "/course/" . $image)) {
      return WEB_URL . "/pictures/course/" . $image;
    }
    else {
      return "";
    }
   } catch (Exception $e) {
     throw $e;
   }
  } 
  
  public static function getImagePath() {
    return IMAGES_PATH . "/course/";
  }
  
  public static function getInfo($id) {
   $db = Database::instance();
   $data = $db->select()
     ->from(self::$_tableName)
     ->where('id = ?', $id)
     ->query()->fetch()
      ;
   
   return $data;
 }
  
  public static function getAll() {
   
   $db   = Database::instance();
    $select = $db->select()
    ->from(self::$_tableName)
    ->order('display_order')
    ;
    
    $data = $select->query()->fetchAll();
    
    return $data;
   
 }
 
  public static function getCourseByUrl($url) {
      $db = Database::instance();
      $select = $db->select()
      ->from('course')
      ->where('url =  ?',$url)
      ;
      $data = $select->query()->fetch();
      
      return $data;
  }  
 
 
  public static function getForIndex() {
   
   $db   = Database::instance();
    $select = $db->select()
    ->from(self::$_tableName)
    ->order('display_order')
    ->limit(6);
    ;
    
    $data = $select->query()->fetchAll();
    
    return $data;
   
 }
  
  
   public static function create($data) {
       
      $data['url']        = Utils::generateUrl($data['title']);
      $data['image']     = Utils::imageUpload('image', self::getImagePath(), $data['url'] . "");
      
      if(isset($data['files']) && !empty($data['files'])) {
      $data['files'] = implode(",", $data['files']);
      }

      return parent::create($data);
   }
  /**
   * Method will update specific page
   * 
   * @param array $data
   * @param int $id
   * @return boolean
   */
   
     public static function getCourseUrl() {
      return WEB_URL . "course.php?url=";
  }
  
   
  public static function edit($data, $id) {
   
       return parent::edit($data, $id);
  }
  
  public static function updateOrder($items) {
    self::updateDisplayOrder($items,self::$_tableName);
    }
  
}
