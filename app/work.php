<?php

require '../library/config.php';

$request    = Request::instance();
$action     = $request->getParam('action');

if(!in_array($action, array('login', 'logout'))) {
  $status = Administrator::isAdminLogged(FALSE);
  if(!$status) {
      Administrator::redirectToLogin();
  }
}

$db = Database::instance();

switch($action) {
    
    case "login":
        
        $email      = $request->getParam('email');
        $password   = $request->getParam('password');
        $status     = Administrator::checkAdminCredentials($email, $password);
        
        if(!$status) {
            Administrator::redirectToLogin(TRUE);
        } else {
            Administrator::redirectToDashboard();
        }
        
        break;
    
    case "logout":
        
        Administrator::logoutAdmin();
        Administrator::redirectToLogin();
        
        break;
    
}