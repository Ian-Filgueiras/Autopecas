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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var calcularButton = document.getElementById("calcularButton");

            calcularButton.addEventListener("click", function() {
                var valorVenda = document.getElementById("vendaForm").querySelector("#valorVenda").value;
                var quantidade = document.getElementById("quantidade").value;
                var total = parseFloat(valorVenda) * parseInt(quantidade);
                document.getElementById("total").value = total.toFixed(2); // Arredonde para 2 casas decimais
            });
        });
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <title>Cadastro de Peças</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Peças</h1>
        <form id="cadastroForm" action="_scripts/cadastro.php" method="post">
            <label for="nome">Nome da Peça:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="fornecedor">Fornecedor:</label>
            <input type="text" id="fornecedor" name="fornecedor" required>
            <label for="valorCompra">Valor de Compra:</label>
            <input type="number" id="valorCompra" name="valorCompra" required>
            <label for="valorVenda">Valor de Venda:</label>
            <input type="number" id="valorVenda" name="valorVenda" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>


</body>

</html>