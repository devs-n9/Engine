<?php

namespace vendor\Project7\Db;

class Db
{
    private static $instance = null;
    public $_db;
    
    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    
    private function __construct()
    {
        $this->_db = new \mysqli('localhost', 'root', 'workrocks', 'test_mapper');
        
        if ($this->_db->connect_errno) {
            die("Connect failed: " . $this->_db->connect_error);
        }
        
    }
    
    public function query($sql)
    {
        if ($result = $this->_db->query($sql)) {
            return $result;
        }else{
            die('query is failed');
        }
    }
    
    private function __clone(){}
    
}