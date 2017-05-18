<?php

  require '../../../library/config.php';

  $request    = Request::instance();
  $action     = $request->getParam('action');

  $status = Administrator::isAdminLogged(FALSE);
  if(!$status) {
      Administrator::redirectToLogin();
  }

  $db = Database::instance();

  switch($action) {

    case "add":
      $data     = $request->getAllParams();
      $groupID  = $data['footer_group_id'];
      
      $fl = new View('footer_link');
      $fl->title = $data['title'];
      $fl->url = $data['url'];
      $fl->new_tab = $data['new_tab'];
      $fl->footer_group_id = $data['footer_group_id'];
      $fl->display_order = FooterLink::getNextDisplayOrder($data['footer_group_id']);
      $fl->ctime       = time();
      $fl->mtime       = time();
      $fl->save();
      
      $request->redirect(APP_URL . "footer/link/index.php?groupID=$groupID&success=add");
      break;
    
    case "edit":
      $data     = $request->getAllParams();
      $id       = $request->getParam('id');
      $groupID  = $data['footer_group_id'];
      
      $fl = new View('footer_link', $id);
      $fl->title = $data['title'];
      $fl->url = $data['url'];
      $fl->new_tab = $data['new_tab'];
      $fl->footer_group_id = $data['footer_group_id'];
      $fl->mtime       = time();
      $fl->save();
      
      $request->redirect(APP_URL . "footer/link/index.php?groupID=$groupID&success=edit");
      break;

    case "remove":
      $id         = $request->getParam('id');
      $footerLink = Model::find('footer_link', $id);
      $groupID    = $footerLink->footer_group_id;
      FooterLink::remove($id);
      $request->redirect(APP_URL . "footer/link/index.php?groupID=$groupID&success=remove");
      break;
    
    case "order":
      $items    = $request->getParam('item');
      FooterLink::orderFooterLink($items);
      break;

  }