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

    case "add_1":
      
      $data     = $request->getAllParams();
      $object = new View('video_gallery');
      $object->title = $data['title'];
      $object->url = Utils::generateUrl($data['title']);
      $object->seo_title = $data['seo_title'];
      $object->seo_keywords = $data['seo_keywords'];
      $object->seo_description = $data['seo_description'];
      $object->description = $data['description'];
     
      $object->ctime       = time();
      $object->mtime       = time();
      $object->save();
      
      $request->redirect(APP_URL . "video_gallery/index.php?success=add");
      
      break;
    
    
    case "remove_1":
      
      $id = $request->getParam('id');
      $db->query("DELETE FROM video_gallery WHERE id = ?", $id);
      $request->redirect(APP_URL . "video_gallery/index.php?success=remove");
      
      break;
    
    case "edit_1":
      $data     = $request->getAllParams();
     
      
      $object = Model::find('video_gallery', $data['id']);
      $object->title = $data['title'];
      $object->seo_title = $data['seo_title'];
      $object->seo_keywords = $data['seo_keywords'];
      $object->seo_description = $data['seo_description'];
      $object->description = $data['description'];
      $object->url = Utils::generateUrl($data['title']);
      $object->mtime = time();
     
      $object->save();
      $request->redirect(APP_URL . "video_gallery/index.php?success=edit");
      
      break;
    
    case "add_2":
      
      $data = $request->getAllParams();
      
      
      $object = new View('course_video');
      
      $object->course_id = $data['course_id'];
      $object->title = $data['title'];
      $object->url = $data['video_url'];
    
     
      $object->ctime       = time();
      $object->mtime       = time();
      


      $object->save();

      $request->redirect(APP_URL . "video_gallery/video.php?success=add&course_id=" . $data['course_id']);
      
      break;
      
    
    case "remove_2":
      
      $id = $request->getParam('id');
      $object = Model::find('course_video', $id);
      
      $objectID = $object->course_id;
 

      
      $db->query("DELETE FROM course_video WHERE id = ?", $id);
     
      
      
      $request->redirect(APP_URL . "video_gallery/video.php?success=remove&course_id=" . $objectID);
      
      break;
    
    case "edit_2":
      
      $data = $request->getAllParams();
      
      $object = Model::find('course_video', $data['id']);
      $object->title = $data['title'];
      $object->url = $data['video_url'];

      $object->mtime       = time();
      
      
      $object->save();
      
      $request->redirect(APP_URL . "video_gallery/video.php?success=edit&course_id=" . $object->course_id);
      
      break;
    
    
   
      
    
      
      case "order":
      $items    = $request->getParam('item');
      $object  = $request->getParam('article');
      
      ($object=="1")? $tableName = "course_video" : $tableName = "video_gallery" ;
      
      Blog::updateBlogDisplayOrder($items, $tableName);
      break;

  }