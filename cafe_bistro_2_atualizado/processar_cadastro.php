<?php
require 'usuario.php';
require 'conexao.php';

if($_SERVER["REQUEST_METHOD"] =="POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmarsenha = $_POST["confirmarsenha"];

    if ($senha === $confirmarsenha){
        //conexao com o banco de dados;
        $usuario = new Usuario($conn);
        //cadastrar o usuário
        if ($usuario->cadastrar($nome, $email, $senha)){
            //redirencionar para a paagina de sucesso após o cadasstro
            header("Location: cadastro_usuario_sucesso.php");
            exit();
        }
        else{
            echo "Erro! Tente novamente";
        }
    }
    else{
        header("Location: cadastro_usuario.php?erro=1");
    }
}
?>