<?php

class Config {
    
    private static $config = NULL;
    
    protected $_configData = array(
        'db' => array(
            'host'     => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname'   => 'edukacija',
            'charset' => 'UTF8'
        ),
        'cache' => array(
            'frontend' => array(
                'lifetime' => 7200, 
                'automatic_serialization' => true
            ),
            'backend' => array(
                'cache_dir' => CACHE_DIR
            )
        ),
        'lang' => array(
            'lang_file' => LANG_FILE
        ),
        'application' => array(
            'assets_path'   => '/edukacija/app',
            'name'          => 'Edukacija'
        )
    );
   
    public static function instance() {
        if(is_null(self::$config)) {
            self::$config = new Config();
        }
        return self::$config;
    }
    
    public function __construct($config = NULL) {
        if(!is_null($config)) {
          $this->_configData = $config;  
        }
    }
    
    public function getConfig($name = NULL) {
        return isset($this->_configData[$name]) ? $this->_configData[$name] : array();
    }
    
}