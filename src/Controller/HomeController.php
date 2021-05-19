<?php

namespace Controller;

class HomeController
{
    public function __construct()
    {
        $this->view = new \View\MainView('home');
    }
    public function execute()
    {
        $this->view->render(array('titulo' => 'Home Page'));
    }
}
