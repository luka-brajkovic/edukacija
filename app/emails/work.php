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

    case "edit":
      //update email
      $data = $request->getAllParams();
      $id = $data['id'];
      unset($data['id']);
      CcsEmail::edit($data, $id);
      $request->redirect(APP_URL . "emails/index.php?success=edit");

      break;

  }