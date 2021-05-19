<?php

namespace Model;

class ContatoModel
{
    public static function enviarFormulario()
    {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $assuntoEmail = 'Contato do Site - ' . $nome;
        $corpoEmail = $mensagem . '<br>Enviado por: ' . $email;

        $emailFormatado = [
            "assunto" => $assuntoEmail,
            "corpo" => $corpoEmail
        ];

        //para funcionar basta alterar os parametros
        //o email usado é um e-mail de testes, caso queira utilizar não tem problema
        $email = new \Email('smtp.gmail.com', 'iaanchagassalgado@gmail.com', 'insira aqui sua senha', 'Ian Chagas');
        $email->addEndereco('iaanchagassalgado@gmail.com', 'Ian Chagas');
        $email->formatarEmail($emailFormatado);

        $enviaEmail = $email;

        $enviaEmail->enviarEmail();
    }
}
