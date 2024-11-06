<?php

//Recebendo dados do fomulario

$nome = $_POST ['nome'];
$contato = $_POST ["contato"];
$email = $_POST ["email"];
$telefone =$_POST ["telefone"];
$endereco = $_POST ["endereco"];
$numero = $_POST ["numero"];


include 'conexao.php';


$insert_tb_fornecedor = "INSERT INTO tb_fornecedor
VALUES (null,'$nome','$contato', '$email', '$telefone', '$endereco', '$numero')";

$resultado = $conexao->query($insert_tb_fornecedor);

if($resultado){
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
    //header('Location: ../Funcionario.html');
}




?>