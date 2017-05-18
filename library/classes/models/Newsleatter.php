<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Newsleatter
 *
 * @author luka
 */
class Newsleatter extends Model{
    
    static protected $_tableName = "newsletter";
    
    public static function create($emali) {
        parent::create($emali);
    }
    
    public static function IsUnique($emali) {
    $db = Database::instance();
    
    $query = $db->select()
      ->from('newsletter')
      ->where('email = ?', $emali)
      ;
    if($query->query()->fetch()){
       return FALSE;
    }else{
       return TRUE;
    }
    
    }
    
     public static function getAllEmails($emali) {
    $db = Database::instance();
    $query = $db->select()
      ->from('newsletter')
      ;
    $emails = $query->query()->fetchAll();
    return $emails; 
    }
}
