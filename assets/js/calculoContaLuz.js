function calcular(){
    var kwv = parseFloat(document.getElementById('kwh').value);
    var tarifa = parseFloat(document.getElementById('tarifa').value);

    var resultado = (kwv*tarifa);
    document.getElementById('result').value = resultado.toFixed(2);
}

$(document).ready(function(){
    $('input[name=dinheiro]').mask('000.000.000.000.000.00', {reverse: true});
});

function num(dom){
    dom.value=dom.value.replace(/\D/g,'');
}