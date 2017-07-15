<?php
$languepath = 3;
require 'library/config.php';

$request    = Request::instance();
$action     = $request->getParam('action');

$db = Database::instance();
switch($action) {
    case 'submit-contact-form':
      $mail = new CustomMailer();
      $siteKey = '6LcU0iMUAAAAADIBkWBQUU0Kfdn-3q5rDrENKZyG';
      $secret = '6LcU0iMUAAAAAPnTHXh1EgkN6oFAIqHl-zFWyARa';
      require_once'./src/autoload.php';
      $recaptcha = new \ReCaptcha\ReCaptcha($secret);  
      $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
      
      if($resp->isSuccess()){
      
      $data = $request->getAllParams();
      
      
      $text  = 'Ime i prezime: ' . $data['name'] . '<br>';
      $text .= 'Email adresa: ' . $data['email'] . '<br><br>';
      $text .= 'Poruka: <br>';
      $text .= $data['message'];
      $mail->Body = $text;
      $mail->Subject = 'Kontakt forma';
      
      $settings   = Settings::getAllSettings();
      
      $mail->AddAddress($settings['site_email'], $data['name']);
      $status = $mail->send();
      $request->redirect(WEB_URL . 'contact.php');
      }
      
      else{
          $request->redirect(WEB_URL . 'contact.php?robot=true');
      }
      break;
  
        case "login":
      $email      = $request->getParam('email');
      $password   = $request->getParam('password');
      $status     = User::checkUserCredentials($email, $password);
  
      if($status['to']== true){
           $token    = Utils::generateToken($email, md5($password));
           $request->redirect(WEB_URL . 'agreement.php?token='.$token."&id=".$status['id']);
        
      }
      
      $request->redirect(WEB_URL);

      break;
     
     case "logout":
        Website::logoutUser();
        $request->redirect(WEB_URL);
        break;
    
    
     case "save-answers":
        $user = Website::getLoggedUserInfo();
        $data     = $request->getAllParams();
     
        $db   = Database::instance();
        $select = $db->select()
        ->from('course_question_answer')
        ->where('id IN (?)', $data['answer'])
        ->columns(array(
        'course_question_id',
        'is_correct_answer',
        'text',
        ))
        ;
        
        $answers = $select->query()->fetchAll();
        
        
        
        $time = time();
        
        $forInsertAnswers ="";
        $rigtAnswers=0;
        foreach ($answers as $a){
            

            if($a['is_correct_answer'])
                $rigtAnswers++;
                      
        }
        
       
        
        $dataforAttending = Course:: getNumOfCourseQuestions($data['course_id']);
        
        $numberOfquestions = $dataforAttending['questionNumber'];
        
        $is_pass = 0;
        if((($rigtAnswers*100)/$numberOfquestions) > $dataforAttending['success_percentage']){
            $is_pass = 1;
        }
        

        
        $object = new View('user_course_attending');
        $object->user_id = $user['id'];
        $object->course_id = $data['course_id'];
        $object->is_pass       = $is_pass;
        $object->number_of_questions       = $numberOfquestions;
        $object->number_of_correct_anwers       = $rigtAnswers;
        $object->ctime       = $time;
        $object->mtime       = $time;
        $object->save();
        
        foreach ($answers as $a){
    
        $String = "( ".$user['id']." , ".$a['course_question_id']." , ". $object->id." , '".$a['text']."' , ".$a['is_correct_answer']." , ".$time." , ".$time." )";
         
          $forInsertAnswers = $forInsertAnswers.$String;
         
            if($a != end($answers))
            $forInsertAnswers = $forInsertAnswers." , ";  
        }
         
        $db->query("INSERT INTO user_course_answers (user_id,course_question_id,user_course_attending_id,answer,is_correct,ctime,mtime) VALUES ".$forInsertAnswers);
         
        $request->redirect(WEB_URL."rezultat.php?attending_id=".$object->id);
        break;
        
        
        case "agree":
          
      $token     = $request->getParam('token');
      $user_id     = $request->getParam('user_id');
      $did_aggre     = $request->getParam('did_agree');
      
      $userObject  = new View('user', $user_id);
        if(!($token== Utils::generateToken($userObject->email,$userObject->password))){
            $request->redirect(WEB_URL);
        }
        if ($did_aggre){
        $userObject->did_agree = 1;
        $userObject->save();
        }
      
       User::LoginUserAfterAgree($userObject->email, $userObject->password);
    
      $request->redirect(WEB_URL);
      break;
      
      
      
  
}