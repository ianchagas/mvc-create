<?php

define('INCLUDE_PATH_FULL', 'http://localhost/mvc/src/View/pages/');
define('INCLUDE_PATH', 'http://localhost/mvc/src/');


class Application
{
    public function execute()
    {
        /* Variável url recupera url se nao direciona pra 'Home'
         explode converte a url completa pra array e pega somente o indice zero */

        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';

        // ucfirst -> se recupera contato, converte para Contato
        $url = ucfirst($url);

        $url .= "Controller";

        if (file_exists('Controller/' . $url . '.php')) {
            $nameclass = 'Controller\\' . $url;
            $controller = new $nameclass;
            $controller->execute();
        } else {
            die("Não existe esse controller");
        }
    }
}
