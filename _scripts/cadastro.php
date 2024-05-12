<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$nome = $_POST['nome'];
$fornecedor = $_POST['fornecedor'];
$valorCompra = $_POST['valorCompra'];
$valorVenda = $_POST['valorVenda'];

$sql = "INSERT INTO cad_pecas (nome,fornecedor,valorCompra,valorVenda) VALUES ('$nome','$fornecedor','$valorCompra','$valorVenda')";
$query = $mysqli->query($sql);

if($query){?>
    <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "Cadastro Realizado com Sucesso.",
                    icon: "success"
                    }).then(okay => {
                        if(okay){
                            window.location.href = "../index.php";
                        }
                    });
            </script>
                
<?php }else{
    echo "<script>alert('Login inválido');</script>";
    echo "<script>window.location='../index.php'</script>";
}