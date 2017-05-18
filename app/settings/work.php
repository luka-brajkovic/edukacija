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
      Settings::updateSettings($data);
      $request->redirect(APP_URL . "settings/index.php?success=updated");
      break;
    
    case "clear-cache":
      $cache = Cache::instance();
      $cache->removeAll();
      $request->redirect(APP_URL . "settings/index.php?success=clear-cache");
      break;

  }