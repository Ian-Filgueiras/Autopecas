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
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
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
    <title>Cadastro de Peças</title>
    <link rel="stylesheet" href="styles.css">
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

    <div class="container">
        <h1>Tela de Venda</h1>
        <form id="vendaForm" action="_scripts/venda.php" method="post">
            <label for="codPeca">Código da Peça:</label>
            <input type="text" id="codPeca" name="codPeca" required>
            <label for="nomePeca">Nome da Peça:</label>
            <input type="text" id="nomePeca" name="nomePeca" required>
            <label for="valorVenda">Valor de Venda:</label>
            <input type="number" id="valorVenda" name="valorVenda" required>
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>
            <label for="total">Total:</label>
            <input type="text" id="total" name="total">
            <button type="submit">Vender</button>
        </form>
    </div>

    <div class="container">
        <h1>Calendário de Cadastro</h1>
        <div id="calendar"></div>
    </div>

    
    <script src="script.js"></script>
</body>
</html>