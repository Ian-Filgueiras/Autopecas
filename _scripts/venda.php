<?php
include "config.php";

$codPeca = $_POST['codPeca'];
$nomePeca = $_POST['nomePeca'];
$valorVenda = $_POST['valorVenda'];
$quantidade = $_POST['quantidade'];
$total = $_POST['total'];

$sql = "INSERT INTO venda_pecas (nome,fornecedor,valorCompra,valorVenda,total) VALUES ('$nome','$fornecedor','$valorCompra','$valorVenda','$total')";
$query = $mysqli->query($sql);

if($query){
    echo "<script>alert('Venda Realizada');</script>";
}else{
    echo "<script>alert('Login inválido');</script>";
    echo "<script>window.location='../index.php'</script>";
}

?>