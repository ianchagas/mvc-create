<?php

namespace Controller;

class ContatoController extends Controller
{

    public function execute()
    {
        if (isset($_POST['acao'])) {
            \Model\ContatoModel::enviarFormulario();
            echo '<script>location.href="' . INCLUDE_PATH . 'contato/sucesso"</script>';
            die();
        }

        \Router::defineRota('contato/sucesso', function () {
            $this->view = new \View\MainView('contato-sucesso');
            $this->view->render(array('titulo' => 'Contato'));
        });

        \Router::defineRota('contato', function () {
            $this->view = new \View\MainView('contato');
            $this->view->render(array('titulo' => 'Contato'));
        });
    }
}
