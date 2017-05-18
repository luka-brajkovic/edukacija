<?php

class FooterGroup extends Model {
    
  static protected $_tableName = "footer_group";
  
  /**
   * Method will list all footer groups with specific vendor_id 
   * 
   * @param int $vendorID
   * @return array
   */
  public static function getAllFooterGroups() {
    
    $db = Database::instance();
    $select = $db->select()
      ->from('footer_group')
      ->order('display_order');

    $data = $select->query()->fetchAll();
    
    return $data;
  }
    
  /**
   * Method will return next display order number for footer group based on vendor_id
   * @param int $vendorID
   * @return int
   */
  public static function getNextDisplayOrder() {
    $db   = Database::instance();
    $select = $db->select()
      ->from('footer_group', 'COUNT(id) as k')
      ;
    
    $data = $select->query()->fetch();
    return $data['k'] + 1;
  }
  
  
  /**
   * Method will create new footer group
   * 
   * @param array $data
   * @return boolean
   */
  public static function create($data) {
    $data['display_order']  = self::getNextDisplayOrder();
    debug($data);
    $status                 = parent::create($data);
    return $status;
  }
  
  /**
   * Method will update footer group with new data
   * 
   * @param array $data
   * @param int $id
   * @return boolean
   */
  public static function edit($data, $id) {
    $status                 = parent::edit($data, $id);
    return $status;
  }
  
  /**
   * Method will check if footer group is good for removal
   * 
   * @param int $id
   * @return boolean
   */
  public static function canRemoveFooterGroup($id) {
    $db               = Database::instance();
    $dependentTables  = self::getDependentTables();
    foreach($dependentTables as $table => $column) {
      $data = $db->select()
        ->from($table, 'COUNT(id) as k')
        ->where("$column = ?", $id)
        ->query()
        ->fetch();
      if($data['k'] > 0) {
        return FALSE;
      }
    }
    return TRUE;
  }
  
  /**
   * Method will return all tables that must be empty before removal of footer group
   * 
   * @return array
   */
  public static function getDependentTables() {
    return array(
      'footer_link'      => 'footer_group_id'
    );
  }
  
  /**
   * Method will re-order footer groups
   * 
   * @param array $items
   */
  public static function orderFooterGroups($items) {
    $db = Database::instance();
    $order = 1;
    foreach($items as $id) {
      $db->query("UPDATE footer_group SET display_order = $order WHERE id = ?", $id);
      $order++;
    }
  }
  
  
  /**
   * Method will return number of links for specific footer group
   * 
   * @param int $groupID
   * @return int 
   */
  public static function getNumberOfLinks($groupID) {
    $db   = Database::instance();
    $data = $db->select()
      ->from('footer_link', 'COUNT(id) as k')
      ->where('footer_group_id = ?', $groupID)
      ->query()->fetch()
      ;
    
    return $data['k'];
  }
  
}