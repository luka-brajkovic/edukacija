<?php 

class Settings extends Model {
  
  static protected $_tableName = "settings";
  
  /**
   * Method will update all settings provided as array
   * 
   * @param array $data
   */
  public static function updateSettings($data) {
    
    $db = Database::instance();
    $db->beginTransaction();
    
    try {
      
      foreach($data as $paramName => $paramValue) {
        $db->query('UPDATE settings SET param_value = ? WHERE param_name = ?', array($paramValue, $paramName));
      }
      
      $db->commit();
      
      self::clearAllSettingsCache();
      
    } catch (Exception $ex) {
      $db->rollback();
    }
  }
  
  public static function getImagePath() {
    return IMAGES_PATH . "/homepage/";
  }
  
  public static function getAboutImagePath() {
    return IMAGES_PATH . "/about/";
  }
  
  public static function updateAboutSettings($data) {
    
    try {
      
      $db = Database::instance();
      $db->beginTransaction();
      
      unset($data['action']);
      foreach($data as $paramName => $paramValue) {
        $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($paramValue, $paramName));
      }
      
//      echo "<pre>";
//      print_r($_FILES);
//      die();
      
      if($_FILES['slide_1']['name'] != "") {
        $mainSlideUrl = "slide_1";
        $image = Utils::imageUpload("slide_1", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "slide_1"));
        }
      }
      
      if($_FILES['slide_2']['name'] != "") {
        $mainSlideUrl = "slide_2";
        $image = Utils::imageUpload("slide_2", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "slide_2"));
        }
      }
      
      if($_FILES['slide_3']['name'] != "") {
        $mainSlideUrl = "slide_3";
        $image = Utils::imageUpload("slide_3", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "slide_3"));
        }
      }
      
      if($_FILES['box_1_image']['name'] != "") {
        $mainSlideUrl = "box_1_image";
        $image = Utils::imageUpload("box_1_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "box_1_image"));
        }
      }
      
      if($_FILES['box_2_image']['name'] != "") {
        $mainSlideUrl = "box_2_image";
        $image = Utils::imageUpload("box_2_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "box_2_image"));
        }
      }
      
      if($_FILES['partnership_image']['name'] != "") {
        $mainSlideUrl = "partnership_image";
        $image = Utils::imageUpload("partnership_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "partnership_image"));
        }
      }
      
      if($_FILES['big_image']['name'] != "") {
        $mainSlideUrl = "big_image";
        $image = Utils::imageUpload("big_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "big_image"));
        }
      }
      
      if($_FILES['mini_box_1_image']['name'] != "") {
        $mainSlideUrl = "mini_box_1_image";
        $image = Utils::imageUpload("mini_box_1_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "mini_box_1_image"));
        }
      }
      
      if($_FILES['mini_box_2_image']['name'] != "") {
        $mainSlideUrl = "mini_box_2_image";
        $image = Utils::imageUpload("mini_box_2_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "mini_box_2_image"));
        }
      }
      
      if($_FILES['mini_box_3_image']['name'] != "") {
        $mainSlideUrl = "mini_box_3_image";
        $image = Utils::imageUpload("mini_box_3_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "mini_box_3_image"));
        }
      }
      
      if($_FILES['mini_box_4_image']['name'] != "") {
        $mainSlideUrl = "mini_box_4_image";
        $image = Utils::imageUpload("mini_box_4_image", Settings::getAboutImagePath(), $mainSlideUrl);
        if($image) {
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array($image, "mini_box_4_image"));
        }
      }
      
      
    } catch (Exception $ex) {
      debug($ex->getMessage());
      $db->rollback();
    }
    
  }
  
  public static function updateHomepageSettings($data) {
    $db = Database::instance();
    $db->beginTransaction();
    
    try {
      unset($data['action']);
      foreach($data as $paramName => $paramValue) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($paramValue, $paramName));

      }
      
//      echo "<pre>";
//      print_r($_FILES);
//      die();
      
if($_FILES['main_slide_1']['name'] != "") {
      $mainSlideUrl = "slide-1";
      $image = Utils::imageUpload("main_slide_1", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_1"));
      }
}
      
if($_FILES['main_slide_2']['name'] != "") {
      $mainSlideUrl = "slide-2";
      $image = Utils::imageUpload("main_slide_2", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_2"));
      }
}
if($_FILES['main_slide_3']['name'] != "") {
      
      $mainSlideUrl = "slide-3";
      $image = Utils::imageUpload("main_slide_3", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_3"));
      }
}
      
if($_FILES['main_slide_4']['name'] != "") {
      $mainSlideUrl = "slide-4";
      $image = Utils::imageUpload("main_slide_4", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_4"));
      }
      
}
if($_FILES['main_slide_5']['name'] != "") {
      $mainSlideUrl = "slide-5";
      $image = Utils::imageUpload("main_slide_5", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_5"));
      }
      
}

if($_FILES['main_slide_6']['name'] != "") {
      $mainSlideUrl = "slide-6";
      $image = Utils::imageUpload("main_slide_6", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_6"));
      }
      
}

if($_FILES['main_slide_7']['name'] != "") {
      $mainSlideUrl = "slide-7";
      $image = Utils::imageUpload("main_slide_7", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_7"));
      }
      
}

if($_FILES['main_slide_8']['name'] != "") {
      $mainSlideUrl = "slide-8";
      $image = Utils::imageUpload("main_slide_8", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_8"));
      }
      
}

if($_FILES['main_slide_9']['name'] != "") {
      $mainSlideUrl = "slide-9";
      $image = Utils::imageUpload("main_slide_9", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_9"));
      }
      
}

if($_FILES['main_slide_10']['name'] != "") {
      $mainSlideUrl = "slide-10";
      $image = Utils::imageUpload("main_slide_10", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "main_slide_10"));
      }
      
}

if($_FILES['baner_1']['name'] != "") {
      $mainSlideUrl = "baner-1";
      $image = Utils::imageUpload("baner_1", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "baner_1"));
      }
}

if($_FILES['baner_2']['name'] != "") {
      
      $mainSlideUrl = "baner-2";
      $image = Utils::imageUpload("baner_2", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "baner_2"));
      }
}
      
if($_FILES['baner_3']['name'] != "") {
      $mainSlideUrl = "baner-3";
      $image = Utils::imageUpload("baner_3", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "baner_3"));
      }
}

if($_FILES['baner_4']['name'] != "") {
      
      $mainSlideUrl = "baner-4";
      $image = Utils::imageUpload("baner_4", Settings::getImagePath(), $mainSlideUrl);
      if($image) {
        $db->query('UPDATE ccs_homepage SET param_value = ? WHERE param_name = ?', array($image, "baner_4"));
      }
     }

      $db->commit();
      
    } catch (Exception $ex) {
debug($ex->getMessage());
      $db->rollback();
    }
  }
  
  /**
   * Method will return all settings 
   * 
   * @return array
   */
  public static function getAllSettings() {
    $db = Database::instance();
    $rows = $db->select()
      ->from('settings')
      ->query()
      ->fetchAll();

    $data = array();
    foreach($rows as $row) {
      $data[$row['param_name']] = $row['param_value'];
    }
    
    return $data;
  }
  
  public static function getAboutSettings() {
    $db = Database::instance();
    $rows = $db->select()
      ->from('about')
      ->query()
      ->fetchAll();

    $data = array();
    foreach($rows as $row) {
      $data[$row['param_name']] = $row['param_value'];
    }
    
    return $data;
  }
  
  public static function getHomepageSettings() {
    $db = Database::instance();
    $rows = $db->select()
      ->from('homepage')
      ->query()
      ->fetchAll();

    $data = array();
    foreach($rows as $row) {
      $data[$row['param_name']] = $row['param_value'];
    }
    
    return $data;
  }
  
  /**
   * Method will return setting value for single paramter
   * 
   * @param string $paramName
   * @return string
   */
  public static function getParamSettings($paramName) {
    $settings = self::getAllSettings();
    return array_key_exists($paramName, $settings) ? $settings[$paramName] : NULL;
  }
  
  /**
   * Method will return cache key for all settings
   * 
   * @return string
   */
  public static function getAllSettingsCacheKey() {
    return "all_settings";
  }
  
  /**
   * Method will clear cache for all settings
   * 
   * @return boolean
   */
  public static function clearAllSettingsCache() {
    $cache      = Cache::instance();
    $cacheKey   = self::getAllSettingsCacheKey();
    return $cache->remove($cacheKey);
  }
  
  public static function getImageUrl($image) {
    return WEB_URL . "pictures/homepage/" . $image;
  }
  
  public static function getAboutUrl($image) {
    return WEB_URL . "pictures/about/" . $image;
  }
  
  public static function getUploadsUrl($file) {
    return WEB_URL . "uploads/" . $file;
  }
  
  public static function getUploadedFiles() {
    $files = scandir(UPLOADS_PATH);
    sort($files);
    $return = array();
    foreach($files as $file) {
      if($file != "." && $file != "..") {
        $return[] = array(
          'url' => self::getUploadsUrl($file),
          'file_name' => $file
        );
      }
    }
    return $return;
  }
  
}