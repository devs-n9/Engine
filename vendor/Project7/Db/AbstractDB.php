<?php

namespace vendor\Project7\Db;

use vendor\Project7\Db\Db;

abstract class AbstractDB
{
    public $_db;
    
    public function __construct()
    {
        $this->_db = Db::getInstance();   
    }
    
    abstract public function insert($data);
    abstract public function update($id, $data);
    abstract public function delete($id);
}