<?php 

class Page extends Model {
  
  static protected $_tableName = "page";
  
  /**
   * Method will create new page
   * 
   * @param array $data
   * @return boolean
   */
  public static function create($data) {
    $data['url']        = Utils::generateUrl($data['title']);
    if(isset($data['products']) && !empty($data['products'])) {
      $data['products'] = implode(",", $data['products']);
    }
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
    $data['url']        = Utils::generateUrl($data['title']);
    if(isset($data['products']) && !empty($data['products'])) {
      $data['products'] = implode(",", $data['products']);
    }
    return parent::edit($data, $id);
  }
  
  /**
   * Method will return all pages cache key
   * 
   * @return string
   */
  public static function getAllPagesCacheKey() {
    return "all_pages";
  }
  
  /**
   * Method will clear cache for all pages list
   * 
   * @return boolean
   */
  public static function clearAllPagesCache() {
    $cache      = Cache::instance();
    $cacheKey   = self::getAllPagesCacheKey();
    return $cache->remove($cacheKey);
  }
  
  /**
   * Method will return list of all vendors
   * 
   * @return array
   */
  public static function getAllPages() {
    $cache      = Cache::instance();
    $cacheKey   = self::getAllPagesCacheKey();
    if($cache->test($cacheKey)) {
      $data = $cache->load($cacheKey);
    }
    else {
      $db = Database::instance();
      $select = $db->select()
        ->from('page')
        ;
      
      $data = $select
        ->query()
        ->fetchAll();
      
      $cache->save($data, $cacheKey);
    }
    
    return $data;
  }
  
  public static function getPageByUrl($url) {
    $db = Database::instance();
    $select = $db->select()
      ->from('page')
      ->where('url = ?', $url)
      ;
    return $select->query()->fetch();
  }
  
  public static function setPageUrl() {
  
    return WEB_URL."strana.php?url=";
  }
  
}