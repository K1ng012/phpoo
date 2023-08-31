<?php
require 'repositorio/produto_repositorio.php';
require 'conexao.php';
require 'modelo/produto.php';
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    $produto = new produto( 0,
        $tipo,
        $nome,
        $descricao,
        $imagem,
        $preco,
    );
        $produtoRepositorio = new produtoRepositorio($conn);
        $produtoRepositorio->cadastrar($produto);
        header("Location: cadastrar_produto_sucesso.php");

}
?>