<?php

class Slider extends Model {
  
  public static function getAllGallerys() {
    
    
      
    $db = Database::instance();
    
    $select = $db->select()
      ->from(array('C' => 'slider'), '')
      ->joinLeft(array('A' => 'slider_slide'), 'C.id = A.slider_id', '')
      ->columns(array(
        'C.id',
        'C.title',
        'COUNT(A.id) as a_num'
      ))
      ->group('C.id')
      ;
    
    $data = $select->query()->fetchAll();
    return $data;
    
  }
  
  
  
  public static function getSlideForSlider($categoryID, $page = 1, $limit = 20) {
      $offset = ($page - 1) * $limit;
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'slider_slide'), '')
      ->join(array('C' => 'slider'), 'C.id = A.slider_id', '')
      ->order('A.display_order')
      ->columns(array(
        'A.id as id',
        'A.slider_id',
        'A.image',
        'A.title',
        'C.title as parent_title'
      ))
      ;
    
    if(!is_null($categoryID)) {
      $select->where('C.id = ?', $categoryID);
    }
    
    $selectCount = clone($select);
    $count = count($selectCount->query()->fetchAll());
    
    $select->limit($limit, $offset);
    
    $data = $select->query()->fetchAll();
    return array('data' => $data, 'count' => $count);
  }
  
  public static function getSlidesForSlider($categoryID, $page = 1, $limit = 20) {
    
    $offset = ($page - 1) * $limit;
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'department_staff'), '')
      ->join(array('C' => 'department'), 'C.id = A.department_id', '')
      ->order('date DESC')
      ->where('A.status = 1')
      ->columns(array(
        'A.id as id',
        'A.category_id',
        'A.title',
        'A.url',
        'A.leed',
        'A.text',
        'A.text',
        'A.image',
      ))
      ;
    
    if(!is_null($categoryID)) {
      $select->where('C.id = ?', $categoryID);
    }
    
    $selectCount = clone($select);
    $count = count($selectCount->query()->fetchAll());
    
    $select->limit($limit, $offset);
    
    $data = $select->query()->fetchAll();
    return array('data' => $data, 'count' => $count);
  }
  
 public static function getForIndex() {
    
    
      
    $db = Database::instance();
    
    $select = $db->select()
      ->from(array('C' => 'slider'), '')
      ->joinLeft(array('A' => 'slider_slide'), 'C.id = A.slider_id', '')
      ->where('show_on_homepage = 1')
      ->columns(array(
       'A.title',
       'A.url',
       'A.image',
       'A.text'
      ))
     
      ;
    
    $data = $select->query()->fetchall();
    return $data;
    
  }
  
  
  
  const IMAGE_FIELD_NAME = 'image';
  

  
  public static function getImagePath() {
   
      return IMAGES_PATH . "/slider/";
    
  }
  
  
  
  public static function getImageUrl($image) {

      return WEB_URL . "pictures/slider/" . $image;

  
  }
  
  
  public static function updateBlogDisplayOrder($items,$tableName) {
    self::updateDisplayOrder($items,$tableName);
    }
  
}

