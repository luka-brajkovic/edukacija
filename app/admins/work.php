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
      $data = $request->getAllParams();
      Administrator::create($data);
      $request->redirect(APP_URL . "admins/index.php?success=add");

      break;

    case "edit":
      //update admin
      $data = $request->getAllParams();
      Administrator::edit($data);
      $request->redirect(APP_URL . "admins/index.php?success=edit");

      break;

    case "remove":
      //remove admin
      $data = $request->getAllParams();
      $id   = $data['id'];
      Administrator::remove($id);
      $request->redirect(APP_URL . "admins/index.php?success=remove");

      break;

  }