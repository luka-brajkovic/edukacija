<?php 

class FunFact extends Model {
  
  static protected $_tableName = "fun_fact";
  
 
  public static function getImageUrl($image) {
   try {
    if($image && is_file(IMAGES_PATH . "/fun_fact/" . $image)) {
      return WEB_URL . "/pictures/fun_fact/" . $image;
    }
    else {
      return "";
    }
   } catch (Exception $e) {
     throw $e;
   }
  } 
  
  public static function getImagePath() {
    return IMAGES_PATH . "/fun_fact/";
  }
  
  public static function getFunFactInfo($id) {
   $db = Database::instance();
   $data = $db->select()
     ->from('fun_fact')
     ->where('id = ?', $id)
     ->query()->fetch()
      ;
   
   return $data;
 }
  
  public static function getAllFunFact() {
   
   $db   = Database::instance();
    $select = $db->select()
    ->from('fun_fact')
    ->order('display_order')
    ;
    
    $data = $select->query()->fetchAll();
    
    return $data;
   
 }
  
  
   public static function create($data) {
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
  
  public static function updateFunFactDisplayOrder($items) {
    self::updateDisplayOrder($items,self::$_tableName);
    }
  
}