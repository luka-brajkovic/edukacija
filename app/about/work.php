<?php

  require '../../library/config.php';

  $request    = Request::instance();
  $action     = $request->getParam('action');

  $status = Administrator::isAdminLogged(FALSE);
  if(!$status) {
      Administrator::redirectToLogin();
  }

  $db = Database::instance();

  switch($action) {

    case "update":
      $data = $request->getAllParams();
      Settings::updateAboutSettings($data);
      $request->redirect(APP_URL . "about/index.php?success=updated");
      break;
    
    case "remove-image":
      $name     = $request->getParam('name');
      
      $db = Database::instance();
      $data = $db->select()
        ->from('ccs_about')
        ->where('param_name = ?', $name)
        ->query()->fetch();
      
      if($data['param_value']) {
        $path = Settings::getAboutImagePath() . $data['param_value'];
        if(file_exists($path)) {
          unlink($path);
          $db->query('UPDATE ccs_about SET param_value = ? WHERE param_name = ?', array("", $name));
        }
      }
      $request->redirect(APP_URL . "about/index.php");
      break;
    

  }