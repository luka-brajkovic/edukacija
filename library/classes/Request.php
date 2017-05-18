<?php

class Request {
    
    private static $request = NULL;
    
    protected $_parameters = array();
    
    public static function instance() {
        if(is_null(self::$request)) {
            self::$request = new Request();
        }
        return self::$request;
    }
    
    public function __construct() {
        $this->_parameters = array_merge_recursive($_GET, $_POST);
    }
    
    public function getAllParams() {
        return $this->_parameters;
    }
    
    public function getParam($key, $defaultValue = NULL) {
        return isset($this->_parameters[$key]) ? $this->_parameters[$key] : $defaultValue;
    }
    
    public function redirect($url, $statusCode = 303) {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
    
}