<?php

namespace Controller;

class SobreController extends Controller
{

    public function __construct()
    {
        //$this->view = new \View\MainView('sobre', 'header2'); é possível incluir outro header personalizado;
        $this->view = new \View\MainView('sobre');
    }

    public function execute()
    {
        $this->view->render(array('titulo' => 'Sobre'));
    }
}
