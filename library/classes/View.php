<?php

class View {
    
    protected $_db = NULL;
    protected $_data = array();
    protected $_defaultEmpty;
    protected $_id = NULL;
    protected $_tableName;
    
    private static $_requestCache = array();


    public function __construct($tableName, $id = NULL, $defaultEmpty = NULL, $column = "id", $value = NULL) {
        
        $db                     = Database::instance();
        $this->_db              = $db;
        $this->_defaultEmpty    = $defaultEmpty;
        $this->_id              = $id;
        $this->_tableName       = $tableName;
        if(!is_null($id)) {
          if(isset(self::$_requestCache[$tableName]) && isset(self::$_requestCache[$tableName][$id])) {
            $data = self::$_requestCache[$tableName][$id];
          }
          else {
            $data = $db->select()
              ->from($tableName)
              ->where('id = ?', $id)
              ->query()->fetch();
            
            self::$_requestCache[$tableName][$id] = $data;
          }
          $this->_data    = $data;
        }
        else if($column != "id" && !is_null($value)) {
          $data = $db->select()
            ->from($tableName)
            ->where($column . ' = ?', $value)
            ->query()->fetch();

          $this->_data    = $data;
          $this->_id      = $data['id'];
        }
    }
    
    public function __set($name, $value) {
        $this->_data[$name] = $value;
    }
    
    public function __get($name) {
        return isset($this->_data[$name]) ? $this->_data[$name] : $this->_defaultEmpty;
    }
    
    public function setFromArray($data) {
        foreach($data as $key => $value) {
            $this->_data[$key] = $value;
        }
    }
    
    public function toArray() {
      return $this->_data;
    }
    
    public function save() {
        if(is_null($this->_id)) {
            $insert = $this->_db->insert($this->_tableName, $this->_data);
            $this->id = $this->_db->lastInsertId();
            return $insert;
        } else {
            return $this->_db->update($this->_tableName, $this->_data, "id = $this->_id");
        }
    }
    
}