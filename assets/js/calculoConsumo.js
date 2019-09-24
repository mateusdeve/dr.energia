function calcular(){
    var potencia = parseFloat(document.getElementById('potencia').value, 10);
    var valor = parseFloat(document.getElementById('valor').value, 10);
    var horas = parseFloat(document.getElementById('horas').value, 10);
    document.getElementById('result').value = (potencia*horas)/1000;

    var resultado = ((potencia*horas)/1000)*valor;
    document.getElementById('result2').value = resultado.toFixed(2)

    // document.getElementById('result2').value = ((potencia*horas)/1000)*valor;
}

$(document).ready(function(){
    $('input[name=dinheiro]').mask('000.000.000.000.000.00', {reverse: true});
});

function num(dom){
    dom.value=dom.value.replace(/\D/g,'');
}