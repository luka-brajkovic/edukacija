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
      Faq::create($data);
      $request->redirect(APP_URL . "faq/index.php?success=add");
      break;
    
    case "edit":
      $data       = $request->getAllParams();
      $id      = $request->getParam('id');
     
      
      
     
      $calltoaction = new View('faq',  $id );
   

      $calltoaction->question = $data['question'];
     
      $calltoaction->answer = $data['answer'];
     
      $calltoaction->mtime       = time();
      $calltoaction->save();
      $request->redirect(APP_URL . "faq/index.php?success=edit");
      break;
      
   

    case "remove":
      $id = $request->getParam('id');
        
       
      Faq::remove($id);
      $request->redirect(APP_URL . "faq/index.php?success=remove");
      break;

  
      case "order":
      $items    = $request->getParam('item');
      
      Faq::updateOrder($items);
      break;
  }
