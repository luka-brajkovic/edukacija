<?php

/**
* Class extends PHP Mailer so it can prepopulate data required
* for SMTP auth
*/
class CustomMailer extends PHPMailer
{
  function __construct($data = array()) {
    $this->IsSMTP(); // enable SMTP
    $this->SMTPDebug  = 1; // debugging: 1 = errors and messages, 2 = messages only
    $this->SMTPAuth   = true; // authentication enabled
    $this->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $this->Host       = "mail.geviner.rs";
    $this->Port       = 465; // or 587
    $this->Username   = "info@geviner.rs"; //smtp username here
    $this->Password   = "123geviner456"; // smtp password here
    $this->FromName   = "Geviner";
    $this->From       = "info@geviner.rs";
  }

  /**
  * This function will generate text that will show in welcome mail. It will pull subject and text
  * from api and then will append token
  * @param array $user User data
  * @param Object $ustedaApi
  */
  public function generateWelcomeText($user) {
    $token       = Utils::generateToken($user['id'], $user['first_name'], $user['last_name'], $user['password']);
    
    $link = WEB_URL . 'example1/work.php?action=activate-account&email=' . $user['email'] . '&token=' . $token;
    
    $emailContent['subject'] = "Aktivacija naloga sa sajta APP_NAME";
    $emailContent['content'] = 
            "Poštovani, <br /><br />Uspešno ste započeli registraciju na sajtu APP_NAME .<br />
            Kako biste kompletirali registraciju, molimo Vas da kliknete na link ispod kako biste aktivirali Vaš nalog: <br /><br />
            <a href=LINK>LINK</a> <br /><br />
            S' poštovanjem, <br />  APP_NAME tim";
    
    $text    = str_replace('APP_NAME', APP_NAME, $emailContent['content']);
    $text    = str_replace('LINK', $link, $text);
    $subject = str_replace('APP_NAME', APP_NAME, $emailContent['subject']);
    
    $this->Body    = $text;
    $this->Subject = $subject;
  }
  
  public function generateActivationText() {
    
    $emailContent['subject'] = "Aktivacija naloga sa sajta APP_NAME";
    $emailContent['content'] = "Uspesno ste registrovali vas akaunt";
    $this->Subject = $emailContent['subject'];
    $text          = str_replace('APP_NAME', APP_NAME, $emailContent['content']);
    $this->Body    = $text;
  }
  
  public function generateResetPasswordText($user) {
    $emailContent['subject'] = "Reset lozinke na sajtu APP_NAME";
    $emailContent['content'] = "
        Poštovani, <br /><br />Molimo Vas kliknite na link ispod kako biste resetovali Vašu lozinku na sajtu  APP_NAME <br /><br />
        <a href=LINK>LINK</a> <br /><br />
        S' poštovanjem, <br /> APP_NAME tim";
    
    $token = Utils::generateToken($user['id'], $user['first_name'], $user['last_name'], $user['password']);
    $link  = WEB_URL . 'example1/work.php?action=reset-password-form&email=' . $user['email'] . '&token=' . $token;
    
    $text    = str_replace('APP_NAME', APP_NAME, $emailContent['content']);
    $text    = str_replace('LINK', $link, $text);
    $subject = str_replace('APP_NAME', APP_NAME, $emailContent['subject']);
    
    
    $this->Body  = $text;
    $this->Subject = $subject;
  }
  
  public function generateNewPasswordText($password) {
    $emailContent['subject'] = "Promena sifre naloga sa sajta APP_NAME";
    $emailContent['content'] = "Uspesno ste restartovali lozinku";
    
    $text    = str_replace('APP_NAME', APP_NAME, $emailContent['content']);
    //$text    = str_replace('PASSWORD', $password, $text);
    $subject = str_replace('APP_NAME', APP_NAME, $emailContent['subject']);
    
    $this->Body  = $text;
    $this->Subject = $subject;
  }
  
  public function generateVideoText() {
    $bodyText    = 'Poštovani, <br /><br />Uspešno ste poslali Vaš video. Vaš video će biti dostupan najkasnije 48 sati nakon ovog mejla, nakon provere naših administratora.<br /><br />';
    $bodyText   .= "S' poštovanjem, <br />Bglobal.tv tim";
    
    $this->Body  = $bodyText;
    $this->Subject = "Video uspešno poslat - Bglobal.tv";
  }
  
  public function generateImageText() {
    $bodyText    = 'Poštovani, <br /><br />Uspešno ste poslali Vašu sliku. Vaša slika će biti dostupan najkasnije 48 sati nakon ovog mejla, nakon provere naših administratora.<br /><br />';
    $bodyText   .= "S' poštovanjem, <br />Bglobal.tv tim";
    
    $this->Body  = $bodyText;
    $this->Subject = "Slika uspešno poslata - Bglobal.tv";
  }
  
  public function generateBookText() {
    $bodyText    = 'Poštovani, <br /><br />Uspešno ste dodali tekst za knjigu. Ukoliko Vaš tekst bude izabran biće vidljiv na sajtu u narednih 48 sati.<br /><br />';
    $bodyText   .= "S' poštovanjem, <br />Bglobal.tv tim";
    
    $this->Body  = $bodyText;
    $this->Subject = "Uspešno dodat tekst - Bglobal.tv";
  }
  
}