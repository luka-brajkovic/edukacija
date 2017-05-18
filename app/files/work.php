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

    case "upload":
      
      if(isset($_FILES["file"]) && $_FILES["file"]['size'] > 0) {
        $tmpName  = $_FILES["file"]["tmp_name"];
        $return   = $_FILES["file"]['name'];
        $newName  = UPLOADS_PATH . "/" . $return;
        
        move_uploaded_file($tmpName, $newName);
      }
      
      $request->redirect(APP_URL . "files/index.php?success=update");
      break;
    
    case "remove":
      
      $fileName = $request->getParam('file');
      if(is_file(UPLOADS_PATH . "/" . $fileName)) {
        unlink(UPLOADS_PATH . "/" . $fileName);
      }
      
      $request->redirect(APP_URL . "files/index.php?success=remove");
      break;

  }