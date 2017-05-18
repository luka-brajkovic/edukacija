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
      $data = $request->getAllParams();
      //debug($data);
      Page::create($data);
      Page::clearAllPagesCache();
      $request->redirect(APP_URL . "page/index.php?success=add");
      break;
    
    case "edit":
      $data = $request->getAllParams();
      $id   = $request->getParam('id');
      Page::edit($data, $id);
      Page::clearAllPagesCache();
      $request->redirect(APP_URL . "page/index.php?success=edit");
      break;

    case "remove":
      $id = $request->getParam('id');
      $page = Model::find('page', $id);
      Page::remove($id);
      Page::clearAllPagesCache();
      $request->redirect(APP_URL . "page/index.php?success=remove");
      break;

  }