document.addEventListener("DOMContentLoaded", function() {
    // Seu código JavaScript aqui
    function calcular() {
        var valorVenda = parseFloat(document.getElementById("valorVenda").value);
        var quantidade = parseInt(document.getElementById("quantidade").value);

        var total = valorVenda * quantidade;

        document.getElementById("total").value = total.toFixed(2);
    }

    // Adicione outros códigos JavaScript, se necessário
});
