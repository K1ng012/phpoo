<?php
$servername = "localhost";
$username = "root";
$password= "";
$databasename = "cafe";

//criação da conexão
$conn = new mysqli ($servername, $username, $password, $databasename);

//verificando a conexão
if (!$conn){
    die("conexão falhou" . mysqli_connect_error());
}
else{
    echo "conectou";
}