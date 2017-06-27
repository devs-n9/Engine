<?php

namespace app\Models;

class Product
{
    private $foo = '';
    
    public function getFoo()
    {
        $this->foo = 'bar';
        return $this->foo;
    }
    
}