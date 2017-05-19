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
     
      Seminar::create($data);
      $request->redirect(APP_URL . "seminar/index.php?success=add");
      break;
    
    case "edit":
      $data       = $request->getAllParams();
      $id      = $request->getParam('id');
     
      
      
     
      $calltoaction = new View('seminar',  $id );
    
      
      $image          = Utils::imageUpload('image', Seminar::getImagePath(),$data['title'] . "");
      if(!empty($image)) {
        $calltoaction->image = $image;
      }
      var_dump($calltoaction->image);
      $calltoaction->text = $data['text'];
      $calltoaction->title = $data['title'];
      $calltoaction->date = $data['date'];
      
      
      

      $calltoaction->mtime       = time();
      $calltoaction->save();
      $request->redirect(APP_URL . "seminar/index.php?success=edit");
      break;
      
    case "remove-image":
      $id           = $request->getParam('id');
      $calltoaction      = new View('seminar', $id);
      if($calltoaction->image) {
        $path = Seminar::getImagePath() . $calltoaction->image;
        $calltoaction->image = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }
      $request->redirect(APP_URL . "seminar/edit.php?id=" . $id);
      break;
      

    case "remove":
      $id = $request->getParam('id');
        
      $calltoaction      = new View('seminar', $id);
      if($calltoaction->image) {
        $path = Seminar::getImagePath() . $calltoaction->image;
        $calltoaction->image = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }  
        
        
      Seminar::remove($id);
      $request->redirect(APP_URL . "seminar/index.php?success=remove");
      break;

  
      case "order":
      $items    = $request->getParam('item');
      
      Seminar::updateOrder($items);
      break;
  }
