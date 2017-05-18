<?php 

class Website {
  
  public static function showHomepageVideo() {
    //debug($_COOKIE);
    if(!isset($_COOKIE['bglobal_homevideo']) || !$_COOKIE['bglobal_homevideo']) {
      return true;
    }
    return false;
  }
  
  public static function setVideoViewed() {
    setcookie('bglobal_homevideo', true, time()+60*60*24*30);
  }
  
  const SESSION_USER_KEY = "bglobal_user_id";
  
  public static function isLoggedUser() {
    $status = FALSE;
    if(isset($_SESSION[self::SESSION_USER_KEY]) && !empty($_SESSION[self::SESSION_USER_KEY])) {
        $status = TRUE;
    }
    return $status;
  }
  
  public static function loginUser($user) {
    $_SESSION[self::SESSION_USER_KEY] = $user;
  }
  
  public static function logoutUser() {
    unset($_SESSION[self::SESSION_USER_KEY]);
  }
  
  public static function getLoggedUserInfo() {
    return isset($_SESSION[self::SESSION_USER_KEY]) ? $_SESSION[self::SESSION_USER_KEY] : array();
  }
  
  public static function getPaymentMethod() {
    return array_key_exists('payment_method', $_SESSION) ? $_SESSION['payment_method'] : 'order'; 
  }
  public static function getPaymentMethodName($key) {
    switch ($key) {
      case 'pickup':
        $return = 'Plaćanje pouzećem';
        break;
      case 'order':
        $return = 'Uplatnicom';
        break;
      default:
        $return = '';
        break;
    }
    return $return;
  }
  public static function srediVelicinuFonta($broj) {
      
     if($broj>5)
       $oduzmi = '- '.($broj+3)*0.20."px";
     
     return $oduzmi;
  }
  
}