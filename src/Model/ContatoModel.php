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

        $email = new \Email('smtp.gmail.com', 'iaanchagassalgado@gmail.com', 'Abc@010550', 'Ian Chagas');
        $email->addEndereco('iaanchagassalgado@gmail.com', 'Ian Chagas');
        $email->formatarEmail($emailFormatado);

        $enviaEmail = $email;

        $enviaEmail->enviarEmail();
    }
}
