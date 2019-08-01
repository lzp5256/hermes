<?php
namespace app\controllers\controller;

use app\helper\helper;

class Home
{
    use helper;

    public function index()
    {
        $this->setView('home/index');
        return view($this->_view);
    }

    public function welcome()
    {
        $this->setView('home/welcome');
        return view($this->_view);
    }
}
