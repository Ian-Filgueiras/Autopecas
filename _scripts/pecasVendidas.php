<?php
include "config.php";
$sql = "SELECT id, codPeca, nomePeca, valorVenda, quantidade, total, dataHora FROM venda_pecas";
$query = $mysqli->query($sql);

$eventos = array(); 
while ($row = $query->fetch_array()) {
    // Formate os dados do evento conforme necessário
    $evento = array(
        'id' => $row['id'],
        'title' => $row['nomePeca'], // O título do evento pode ser o nome da peça
        'start' => $row['dataHora'],
        'end' => $row['dataHora'],
        'codPeca' => $row['codPeca'],
        'valorVenda' => $row['valorVenda'],
        'quantidade' => $row['quantidade'],
        'total' => $row['total']
    );

    // Adicione o evento ao array de eventos
    $eventos[] = $evento;
}

// Converta o array de eventos para o formato JSON
echo json_encode($eventos);
?>