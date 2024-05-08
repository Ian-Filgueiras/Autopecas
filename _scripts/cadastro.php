<?php
include "config.php";

$nome = $_POST['nome'];
$fornecedor = $_POST['fornecedor'];
$valorCompra = $_POST['valorCompra'];
$valorVenda = $_POST['valorVenda'];

$sql = "INSERT INTO cad_pecas (nome,fornecedor,valorCompra,valorVenda) VALUES ('$nome','$fornecedor','$valorCompra','$valorVenda')";
$query = $mysqli->query($sql);

if($query){
    echo "<script>alert('Cadastro Realizado');</script>";
    echo "<script>window.location='../index.php'</script>";
}else{
    echo "<script>alert('Login inválido');</script>";
    echo "<script>window.location='../index.php'</script>";
}

?>