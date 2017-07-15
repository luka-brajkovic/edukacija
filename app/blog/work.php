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

    case "add_cat":
      
      $data     = $request->getAllParams();
      $category = new View('blog_category');
      $category->title = $data['title'];
      $category->url = Utils::generateUrl($data['title']);
      $category->seo_title = $data['seo_title'];
      $category->seo_keywords = $data['seo_keywords'];
      $category->seo_description = $data['seo_description'];
      $category->description = $data['description'];
      $image          = Utils::imageUpload(Blog::IMAGE_FIELD_NAME, Blog::getImagePath(), $category->url);
      $category->image  = empty($image) ? $category->image : $image;
      $category->ctime       = time();
      $category->mtime       = time();
      $category->save();
      
      $request->redirect(APP_URL . "blog/index.php?success=add");
      
      break;
    
    
    case "remove_cat":
      
      $id = $request->getParam('id');  
        
      $category = new View('blog_category', $id);
      if($category->image) {
        $path = Blog::getImagePath() . $category->image;
        if(file_exists($path)) {
          unlink($path);
          $category->image = "";
          $category->save();
        }
      }
      
      
      $db->query("DELETE FROM blog_category WHERE id = ?", $id);
      $request->redirect(APP_URL . "blog/index.php?success=remove");
      
      break;
    
    case "edit_cat":
      $data     = $request->getAllParams();
     
      
      $category = Model::find('blog_category', $data['id']);
      $category->title = $data['title'];
      $category->seo_title = $data['seo_title'];
      $category->seo_keywords = $data['seo_keywords'];
      $category->seo_description = $data['seo_description'];
      $category->description = $data['description'];
      $category->url = Utils::generateUrl($data['title']);
      $image          = Utils::imageUpload(Blog::IMAGE_FIELD_NAME, Blog::getImagePath(), $category->url);
      $category->image  = empty($image) ? $category->image : $image;
      $category->mtime = time();
     
      $category->save();
      $request->redirect(APP_URL . "blog/index.php?success=edit");
      
      break;
    
    case "add_article":
      
      $data = $request->getAllParams();
      
      $url = Utils::generateUrl($data['title']);
      
      $article = new View('blog_article');
      $article->administrator_id = Administrator::getLoggedAdminInfo()['id'];
      $article->blog_category_id = $data['category_id'];
      $article->title = $data['title'];
      $article->leed = $data['leed'];
      $article->text = $data['text'];
      $article->date = time();
      $article->show_on_homepage = $data['show_on_homepage'];
      $article->status = $data['status'];
      $article->url = $url;
      $article->seo_title = $data['seo_title'];
      $article->seo_keywords = $data['seo_keywords'];
      $article->seo_description = $data['seo_description'];
      $article->ctime       = time();
      $article->mtime       = time();
      

      $image = Utils::imageUpload(Blog::IMAGE_FIELD_NAME, Blog::getImagePath(), $url);
      $article->image = $image;
      
      $image = Utils::imageUpload(Blog::SMALL_IMAGE_FIELD_NAME, Blog::getImagePath(true), $url);
      $article->thumb_image = $image;
      
      $article->save();
      
      var_dump($article->id);
      $tags = explode(" ", $data['tag']);
      
      foreach ($tags as $tag){
          $insert =  new View('blog_article_tag');
          $insert->blog_article_id  = $article->id;
          $insert->tag  = $tag;
          $insert->ctime  = time(); 
          $insert->mtime  = time(); 
          $insert->save();
      }
      
      
      $request->redirect(APP_URL . "blog/articles.php?success=add&categoryID=" . $data['category_id']);
      
      break;
      
    
    case "remove_a":
      
      $id = $request->getParam('id');
      $article = Model::find('blog_article', $id);
      $db->query("DELETE FROM blog_article_tag WHERE blog_article_id = ?", $id);
      $categoryID = $article->blog_category_id;
      $imagePath = Blog::getImagePath() . $article->image;
      
      $smallImagePath = Blog::getImagePath(true) . $article->small_image;
      
      $db->query("DELETE FROM blog_article WHERE id = ?", $id);
      
      if(is_file($imagePath)) {
        unlink($imagePath);
      }
      
      if(is_file($smallImagePath)) {
        unlink($smallImagePath);
      }
      
      $request->redirect(APP_URL . "blog/articles.php?success=remove&categoryID=" . $categoryID);
      
      break;
    
    case "edit_article":
      
      $data = $request->getAllParams();
      
      $url = Utils::generateUrl($data['title']);
      
      $article = Model::find('blog_article', $data['id']);
      $article->title = $data['title'];
      $article->leed = $data['leed'];
      $article->text = $data['text'];
      $article->show_on_homepage = $data['show_on_homepage'];
      $article->status = $data['status'];
      $article->url = $url;
      $article->seo_title = $data['seo_title'];
      $article->seo_keywords = $data['seo_keywords'];
      $article->seo_description = $data['seo_description'];
      $article->mtime       = time();
      
      $image = Utils::imageUpload(Blog::IMAGE_FIELD_NAME, Blog::getImagePath(), $url);
      $article->image = empty($image) ? $article->image : $image;
      
      $image = Utils::imageUpload(Blog::SMALL_IMAGE_FIELD_NAME, Blog::getImagePath(true), $url);
      $article->thumb_image = empty($image) ? $article->thumb_image : $image;;
      $article->save();
      
      $request->redirect(APP_URL . "blog/articles.php?success=edit&categoryID=" . $article->blog_category_id);
      
      break;
    
    case "remove-image":
      $id     = $request->getParam('id');
      $article = new View('blog_article', $id);
      if($article->image) {
        $path = Blog::getImagePath() . $article->image;
        if(file_exists($path)) {
          unlink($path);
          $article->image = "";
          $article->save();
        }
      }
      $request->redirect(APP_URL . "blog/edit_article.php?id=" . $id);
      break;
      
      
      case "remove-image-category":
      $id     = $request->getParam('id');
      $category = new View('blog_category', $id);
      if($category->image) {
        $path = Blog::getImagePath() . $category->image;
        if(file_exists($path)) {
          unlink($path);
          $category->image = "";
          $category->save();
        }
      }
      $request->redirect(APP_URL . "blog/edit_cat.php?id=" . $id);
      break;
      
      
    case "remove-small-image":
      $id     = $request->getParam('id');
      $article = new View('blog_article', $id);
      if($article->thumb_image) {
        $path = Blog::getImagePath(true) . $article->thumb_image;
        if(file_exists($path)) {
          unlink($path);
          $article->thumb_image = "";
          $article->save();
        }
      }
      $request->redirect(APP_URL . "blog/edit_article.php?id=" . $id);
      break;
      
      case "order":
      $items    = $request->getParam('item');
      $article  = $request->getParam('article');
      
      ($article=="1")? $tableName = "blog_article" : $tableName = "blog_category" ;
      
      Blog::updateBlogDisplayOrder($items, $tableName);
      break;

  }