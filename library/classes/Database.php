<?php

/**
 * Basic database class which use Zend's db classes. 
 * Defaul adapter is PDO for now
 */

require_once 'Zend/Db/Adapter/Pdo/Mysql.php';

class Database {

    //Db instance
    private static $db = NULL;
   
    public static function instance() {
        if(is_null(self::$db)) {
            $config         = Config::instance();
            $dbOptions      = $config->getConfig('db');
            self::$db       = new Zend_Db_Adapter_Pdo_Mysql($dbOptions);
            self::$db->exec('SET CHARACTER SET utf8');
            self::$db->exec("SET NAMES utf8");
            
        }
        return self::$db;
    }
    
}