<?php

class CcsEmail  extends Model {
  
  static protected $_tableName = "email";
  
  const EMAIL_TYPE_WELCOME        = 'WELCOME';
  const EMAIL_TYPE_ACTIVATION     = 'ACTIVATION';
  const EMAIL_TYPE_RESET_PASSWORD = 'RESET_PASSWORD';
  const EMAIL_TYPE_NEW_PASSWORD   = 'NEW_PASSWORD';
  
  public static function getEmails() {
    $db = Database::instance();
    return $db->select()
            ->from('email')
            ->query()->fetchAll();
  }
  
  public static function getEmailType($type) {
    $db = Database::instance();
    return $db->select()
            ->from('email')
            ->where('type  = ?', $type)
            ->query()->fetch();
  }

}