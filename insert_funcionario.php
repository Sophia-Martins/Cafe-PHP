<?php

//Recebendo dados do fomulario

$nome = $_POST ['nome'];
$sobrenome =$_POST ["sobrenome"];
$dt_nascimento=$_POST ["dt_nascimento"];
$cargo=$_POST ["cargo"];
$salario=$_POST ["salario"];
$dt_admissao=$_POST ["dt_admissao"];
$senha=$_POST ["senha"];

include 'conexao.php';


$insert_tb_funcionario = "INSERT INTO tb_funcionario 
VALUES (null,'$nome','$sobrenome', '$dt_nascimento', '$cargo', '$salario', '$dt_admissao','$senha')";

$resultado = $conexao->query($insert_tb_funcionario);

if($resultado){
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
    //header('Location: ../Funcionario.html');
}




?>