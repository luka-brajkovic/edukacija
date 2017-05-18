<?php

class FooterLink extends Model {
    
  static protected $_tableName = "footer_link";
  
  /**
   * Method will list all footer links for specific group
   * 
   * @param int $groupID
   * @return array
   */
  public static function getAllFooterLink($groupID) {
    
    $db = Database::instance();
    $select = $db->select()
      ->from('footer_link')
      ->where('footer_group_id = ?', $groupID)
      ->order('display_order');

    $data = $select->query()->fetchAll();
    
    return $data;
  }
    
  /**
   * Method will return next display order number for footer links based on $groupID
   * @param int $groupID
   * @return int
   */
  public static function getNextDisplayOrder($groupID) {
    $db   = Database::instance();
    $select = $db->select()
      ->from('footer_link', 'COUNT(id) as k')
      ->where('footer_group_id = ?', $groupID)
      ;
    $data = $select->query()->fetch();
    return $data['k'] + 1;
  }
  
  
  /**
   * Method will create new footer link
   * 
   * @param array $data
   * @return boolean
   */
  public static function create($data) {
    $data['display_order']  = self::getNextDisplayOrder($data['footer_group_id']);
    $status                 = parent::create($data);
    return $status;
  }
  
  /**
   * Method will re-order footer links
   * 
   * @param array $items
   */
  public static function orderFooterLink($items) {
    $db = Database::instance();
    $order = 1;
    foreach($items as $id) {
      $db->query("UPDATE footer_link SET display_order = $order WHERE id = ?", $id);
      $order++;
    }
  }
  
}