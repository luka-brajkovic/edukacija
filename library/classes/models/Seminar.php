<?php 

class Seminar extends Model {
  
  static protected $_tableName = "seminar";
  
 
  public static function getImageUrl($image) {
   try {
    if($image && is_file(IMAGES_PATH . "/seminar/" . $image)) {
      return WEB_URL . "/pictures/seminar/" . $image;
    }
    else {
      return "";
    }
   } catch (Exception $e) {
     throw $e;
   }
  } 
  
  public static function getImagePath() {
    return IMAGES_PATH . "/seminar/";
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
 
  public static function getAllForFront($page = 1, $limit = 5) {
    $offset = ($page - 1) * $limit;
    $db = Database::instance();
      
      
    $db   = Database::instance();
    $select = $db->select()
    ->from(self::$_tableName)
    ->order('display_order')
    ;
    
    $selectCount = clone($select);
    $count = count($selectCount->query()->fetchAll());
    
    $select->limit($limit, $offset);
    
    
    $data = $select->query()->fetchAll();
    
    
    return array('data' => $data, 'count' => $count);  
   
 }
 
  public static function getSeminarByUrl($url) {
      $db = Database::instance();
      $select = $db->select()
      ->from('seminar')
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
      

      return parent::create($data);
   }
  /**
   * Method will update specific page
   * 
   * @param array $data
   * @param int $id
   * @return boolean
   */
   
     public static function getSeminarUrl() {
      return WEB_URL . "seminar.php?url=";
  }
  
   
  public static function edit($data, $id) {
   
       return parent::edit($data, $id);
  }
  
  public static function updateOrder($items) {
    self::updateDisplayOrder($items,self::$_tableName);
    }
  
}
