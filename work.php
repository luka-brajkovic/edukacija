<?php

require 'library/config.php';

$request    = Request::instance();
$action     = $request->getParam('action');

$db = Database::instance();
switch($action) {
    case 'submit-contact-form':
      $data = $request->getAllParams();
      $mail = new CustomMailer();
      $text  = 'Ime i prezime: ' . $data['name'] . '<br>';
      $text .= 'Telefon: ' . $data['contact_phone'] . '<br>';
      $text .= 'Email adresa: ' . $data['email'] . '<br><br>';
      $text .= 'Poruka: <br>';
      $text .= $data['message'];
      $mail->Body = $text;
      $mail->Subject = 'Kontakt forma';
      
      $settings   = Settings::getAllSettings();
      
      $mail->AddAddress($settings['site_email'], $data['name']);
      $status = $mail->send();
      $_SESSION['message'] = 'Poruka uspesno poslata';
      $_SESSION['status']  = 'success';
      $request->redirect(WEB_URL . '/contact.php');
      break;
  
      case "login":
      $email      = $request->getParam('email');
      $password   = $request->getParam('password');
      $status     = User::checkUserCredentials($email, $password);
      
      $request->redirect(WEB_URL);

         break;
     
     case "logout":
        Website::logoutUser();
        $request->redirect(WEB_URL);
        break;
  
}