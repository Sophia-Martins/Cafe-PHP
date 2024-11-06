<?php

//Recebendo dados do fomulario

$nome = $_POST ['nome'];
$sobrenome = $_POST ["sobrenome"];
$email = $_POST ["email"];
$telefone =$_POST ["telefone"];
$endereco = $_POST ["endereco"];
$numero = $_POST ["numero"];


include 'conexao.php';


$insert_tb_cliente = "INSERT INTO tb_cliente
VALUES (null,'$nome','$sobrenome', '$email', '$telefone', '$endereco', '$numero')";

$resultado = $conexao->query($insert_tb_cliente);

if($resultado){
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
    //header('Location: ../cliente.html');
}




?>