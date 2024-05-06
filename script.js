document.getElementById('vendaForm').addEventListener('submit', function (event) {
    event.preventDefault();

    let valorVenda = parseFloat(document.getElementById('vendaForm').querySelector('#valorVenda').value);
    let quantidade = parseInt(document.getElementById('vendaForm').querySelector('#quantidade').value);

    // Validar se os valores são válidos
    if (!isNaN(valorVenda) && !isNaN(quantidade)) {
        let total = valorVenda * quantidade;
        document.getElementById('total').value = total.toFixed(2);
    } else {
        alert('Por favor, preencha os campos Valor de Venda e Quantidade corretamente.');
    }
});


<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
    });
    calendar.render();
});

