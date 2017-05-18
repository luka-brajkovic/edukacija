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
      $object = new View('slider');
      $object->title = $data['title'];
      $object->show_on_homepage = $data['show_on_homepage'];
      $object->ctime       = time();
      $object->mtime       = time();
      $object->save();
      
      $request->redirect(APP_URL . "slider/index.php?success=add");
      
      break;
    
    
    case "remove_1":
      
      $id = $request->getParam('id');
      $db->query("DELETE FROM slider WHERE id = ?", $id);
      $request->redirect(APP_URL . "slider/index.php?success=remove");
      
      break;
    
    case "edit_1":
      $data     = $request->getAllParams();
     
      
      $object = Model::find('slider', $data['id']);
      $object->title = $data['title'];
      $object->show_on_homepage = $data['show_on_homepage'];
      
      
      $object->mtime = time();
     
      $object->save();
      $request->redirect(APP_URL . "slider/index.php?success=edit");
      
      break;
    
    case "add_2":
      
      $data = $request->getAllParams();
      

      $object = new View('slider_slide');
      
      $object->slider_id = $data['parent_id'];
      $object->title = $data['title'];
      $object->url = $data['url'];
      $object->text = $data['text'];
     
      $object->ctime       = time();
      $object->mtime       = time();
      
      
      $image = Utils::imageUpload(Slider::IMAGE_FIELD_NAME, Slider::getImagePath(), $object->title);
      $object->image = $image;

      $object->save();
      
      $request->redirect(APP_URL . "slider/slide.php?success=add&parentID=" . $data['parent_id']);
      
      break;
      
    
    case "remove_2":
      
      $id = $request->getParam('id');
      $object = Model::find('slider_slide', $id);
      
      $objectID = $object->slider_id;
      $imagePath = slider::getImagePath() . $object->image;
      
      
      $db->query("DELETE FROM slider_slide WHERE id = ?", $id);
      
      if(is_file($imagePath)) {
        unlink($imagePath);
      }
      
      
      $request->redirect(APP_URL . "slider/slide.php?success=remove&parentID=" . $objectID);
      
      break;
    
    case "edit_2":
      
      $url = Utils::generateUrl($data['title']);  
      
      $data = $request->getAllParams();
      
      $url = Utils::generateUrl($data['title']);
      
      $object = Model::find('slider_slide', $data['id']);
      $object->title = $data['title'];
       $object->url = $data['url'];
      $object->text = $data['text'];
      $object->mtime       = time();
      
      $image = Utils::imageUpload(Slider::IMAGE_FIELD_NAME, Slider::getImagePath(), $url);
      $object->image = empty($image) ? $object->image : $image;
      
      
      $object->save();
      
      $request->redirect(APP_URL . "slider/slide.php?success=edit&parentID=" . $object->slider_id);
      
      break;
    
    
   
      
      
      case "remove-image-1":
      $id     = $request->getParam('id');
      $object = new View('department', $id);
      if($object->image) {
        $path = Department::getImagePath() . $object->image;
        if(file_exists($path)) {
          unlink($path);
          $object->image = "";
          $object->save();
        }
      }
      $request->redirect(APP_URL . "slider/edit_department.php?id=" . $id);
      break;
      
      
    case "remove-image-2":
      $id     = $request->getParam('id');
      $object = new View('slider_slide', $id);
      if($object->image) {
        $path = slider::getImagePath(true) . $object->image;
        if(file_exists($path)) {
          unlink($path);
          $object->image = "";
          $object->save();
        }
      }
      $request->redirect(APP_URL . "slider/edit_slide.php?id=" . $id);
      break;
      
      case "order":
      $items    = $request->getParam('item');
      $object  = $request->getParam('article');
      
      ($object=="1")? $tableName = "slider_slide" : $tableName = "slider" ;
      
      Blog::updateBlogDisplayOrder($items, $tableName);
      break;

  }