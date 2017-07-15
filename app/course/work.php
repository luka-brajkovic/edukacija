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
      $data['type'] = "course";
      $data['display_order'] = Course::getNexDisplayOrder();
      Course::create($data);
      $request->redirect(APP_URL . "course/index.php?success=add");
      break;
    
    case "edit":
      $data       = $request->getAllParams();
      $id      = $request->getParam('id');
     
      
      
     
      $calltoaction = new View('course',  $id );
    
      
      $image          = Utils::imageUpload('image', Course::getImagePath(), Utils::generateUrl($data['title']) . "");
      if(!empty($image)) {
        $calltoaction->image = $image;
        
      }
      
      $calltoaction->text = $data['text'];
      $calltoaction->title = $data['title'];
      $calltoaction->html_url = $data['html_url'];
      $calltoaction->video_url = $data['video_url'];
      $calltoaction->live_video_url = $data['live_video_url'];
      $calltoaction->live_end_date = $data['live_end_date'];
      $calltoaction->live_start_date = $data['live_start_date'];
      $calltoaction->is_public = $data['is_public'];
      $calltoaction->success_percentage = $data['success_percentage'];
      $calltoaction->number_of_tries_per_user = $data['number_of_tries_per_user'];
      $calltoaction->leed = $data['leed'];
      $calltoaction->test_instruction = $data['test_instruction'];
      $calltoaction->end_available = $data['end_available'];
      $calltoaction->start_available = $data['start_available'];
      
     
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
      
      $calltoaction->is_deleted = 1;
        
      $calltoaction->save();
        
      
      $request->redirect(APP_URL . "course/index.php?success=remove");
      break;
      
    case "remove_2":
      $id = $request->getParam('id');
        
      $calltoaction      = new View('course_question_answer', $id); 
      
      $db         = Database::instance();
    
      $db->query("DELETE FROM course_question_answer WHERE id = ?", $id);
      $request->redirect(APP_URL . "/course/course_answers.php?id=" . $calltoaction->course_question_id);
      break;

  
      case "order":
      $items    = $request->getParam('item');
      $table  = $request->getParam('table');
      $tableName="";
      switch($table) {
          case 1:
              $tableName = "course";
              break;
          case 2:
              $tableName = "course_question";
              break;
          case 3:
              $tableName = "course_question_answer";
              break;
      }
      
      Course::updateOrder($items ,$tableName);
      break;
  
  
      case "add-user-to-course":
      $userid = $request->getParam('userid');
      $courseid = $request->getParam('courseid');
      $object     = new View("course_user");
      $object->course_id = $courseid;
      $object->user_id = $userid;
      $object->ctime = time();
      $object->mtime = time();
      $object->save();
     
      break;
  
  
      case "add_course_question":
       $data       = $request->getAllParams(); 
          
         
      $object     = new View("course_question");
      $object->course_id = $data['course_id'];
      $object->title = $data['title'];
      $object->text = $data['text'];
      $object->active = $data['active'];
      $object->ctime = time();
      $object->mtime = time();
      $object->save();
      $request->redirect(APP_URL . "course/course_questions.php?course_id=" . $data['course_id']);
      break;
  
      case "edit_course_question":
      $data       = $request->getAllParams(); 

      $object     = new View('course_question',  $data['id'] );
     
      $object->title = $data['title'];
      $object->text = $data['text'];
      $object->active = $data['active'];
      $object->mtime = time();
      $object->save();
      $request->redirect(APP_URL . "course/course_questions.php?course_id=" . $object->course_id);
      break;
  
      
      case "add_question_answer":
       $data       = $request->getAllParams(); 
          
      if($data['is_correct_answer']){
      $db->query("UPDATE course_question_answer SET is_correct_answer = 0 WHERE course_question_id = ?", $data['course_question_id']);
      }
      $object     = new View("course_question_answer");
      $object->course_question_id = $data['course_question_id'];
      $object->is_correct_answer = $data['is_correct_answer'];
      $object->text = $data['text'];
      $object->ctime = time();
      $object->mtime = time();
      $object->save();
      
      
      
      $request->redirect(APP_URL . "course/course_answers.php?id=" . $data['course_question_id']);
      break;
  
      case "edit_question_answer":
      $data       = $request->getAllParams(); 

      if($data['is_correct_answer']){
      $db->query("UPDATE course_question_answer SET is_correct_answer = 0 WHERE course_question_id = ?", $data['course_question_id']);
      }
      
      $object     = new View('course_question_answer',  $data['id'] );
     
      $object->text = $data['text'];
      $object->mtime = time();
      $object->is_correct_answer = $data['is_correct_answer'];
      $object->save();
      var_dump($object->course_id);
      $request->redirect(APP_URL . "course/course_answers.php?id=" . $data['course_question_id']);
      break;
  
      
      
  
      case "remove-user-from-course":
      $userid = $request->getParam('userid');
      $courseid = $request->getParam('courseid');
      
      $db         = Database::instance();
     
      $db->query("DELETE FROM course_user WHERE course_id = ? AND user_id = ?", array($courseid,$userid));
      
      break;
  
      case "select-all-users-for-course":
      $courseid = $request->getParam('course_id');

      $usersData  = Course::GetUsersForCourse($courseid);
    
      $selectedUsers = array();
      foreach ($usersData['selected'] as $selected) {
        $selectedUsers[] = $selected['user_id'];
      }
      $all = array();
      foreach ($usersData['allusers'] as $selected) {
        $all[] = $selected['id'];
      }
      $notselected = array_diff($all, $selectedUsers);
      

      foreach ($notselected as $insert){
 
      $object     = new View("course_user");
      $object->course_id = $courseid;
      $object->user_id = $insert;
      $object->ctime = time();
      $object->mtime = time();
      $object->save(); 
      }
        
      $request->redirect(APP_URL . "course/cours_user.php?id=".$courseid);   
      

      break;
      
      case "ubdate-user-try":
      $id = $request->getParam('id');
      $num = $request->getParam('num');
      
      $user_curse = new View("course_user",$id);
      $user_curse->course_number_of_trys = $num;
      $user_curse->save();
      var_dump($user_curse);
      break;
      
      case "ubdate-user-table":
          $id = $request->getParam('id');
          ?>
           
          <table class="table table-hover "  parent="">
                                        <input type="hidden" id="table-for-order" value="1" >
                                        <tr class="header">
                                            <th data-field="id">user ID</th>
                                            <th data-field="name"><?php echo $lang['table']['name'];?></th>
                                            <th data-field="name">trays</th>
                                        </tr>
                                        <?php
                                        $usersoncourse = Seminar::GetUsersForCourseAndNumOfTry($id);
                                        foreach ($usersoncourse as $useroncourse){
                                        ?>
                                     
                                     <tr>
                                         <td><?php echo $useroncourse['user_id'];?></td>
                                         <td><?php echo $useroncourse['first_name']." ".$useroncourse['last_name'];?></td>
                                         <td><input type="number" id="find-<?php echo $useroncourse['id'];?>" value="<?php echo $useroncourse['course_number_of_trys']; ?>"> <button class="btn btn-primary" onclick="updateUserTry(<?php echo $useroncourse['id'];?>);">potvrdi</button></td>
                                     </tr>
                                     
                                        <?php
                                        }
                                        ?>                                        
            </table>
              
           <?php
      break;
      
  }
