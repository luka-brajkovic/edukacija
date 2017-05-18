<?php

require_once 'Zend/Cache.php';

class Cache {
    
    //Cache instance
    private static $cache = NULL;
    
    protected $_cacheObject = NULL;
   
    public static function instance() {
        if(is_null(self::$cache)) {
            self::$cache = new Cache();
        }
        return self::$cache;
    }
    
    public function __construct() {
        $config             = Config::instance();
        $cacheOptions       = $config->getConfig('cache');
        $this->_cacheObject = Zend_Cache::factory('Core',
                                'File',
                                $cacheOptions['frontend'],
                                $cacheOptions['backend']);
    }
    
    public function load($id) {
        return $this->_cacheObject->load($id);
    }
    
    public function test($id) {
        return $this->_cacheObject->test($id);
    }
    
    public function save($data, $id) {
        return $this->_cacheObject->save($data, $id);
    }
    
    /**
     * Method will remove $id from cache
     * 
     * @param string $id
     * @return boolean
     */
    public function remove($id) {
        return $this->_cacheObject->remove($id);
    }
    
    
    /**
     * Method will remove all cache
     * 
     * @return boolean
     */
    public function removeAll() {
        return $this->_cacheObject->clean(Zend_Cache::CLEANING_MODE_ALL);
    }
    
}