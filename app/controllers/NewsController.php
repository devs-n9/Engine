<?php

namespace app\Controllers;

use vendor\Project7\Controller;
use app\models\User;

class NewsController extends Controller
{
    public function indexAction()
    {
        $user = new User();

        $data = $user->find(4);

        $this->view->render('news', ['user' => $data]);
    }

}