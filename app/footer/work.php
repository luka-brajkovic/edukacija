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
      
      $footerGroup = new View('footer_group');
      $footerGroup->title = $data['name'];
      $footerGroup->show_title = $data['show_title'];
      $footerGroup->display_order = FooterGroup::getNextDisplayOrder();
      $footerGroup->ctime       = time();
      $footerGroup->mtime       = time();
      $footerGroup->save();
      
      $request->redirect(APP_URL . "footer/index.php?success=add");
      break;
    
    case "edit":
      $data = $request->getAllParams();
      $id   = $request->getParam('groupID');
      unset($data['groupID']);
      $fg   = Model::find('footer_group', $id);
      $fg->title = $data['name'];
      $fg->show_title = $data['show_title'];
      $footerGroup->mtime       = time();
      $fg->save();
      $request->redirect(APP_URL . "footer/index.php?success=edit");
      break;

    case "remove":
      $id = $request->getParam('groupID');
      $fg = Model::find('footer_group', $id);
      FooterGroup::remove($id);
      $request->redirect(APP_URL . "footer/index.php?success=remove");
      break;
    
    case "order":
      $items    = $request->getParam('item');
      FooterGroup::orderFooterGroups($items);
      break;

  }