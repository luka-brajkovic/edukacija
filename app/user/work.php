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

    case "add":
      //create new admin
      $data       = $request->getAllParams();
      $user = User::create($data);
      if(!$user) {
        $request->redirect(APP_URL . "user/index.php?error=add");
      }
      else {
        $request->redirect(APP_URL . "user/index.php?success=add");
      }
      
      break;

    case "edit":
      //update admin
      $data = $request->getAllParams();
      User::edit($data);
      $request->redirect(APP_URL . "user/index.php?success=edit");

      break;

    case "remove":
      //remove admin
      $data = $request->getAllParams();
      $id   = $data['id'];
      
      $db->query("DELETE FROM course_user WHERE user_id = ?", $id);
      $db->query("DELETE FROM user_course_answers WHERE user_id = ?", $id);
      $db->query("DELETE FROM user_course_attending WHERE user_id = ?", $id);
      User::remove($id);
      $request->redirect(APP_URL . "user/index.php?success=remove");

      break;

  }