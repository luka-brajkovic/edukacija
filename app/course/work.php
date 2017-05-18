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
      var_dump($data['files']);
      Course::create($data);
      $request->redirect(APP_URL . "course/index.php?success=add");
      break;
    
    case "edit":
      $data       = $request->getAllParams();
      $id      = $request->getParam('id');
     
      
      
     
      $calltoaction = new View('course',  $id );
    
      
      $image          = Utils::imageUpload('image', Course::getImagePath(),$data['title'] . "");
      if(!empty($image)) {
        $calltoaction->image = $image;
      }
      var_dump($calltoaction->image);
      $calltoaction->text = $data['text'];
      $calltoaction->title = $data['title'];
      $calltoaction->video_url = $data['video_url'];
      $calltoaction->live_video_url = $data['live_video_url'];
      $calltoaction->live_end_date = $data['live_end_date'];
      $calltoaction->live_start_date = $data['live_start_date'];
      
     
      $data['files'] = implode(",", $data['files']);
      $calltoaction->files = $data['files'];
      
      
      
      
      $calltoaction->mtime       = time();
      $calltoaction->save();
      $request->redirect(APP_URL . "course/index.php?success=edit");
      break;
      
    case "remove-image":
      $id           = $request->getParam('id');
      $calltoaction      = new View('course', $id);
      if($calltoaction->image) {
        $path = Course::getImagePath() . $calltoaction->image;
        $calltoaction->image = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }
      $request->redirect(APP_URL . "course/edit.php?id=" . $id);
      break;
      

    case "remove":
      $id = $request->getParam('id');
        
      $calltoaction      = new View('course', $id);
      if($calltoaction->image) {
        $path = Course::getImagePath() . $calltoaction->image;
        $calltoaction->image = "";
          $calltoaction->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }  
        
        
      Course::remove($id);
      $request->redirect(APP_URL . "course/index.php?success=remove");
      break;

  
      case "order":
      $items    = $request->getParam('item');
      
      Course::updateOrder($items);
      break;
  }
