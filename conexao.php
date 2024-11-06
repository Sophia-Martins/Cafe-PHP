<?php

//Dados para conexao com o banco
$server = "localhost";
$user ="root";
$password="root";
$database="bd_cafe";

$conexao= new mysqli($server, $user, $password, $database);

if($conexao->connect_error){
    die('A conexão falhou'. $conexao->connect_error);
} else{
   echo 'Conexão realizada com sucesso!';
}

?>