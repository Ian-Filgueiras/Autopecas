<?php
// Inicializa a sessão.
// Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!
session_start();

// Apaga todas as variáveis da sessão
$_SESSION = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
// Nota: Isto destruirá a sessão, e não apenas os dados!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Por último, destrói a sessão
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Peças</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>fornecedor</th>
                <th>valorCompra</th>
                <th>valorVenda</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "./_scripts/config.php";
            $sql = "SELECT * FROM cad_pecas";
            $query  = $mysqli->query($sql);
            $dados = $query->fetch_array();
            while ($dados = $query->fetch_array()) {
            ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['fornecedor']; ?></td>
                    <td><?php echo $dados['valorCompra']; ?></td>
                    <td><?php echo $dados['valorVenda']; ?></td>
                </tr>
            <?php } ?>
   



</body>

</html>