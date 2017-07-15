<?php 

class HtmlBox extends Model {
  
  static protected $_tableName = "html_box";
  
 
  public static function getImageUrl($image) {
   try {
    if($image && is_file(IMAGES_PATH . "/html-box/" . $image)) {
      return WEB_URL . "/pictures/html-box/" . $image;
    }
    else {
      return "";
    }
   } catch (Exception $e) {
     throw $e;
   }
  } 
  
  public static function getImagePath() {
    return IMAGES_PATH . "/html-box/";
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
  
  
   public static function create($data) {

      $data['image']     = Utils::imageUpload('image', self::getImagePath(), Utils::generateUrl($data['title'])  . "");

      return parent::create($data);
   }
  /**
   * Method will update specific page
   * 
   * @param array $data
   * @param int $id
   * @return boolean
   */
  public static function edit($data, $id) {
   
       return parent::edit($data, $id);
  }
  
  public static function updateOrder($items) {
    self::updateDisplayOrder($items,self::$_tableName);
    }
  
}
