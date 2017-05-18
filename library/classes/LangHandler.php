<?php

class LangHandler {
    
    private static $lang = NULL;
    
    protected $_langData = array();
    
    protected $_filePath;
    
    const DEFAULT_LANGUAGE = 'en';
    
    const DEFAULT_LANG_KEY = 'lang_code';
    
    const LANG_ALL_CACHE_KEY = 'all_language_file_cache';
    
    public static function instance() {
       if(is_null(self::$lang)) {
           self::$lang = new LangHandler();
       } 
       return self::$lang;
    }
    
    public function __construct() {
        $config             = Config::instance();
        $langOptions        = $config->getConfig('lang');
        $this->_filePath    = $langOptions['lang_file'];
        
        $cache              = Cache::instance();
        if($cache->test(self::LANG_ALL_CACHE_KEY)) {
            $this->_langData = $cache->load(self::LANG_ALL_CACHE_KEY);
        } else {
            $fileContent        = file_get_contents($this->_filePath);
            $allData            = json_decode($fileContent, true);
            $cache->save($allData, self::LANG_ALL_CACHE_KEY);
            $this->_langData    = $allData;
        }
    }
    
    public function get($tag, $langCode = NULL) {
        if(is_null($langCode)) {
            if(isset($_SESSION[self::DEFAULT_LANG_KEY]) && !empty($_SESSION[self::DEFAULT_LANG_KEY])) {
                $langCode = $_SESSION[self::DEFAULT_LANG_KEY];
            } else {
                $langCode = self::DEFAULT_LANGUAGE;
            }
        }
        if(isset($this->_langData[$tag]) && isset($this->_langData[$tag][$langCode])) {
            return $this->_langData[$tag][$langCode];
        }
        return "";
    }
    
    public function set($tag, $value, $langCode) {
        $this->_langData[$tag][$langCode] = $value;
    }
    
    public function getAllData() {
        return $this->_langData;
    }
    
    public function save() {
        $json   = json_encode($this->_langData);
        $cache  = Cache::instance();
        file_put_contents($this->_filePath, $json);
        $cache->remove(self::LANG_ALL_CACHE_KEY);
    }
    
    
    
}