<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$codPeca = $_POST['codPeca'];
$nomePeca = $_POST['nomePeca'];
$valorVenda = $_POST['valorVenda'];
$quantidade = $_POST['quantidade'];
$total = $_POST['total'];

$sql = "INSERT INTO venda_pecas (codPeca,nomePeca,valorVenda,quantidade,total) VALUES ('$codPeca','$nomePeca','$valorVenda','$quantidade','$total')";
$query = $mysqli->query($sql);

if($query){?>
    <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "Venda Realizada com Sucesso.",
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

?>
    </body>
</html>