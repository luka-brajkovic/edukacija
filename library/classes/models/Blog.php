<?php

class Blog extends Model {
  
  public static function getAllCategories() {
    
    
      
    $db = Database::instance();
    
    $select = $db->select()
      ->from(array('C' => 'blog_category'), '')
      ->joinLeft(array('A' => 'blog_article'), 'C.id = A.blog_category_id', '')
      ->order('C.display_order')
      ->columns(array(
        'C.id',
        'C.url',
        'C.title',
        'COUNT(A.id) as a_num'
      ))
      ->group('C.id')
      ;
    
    $data = $select->query()->fetchAll();
    return $data;
    
  }
  
  public static function getRelatedArticles($id, $categoryID) {
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'blog_article'), '')
      ->join(array('C' => 'blog_category'), 'C.id = A.category_id', '')
      ->order('date DESC')
      ->where('C.id = ?', $categoryID)
      ->where('A.id != ?', $id)
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
        'A.date',
        'A.small_image',
        'A.homepage',
        'C.title as cat_name',
        'C.url as cat_url'
      ))
      ;
    
    $select->limit(10);
    
    $data = $select->query()->fetchAll();
    return $data;
  }
  
  public static function getArticlesForCategoryAdmin($categoryID, $page = 1, $limit = 20) {
      $offset = ($page - 1) * $limit;
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'blog_article'), '')
      ->join(array('C' => 'blog_category'), 'C.id = A.blog_category_id', '')
      ->order('A.display_order')
      ->columns(array(
        'A.id as id',
        'A.blog_category_id',
        'A.title',
        'A.url',
        'A.leed',
        'A.status',
        'A.text',
        'A.image',
        'A.thumb_image',
        'A.show_on_homepage',
        'C.title as cat_title'
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
  
   public static function getArticlesForCategory($categoryID, $page = 1, $limit = 1000) {
      $offset = ($page - 1) * $limit;
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'blog_article'), '')
      ->join(array('C' => 'blog_category'), 'C.id = A.blog_category_id', '')
      ->order('A.display_order')
      ->columns(array(
        'A.id as id',
        'A.blog_category_id',
        'A.title',
        'A.url',
        'A.leed',
        'A.status',
        'A.text',
        'A.image',
        'A.thumb_image',
        'A.show_on_homepage',
        'C.title as cat_title'
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
  
  public static function getArticleByUrl($url) {
      $db = Database::instance();
      $select = $db->select()
      ->from('blog_article')
      ->where('url =  ?',$url)
      ;
      $data = $select->query()->fetch();
      
      return $data;
  }  
  
  public static function getBlogCategoryByUrl($url) {
      $db = Database::instance();
      $select = $db->select()
      ->from('blog_category')
      ->where('url =  ?',$url)
      ;
      $data = $select->query()->fetch();
      
      return $data;
  }  
  
  public static function getLatestArticles($limit = 5) {
    $db = Database::instance();
    $select = $db->select()
      ->from(array('A' => 'blog_article'), '')
      ->join(array('C' => 'blog_category'), 'C.id = A.blog_category_id', '')
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
  
   public static function getAllArticlesForIndex() {
    
    
      
    $db = Database::instance();
    
    $select = $db->select()
      ->from('blog_article')
      ->order('ctime DESC')
      ->where('show_on_homepage = 1')
      ->limit(6)
      ;
    
    $data = $select->query()->fetchAll();
    return $data;
    
  }
  
   public static function getNewArticles() {
    
    
      
    $db = Database::instance();
    
    $select = $db->select()
      ->from('blog_article')
      ->order('ctime DESC')
      ->limit(6)
      ;
    
    $data = $select->query()->fetchAll();
    return $data;
    
  }
  
  
   public static function getAllArticlesForTag($tag , $page = 1) {
    $limit = 8;
    $offset = ($page - 1) * $limit;
    $db = Database::instance();
    
    $select = $db->select()
      ->from(array('A' => 'blog_article'), '')
      ->join(array('C' => 'blog_article_tag'), 'A.id = C.blog_article_id', '')
      ->order('date DESC')
      ->where('C.tag = ?', $tag)
      ->columns(array(
        'A.id as id',
        'A.title',
        'A.url',
        'A.leed',
        'A.text',
        'A.image',
        'A.date',
      ))
      ;
    $selectCount = clone($select);
    
    $count = count($selectCount->query()->fetchAll());
    
    $select->limit($limit, $offset);

    $data = $select->query()->fetchAll();
    return array('data' => $data, 'count' => $count);
      
    return $data;
  }
  public static function getAllTagsForArticle($articleID) {
      $db = Database::instance();
    
    $select = $db->select()
      ->from('blog_article_tag')
      ->where('blog_article_id = ?',$articleID)
      ;
    $data = $select->query()->fetchAll();
    return $data;
  }
  
  
  
   public static function getAllArticlesForFront($cat, $page = 1, $limit=8) {
    $offset = ($page - 1) * $limit;
    $db = Database::instance();
    
    if(!empty($cat)){
       $select1 = $db->select()
      ->from('blog_category')
      ->order('ctime DESC')
      ->where('url = ?',$cat)
      ;
    $data = $select1->query()->fetch();
    }
    
    
    $select = $db->select()
      ->from('blog_article')
      ->order('ctime DESC')
      ;
    if(!empty($cat)){
        $select->where('blog_category_id  = ?',$data['id']);
    }
    
    $selectCount = clone($select);
    $count = count($selectCount->query()->fetchAll());
    
    $select->limit($limit, $offset);
    
    $data = $select->query()->fetchAll();
    return array('data' => $data, 'count' => $count);
      
    return $data;
    
  }
  
  
   public static function getArticlesForSearch($searchTerm, $page = 1, $limit=8) {
    
    $offset = ($page - 1) * $limit;
 
    $db   = Database::instance();
    $select = $db->select()
      ->from('blog_article')
      ->where('title LIKE ?', '%' . $searchTerm . '%')
     
      ;
    
      $selectCount = clone($select);
      $count = count($selectCount->query()->fetchAll());
      
    
      $select->limit($limit, $offset);
      
      $data = $select->query()->fetchAll();
    
    return array('data' => $data, 'count' => $count);
  }
  
  public static function getTagsForAll() {
      $db = Database::instance();
      
      $select = $db->select()
      ->from('blog_article_tag')
      ->limit(15)
      ;
      $data = $select->query()->fetchAll();
      return $data;
  }
  
  
  
  const IMAGE_FIELD_NAME = 'image';
  
  const SMALL_IMAGE_FIELD_NAME = 'small_image';
  
  public static function getImagePath($small = FALSE) {
    if($small) {
      return IMAGES_PATH . "/blog/small/";
    }
    else {
      return IMAGES_PATH . "/blog/";
    }
  }
  
  
  
  public static function getImageUrl($image, $small = FALSE) {
    if($small) {
      return WEB_URL . "pictures/blog/small/" . $image;
    }
    else {
      return WEB_URL . "pictures/blog/" . $image;
    }
  }
  
  public static function getArticleUrl() {
      return WEB_URL . "article.php?url=";
  }
  
  public static function getCategoryUrl() {
      return WEB_URL . "blog.php?url=";
  }
  
  
  
  public static function updateBlogDisplayOrder($items,$tableName) {
    self::updateDisplayOrder($items,$tableName);
    }
  
}