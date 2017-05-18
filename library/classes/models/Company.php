<?php 

class Company extends Model {
  
  static protected $_tableName = "company";
  
  public static function getImagePath() {
    return IMAGES_PATH . "/company-logo/";
  }
  
  public static function create($data) {
    $data['url']       = Utils::generateUrl($data['name']);
    $data['logo']      = Utils::imageUpload('logo', self::getImagePath(), $data['url']);
    return parent::create($data);
  }
  
  public static function edit($data, $id) {
    $data['url']    = Utils::generateUrl($data['name']);
    $object         = Model::find(self::$_tableName, $id);
    $image          = Utils::imageUpload('logo', self::getImagePath(), $data['url']);
    $data['logo']   = empty($image) ? $object->logo : $image;
    return parent::edit($data, $id);
  }
  
  public static function getImageUrl($image) {
    return WEB_URL . "pictures/company-logo/" . $image;
  }
  
  public static function getAllCompanies() {
    $db = Database::instance();
    $data = $db->select()
      ->from('company')
      ->query()
      ->fetchAll();
    return $data;
  }
  
}