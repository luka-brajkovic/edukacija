<?php 

class Model {
  
  static protected $_tableName = NULL;

  /**
   * Method will create new object in database based on data array
   * 
   * @param array $data
   * @return boolean
   */
  public static function create($data, $wantsCtime = true) {
    self::_cleanUpData($data);
    
    $tableName  = self::getTableName();

    $object     = new View($tableName);
    if(!isset($data['ctime']) && $wantsCtime) {
      $data['ctime'] = time();
    }
    if(!isset($data['mtime']) && $wantsCtime) {
      $data['mtime'] = time();
    }
    $object->setFromArray($data);
    $object->save();
    return $object;
  }
  
  /**
   * Method will update specific row based on id provided
   * 
   * @param array $data
   * @param bigint $id
   * @return boolean
   */
  public static function edit($data, $id) {
    self::_cleanUpData($data);
    $tableName  = self::getTableName();
    $object     = new View($tableName, $id);
    if(!isset($data['mtime'])) {
      $data['mtime'] = time();
    }
    $object->setFromArray($data);
    return $object->save();
  }
  
  /**
   * Method will remove specific row from DB
   * 
   * @param bigint $id
   */
  public static function remove($id) {
    $db         = Database::instance();
    $tableName  = self::getTableName();
    $db->query("DELETE FROM $tableName WHERE id = ?", $id);
  }
  
  /**
   * Method will return table name
   * 
   * @return string
   */
  public static function getTableName() {
    $subClass = get_called_class();
    return $subClass::$_tableName;
  }
  
  /**
   * Method will return object based on table name and id
   * 
   * @param string $tableName
   * @param bigint $id
   * @return \View
   */
  public static function find($tableName, $id) {
    return new View($tableName, $id);
  }
  
  public static function findSIF($tableName, $id) {
    return new View($tableName, $id, NULL, "SIF");
  }
  
  public static function findSifSmall($tableName, $id) {
    return new View($tableName, $id, NULL, "sif");
  }
  
  protected static function _cleanUpData(&$data) {
    unset($data['action']);
    unset($data['id']);
  }
  
  public static function updateDisplayOrder($items,$tableName) {
    $db = Database::instance();
    $order = 1;
    foreach($items as $id) {
      $db->query("UPDATE $tableName SET display_order = $order WHERE id = $id");
      $order++;      var_dump($id);
    }
  }
  
}