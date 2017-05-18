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
      FlipBox::create($data);
      $request->redirect(APP_URL . "flip-box/index.php?success=add");
      break;
    
    case "edit":
      $data       = $request->getAllParams();
      $id      = $request->getParam('id');
     
      
      
     
      $calltoaction = new View('flip_box',  $id );
    
      
      $image          = Utils::imageUpload('icon', FlipBox::getImagePath(),$data['title'] . "");
      if(!empty($image)) {
        $calltoaction->icon = $image;
      }
     
      $calltoaction->text = $data['text'];
      $calltoaction->title = $data['title'];
      $calltoaction->button_text = $data['button_text'];
      $calltoaction->button_url = $data['button_url'];
      $calltoaction->mtime       = time();
      $calltoaction->save();
      $request->redirect(APP_URL . "flip-box/index.php?success=edit");
      break;
      
    case "remove-image":
      $id           = $request->getParam('id');
      $calltoaction      = new View('flip_box', $id);
      if($calltoaction->icon) {
        $path = FlipBox::getImagePath() . $calltoaction->icon;
        $calltoaction->icon = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }
      $request->redirect(APP_URL . "flip-box/edit.php?id=" . $id);
      break;
      

    case "remove":
      $id = $request->getParam('id');
        
     $calltoaction      = new View('flip_box', $id);
      if($calltoaction->icon) {
        $path = FlipBox::getImagePath() . $calltoaction->icon;
        $calltoaction->icon = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }
      FlipBox::remove($id);
      $request->redirect(APP_URL . "flip-box/index.php?success=remove");
      break;

  
      case "order":
      $items    = $request->getParam('item');
      
      FlipBox::updateOrder($items);
      break;
  }
