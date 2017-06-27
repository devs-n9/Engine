<?php
    
namespace vendor\Project7;

use vendor\Project7\View;

class Controller
{
    public $view;
		
    public function __construct()
    {
        $this->view = new View();
    }
}