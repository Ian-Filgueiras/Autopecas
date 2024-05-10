document.addEventListener("DOMContentLoaded", function() {
    var calcularButton = document.getElementById("calcularButton");

    calcularButton.addEventListener("click", function() {
        var valorVenda = document.getElementById("valorVendaV").value;
        var quantidade = document.getElementById("quantidade").value;
        var total = parseFloat(valorVenda) * parseInt(quantidade);
        document.getElementById("total").value = total.toFixed(2); // Arredonde para 2 casas decimais
    });
});


