<?php 

class Utils {
  
  /**
   * Method will generate URL from string
   * 
   * @param string $strText
   * @param string $replaceSign
   * @return string
   */
  public static function generateUrl($strText, $replaceSign = "-") {
    $strText = str_replace("š", "s", $strText);
    $strText = str_replace("Š", "s", $strText);
    $strText = str_replace("ž", "z", $strText);
    $strText = str_replace("Ž", "z", $strText);
    $strText = str_replace("Č", "c", $strText);
    $strText = str_replace("č", "c", $strText);
    $strText = str_replace("Ć", "c", $strText);
    $strText = str_replace("ć", "c", $strText);
    $strText = str_replace("Đ", "dj", $strText);
    $strText = str_replace("đ", "dj", $strText);
    $strText = preg_replace('/[^A-Za-z0-9-]/', ' ', $strText);
    $strText = preg_replace('/ +/', ' ', $strText);
    $strText = trim($strText);
    $strText = str_replace(' ', $replaceSign, $strText);
    $strText = preg_replace('/-+/', $replaceSign, $strText);
    $strText = strtolower($strText);
    return $strText;
  }
  
  /**
   * Method will create text for search
   * 
   * @param string $strText
   * @return string
   */
  public static function createSearch($strText) {
    $strText = str_replace("š", "s", $strText);
    $strText = str_replace("Š", "s", $strText);
    $strText = str_replace("ž", "z", $strText);
    $strText = str_replace("Ž", "z", $strText);
    $strText = str_replace("Č", "c", $strText);
    $strText = str_replace("č", "c", $strText);
    $strText = str_replace("Ć", "c", $strText);
    $strText = str_replace("ć", "c", $strText);
    $strText = str_replace("Đ", "dj", $strText);
    $strText = str_replace("đ", "dj", $strText);
    $strText = preg_replace('/ +/', ' ', $strText);
    $strText = trim($strText);
    return $strText;
  }
  
  public static function decodeString($strText) {
    $strText = str_replace("Å½", "Ž", $strText);
    $strText = str_replace("Å¾", "ž", $strText);
    $strText = str_replace("Å¡", "š", $strText);
    $strText = str_replace("Å ", "Š", $strText);
    $strText = str_replace("Ä†", "Ć", $strText);
    $strText = str_replace("Ä‡", "ć", $strText);
    $strText = str_replace("æ", "ć", $strText);
    $strText = str_replace("ÄŒ", "Č", $strText);
    $strText = str_replace("È", "Č", $strText);
    
    $strText = str_replace("Ä", "č", $strText);
    $strText = str_replace("è", "č", $strText);
    
    
    return $strText;
  }
  
  /**
   * Method will generate random string
   * 
   * @param int $length
   * @return string
   */
  public static function generateRandomString($length = 10) {
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  
  /**
   * Method will upload image and move it to proper plce. As return it will give a name of file.
   * 
   * @param string $name
   * @param string $targetDir
   * @param string $fileName
   * @return string
   */
  public static function imageUpload($name, $targetDir, $fileName) {
    $return = "";
    if(isset($_FILES["$name"]) && $_FILES["$name"]['name'] != "" && $_FILES["$name"]['size'] > 0) {
      $tmpName  = $_FILES["$name"]["tmp_name"];
      $getExt   = explode ('.', $_FILES["$name"]['name']);
      $fileExt  = strtolower($getExt[count($getExt)-1]);
      $return   = $fileName.".".$fileExt;
      $newName  = $targetDir.$return;

      move_uploaded_file($tmpName, $newName);
    }
    return $return;
  }

  /**
  * @param string String with unicode encoded characters to decode
  * @return string Decoded string
  */
  public static function decodeUnicode($string) {
    $string = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
      return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
    }, $string);
    return $string;
  }
  
  

  /**
  * This function can be used to upload multiple files, or can be used to upload files that have belongsTo set
  * @param string $path This is key under which file will appear
  * @param string $uploadFolder Location where to upload files
  * @param string $belongsTo If we have nested array, use this to locate it
  * @param string $fileNamePrefix If file after uploading should use some prefix
  * @param string $delimeter When generating random name for string, use this to create spaces between words
  * @return array List with random generated file names of uploaded files
  */
  public static function uploadMultiFiles($path, $uploadFolder, $belongsTo = '', $fileNamePrefix = '', $delimeter = '_') {
    $names = $tempNames = $_FILES;
    if (!empty($belongsTo)) {
      $belongsTo = explode('.', $belongsTo);
      foreach ($belongsTo as $key => $value) {
        $names     = $names[$value];
        $tempNames = $tempNames[$value];
      }
    }
    $names     = $names['name'];
    $tempNames = $tempNames['tmp_name'];

    $path = explode('.', $path);
    
    foreach ($path as $key => $value) {
      $names     = $names[$value];
      $tempNames = $tempNames[$value];
    }
    $namesArray = array();
    if (is_array($names)) {
      foreach ($names as $key => $value) {
        if (is_uploaded_file($tempNames[$key])) {
          $ext      = pathinfo($value, PATHINFO_EXTENSION);
          $value    = str_replace(' ', '', $value);
          $fileName = Utils::fileExist(IMAGES_PATH . "/" . $uploadFolder . "/" , $fileNamePrefix . $delimeter . self::generateRandomString() . '.' . $ext);
          if (!move_uploaded_file($tempNames[$key], IMAGES_PATH . "/" . $uploadFolder . "/" . $fileName)) {
              throw new Exception("Could not upload files or images.");
          } else {
              $namesArray[$key] = $fileName;
          }
        }
      }
    } else {
      if (is_uploaded_file($tempNames)) {
        $value    = str_replace(' ', '', $names);
        $ext      = pathinfo($names, PATHINFO_EXTENSION);
        $fileName = Utils::fileExist(IMAGES_PATH . "/" . $uploadFolder . "/" , $fileNamePrefix . $delimeter . self::generateRandomString() . '.' . $ext);
        if (!move_uploaded_file($tempNames, IMAGES_PATH . "/" . $uploadFolder . "/" . $fileName)) {
            throw new Exception("Could not upload files or images.");
        } else {
            $namesArray[1] = $fileName;
        }
      }
    }
    return $namesArray;
  }

  /**
  * This function will check if file with given name exists.
  * If it does, it will slightly alter filename and return it
  * @param string $path This is path where file should be
  * @param string $filename File name that should be checked
  * @return string Altered / original filename
  */
  public static function fileExist($path, $filename) {
    $base_file_name = explode('.',$filename);
    if(file_exists($path.$filename)){
        $add = 1;
        while (file_exists($path.$filename)){
            list($file, $ext) = explode('.',$filename);
            $filename = $base_file_name[0].'_'.$add.".".$ext;
            $add ++;
        }
    }    
    return $filename;
  }
  
  public static function generateToken() {
    $args         = func_get_args();
    $stringToHash = '';
    foreach ($args as $index => $arg) {
        $stringToHash .= ' ' . $arg;
    }
    return sha1($stringToHash);
  }

  /**
  * This function will format the price value according to the
  * vendor settings for decimal number for prices
  * @param float $price
  * @return int | float
  */
  public static function formatPrice($price, $decimalNumber = 2) {
    return number_format($price, $decimalNumber);
  }
  
  public static function validEmail($email){
    // First, we check that there's one @ symbol, and that the lengths are right
    if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return false;
    }
    // Split it into sections to make life easier
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
        if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
            return false;
        }
    }
    if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
            return false; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                return false;
            }
        }
    }

    return true;
}

  public static function convertPriceInRsd($priceInEur, $course =false) {
    $db     = Database::instance();
    if (!$course) {
      $course = $db->select()
              ->from('settings', 'param_value')
              ->where('param_name = ?' , 'course')
              ->query()->fetchColumn();
    }
    return  bcmul($priceInEur, $course, 2);
  }
  
  public static function formatPriceWithCurrency($number) {
    return self::formatPrice($number);
  }
}