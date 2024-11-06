<?php
//pegar dados do formulario e armazenar na variavel

$id_user = $_POST['id'];
$senha = $_POST['senha'];

include 'conexao.php';

$select = "SELECT * FROM tb_funcionario WHERE cd_funcionario = $id_user";

$query = $conexao->query($select);
$resultado = $query->fetch_assoc();


$id_user_banco = $resultado['cd_funcionario'];
$senha = $resultado['nm_senha']; 

if ($id_user_banco && $senha == $id_senha_banco){
    header('location: ../inicio.html');
}else{
    echo "<script>alert('Usuario não encontrado!'); history.back() </script>";
}

?>