<?php

class VideoGallery extends Model {
  
 
  

  
  public static function getvideoForCourse($categoryID) {

    $db = Database::instance();
    $select = $db->select()
      ->from('course_video')
      ->order('display_order')
      ->where('course_id = ?', $categoryID);
      ;
   



    $data = $select->query()->fetchAll();
    return $data;
  }
  
  public static function getArticlesForCategory($categoryID, $page = 1, $limit = 20) {
    
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
  
  public static function getLatestArticles($limit = 5) {
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'blog_article'), '')
      ->join(array('C' => 'blog_category'), 'C.id = A.category_id', '')
      ->order('display_order DESC')
      ->where('A.status = 1')
      ->limit($limit)
      ->columns(array(
        'A.id as id',
        'A.category_id',
        'A.title',
        'A.url',
        'A.leed',
        'A.text',
        'A.text',
        'A.image',
        'A.small_image',
        'A.homepage',
        'A.date',
        'C.name as cat_name'
      ))
      ;
    
    $data = $select->query()->fetchAll();
    return $data;
  }
  
  public static function getHomeArticles() {
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'blog_article'), '')
      ->join(array('C' => 'blog_category'), 'C.id = A.category_id', '')
      ->order('date DESC')
      ->where('A.status = 1')
      ->where('homepage = ?', 1)
      ->columns(array(
        'A.id as id',
        'A.category_id',
        'A.title',
        'A.url',
        'A.leed',
        'A.text',
        'A.text',
        'A.image',
        'A.small_image',
        'A.homepage',
        'A.date',
        'C.name as cat_name'
      ))
      ;
    
    $data = $select->query()->fetchAll();
    return $data;
    
  }
  
  const IMAGE_FIELD_NAME = 'image';
  

  
  public static function getImagePath($small = FALSE) {
   
      return IMAGES_PATH . "/video_gallery/";
    
  }
  
  
  
  public static function getImageUrl($image, $small = FALSE) {

      return WEB_URL . "pictures/video_gallery/" . $image;

  
  }
  
  
  public static function updateBlogDisplayOrder($items,$tableName) {
    self::updateDisplayOrder($items,$tableName);
    }
  
}