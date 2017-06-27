<?php

include_once 'autoloader.php';

use vendor\Project7\Route;

define('APP', dirname(__FILE__) . '/app/');

Route::run();