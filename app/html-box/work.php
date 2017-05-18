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
      HtmlBox::create($data);
      $request->redirect(APP_URL . "html-box/index.php?success=add");
      break;
    
    case "edit":
      $data       = $request->getAllParams();
      $id      = $request->getParam('id');
     
      
      
     
      $calltoaction = new View('html_box',  $id );
    
      
      $image          = Utils::imageUpload('image', HtmlBox::getImagePath(),$data['title'] . "");
      if(!empty($image)) {
        $calltoaction->image = $image;
      }
      var_dump($calltoaction->image);
      $calltoaction->text = $data['text'];
      $calltoaction->title = $data['title'];
      
      $calltoaction->mtime       = time();
      $calltoaction->save();
      $request->redirect(APP_URL . "html-box/index.php?success=edit");
      break;
      
    case "remove-image":
      $id           = $request->getParam('id');
      $calltoaction      = new View('html_box', $id);
      if($calltoaction->image) {
        $path = HtmlBox::getImagePath() . $calltoaction->image;
        $calltoaction->image = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }
      $request->redirect(APP_URL . "html-box/edit.php?id=" . $id);
      break;
      

    case "remove":
      $id = $request->getParam('id');
        
      $calltoaction      = new View('html_box', $id);
      if($calltoaction->image) {
        $path = HtmlBox::getImagePath() . $calltoaction->image;
        $calltoaction->image = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }  
        
        
      HtmlBox::remove($id);
      $request->redirect(APP_URL . "html-box/index.php?success=remove");
      break;

  
      case "order":
      $items    = $request->getParam('item');
      
      HtmlBox::updateOrder($items);
      break;
  }
