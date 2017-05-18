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
      FunFact::create($data);
      $request->redirect(APP_URL . "fun-fact/index.php?success=add");
      break;
    
    case "edit":
      $data       = $request->getAllParams();
      $id      = $request->getParam('id');
     
      
      
     
      $funFact = new View('fun_fact',  $id );
    

        $funFact->icon = $data['icon'];
      
     
      $funFact->number = $data['number'];

      $funFact->title = $data['title'];
      $funFact->mtime       = time();
      $funFact->save();
      $request->redirect(APP_URL . "fun-fact/index.php?success=edit");
      break;
      
    case "remove-image":
      $id           = $request->getParam('id');
      $funFact      = new View('fun_fact', $id);
      if($funFact->icon) {
        $path = FunFact::getImagePath() . $funFact->icon;
        $funFact->icon = "";
          $funFact->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }
      $request->redirect(APP_URL . "fun-fact/edit.php?id=" . $id);
      break;
      

    case "remove":
      $id = $request->getParam('id');
        
      $funFact      = new View('fun_fact', $id);
      if($funFact->icon) {
        $path = FunFact::getImagePath() . $funFact->icon;
        $funFact->icon = "";
          $funFact->save();
        if(file_exists($path)) {
          unlink($path);
        }
      }  
        
        
        
      FunFact::remove($id);
      $request->redirect(APP_URL . "fun-fact/index.php?success=remove");
      break;

  
      case "order":
      $items    = $request->getParam('item');
      
      FunFact::updateFunFactDisplayOrder($items);
      break;
  }
