<?php 

/**
 * Some statistic that we are going to show on dashboard of application. All stats is 
 * cached and we need to clear cache if something is changed.
 */
class Statistic {
  
  const STAT_ACTIVE_PRODUCT_CACHE       = "number_of_active_products";
  const STAT_INACTIVE_PRODUCT_CACHE     = "number_of_inactive_products";
  const STAT_DRAFT_PRODUCT_CACHE        = "number_of_draft_products";
  const STAT_ACTIVE_CATEGORIES_CACHE    = "number_of_active_categories";
  const STAT_INACTIVE_CATEGORIES_CACHE  = "number_of_inactive_categories";
  const STAT_VENDOR_CACHE               = "number_of_vendors";
  const STAT_ADMINS_CACHE               = "number_of_administrators";
  
  /**
   * Method will return number of active products
   * 
   * @return int
   */
  public static function getNumberOfActiveProducts() {
    $cache = Cache::instance();
    if($cache->test(self::STAT_ACTIVE_PRODUCT_CACHE)) {
      $data = $cache->load(self::STAT_ACTIVE_PRODUCT_CACHE);
    }
    else {
      $db   = Database::instance();
      $data = $db->select()
        ->from('product', 'COUNT(id) as k')
        ->where('status = ?', Product::STATUS_ACTIVE)
        ->query()->fetch()
        ;
      $cache->save($data, self::STAT_ACTIVE_PRODUCT_CACHE);
    }
    return $data['k'];
  }
  
  /**
   * Method will return number of inactive products
   * 
   * @return int
   */
  public static function getNumberOfInactiveProducts() {
    $cache = Cache::instance();
    if($cache->test(self::STAT_INACTIVE_PRODUCT_CACHE)) {
      $data = $cache->load(self::STAT_INACTIVE_PRODUCT_CACHE);
    }
    else {
      $db   = Database::instance();
      $data = $db->select()
        ->from('product', 'COUNT(id) as k')
        ->where('status = ?', Product::STATUS_INACTIVE)
        ->query()->fetch()
        ;
      $cache->save($data, self::STAT_INACTIVE_PRODUCT_CACHE);
    }
    return $data['k'];
  }
  
  /**
   * Method will return number of draft products
   * 
   * @return int
   */
  public static function getNumberOfDraftProducts() {
    $cache = Cache::instance();
    if($cache->test(self::STAT_DRAFT_PRODUCT_CACHE)) {
      $data = $cache->load(self::STAT_DRAFT_PRODUCT_CACHE);
    }
    else {
      $db   = Database::instance();
      $data = $db->select()
        ->from('product', 'COUNT(id) as k')
        ->where('status = ?', Product::STATUS_DRAFT)
        ->query()->fetch()
        ;
      $cache->save($data, self::STAT_DRAFT_PRODUCT_CACHE);
    }
    return $data['k'];
  }
  
  /**
   * Method will return number of active categories
   * 
   * @return int
   */
  public static function getNumberOfActiveCategories() {
    $cache = Cache::instance();
    if($cache->test(self::STAT_ACTIVE_CATEGORIES_CACHE)) {
      $data = $cache->load(self::STAT_ACTIVE_CATEGORIES_CACHE);
    }
    else {
      $db   = Database::instance();
      $data = $db->select()
        ->from('category', 'COUNT(id) as k')
        ->where('status = ?', Product_Category::STATUS_ACTIVE)
        ->query()->fetch()
        ;
      $cache->save($data, self::STAT_ACTIVE_CATEGORIES_CACHE);
    }
    return $data['k'];
  }
  
  /**
   * Method will return number of inactive categories
   * 
   * @return int
   */
  public static function getNumberOfInactiveCategories() {
    $cache = Cache::instance();
    if($cache->test(self::STAT_INACTIVE_CATEGORIES_CACHE)) {
      $data = $cache->load(self::STAT_INACTIVE_CATEGORIES_CACHE);
    }
    else {
      $db   = Database::instance();
      $data = $db->select()
        ->from('category', 'COUNT(id) as k')
        ->where('status = ?', Product_Category::STATUS_INACTIVE)
        ->query()->fetch()
        ;
      $cache->save($data, self::STAT_INACTIVE_CATEGORIES_CACHE);
    }
    return $data['k'];
  }
  
  /**
   * Method will return number of vendors
   * 
   * @return int
   */
  public static function getNumberOfVendors() {
    $cache = Cache::instance();
    if($cache->test(self::STAT_VENDOR_CACHE)) {
      $data = $cache->load(self::STAT_VENDOR_CACHE);
    }
    else {
      $db   = Database::instance();
      $data = $db->select()
        ->from('vendor', 'COUNT(id) as k')
        ->query()->fetch()
        ;
      $cache->save($data, self::STAT_VENDOR_CACHE);
    }
    return $data['k'];
  }
  
  /**
   * Method will return number of administrators
   * 
   * @return int
   */
  public static function getNumberOfAdministrators() {
    $cache = Cache::instance();
    if($cache->test(self::STAT_ADMINS_CACHE)) {
      $data = $cache->load(self::STAT_ADMINS_CACHE);
    }
    else {
      $db   = Database::instance();
      $data = $db->select()
        ->from('administrator', 'COUNT(id) as k')
        ->query()->fetch()
        ;
      $cache->save($data, self::STAT_ADMINS_CACHE);
    }
    return $data['k'];
  }
  
  /**
   * Method will return number of pages for specific vendor
   * 
   * @param int $vendorID
   * @return int
   */
  public static function getNumberOfPages($vendorID = NULL) {
    $pages = Page::getAllPages($vendorID);
    return count($pages);
  }
  
}