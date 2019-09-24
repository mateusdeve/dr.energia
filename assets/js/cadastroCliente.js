function calc(){

    var cp      = parseFloat(document.getElementById('cp').value, 10);
    var tcp     = parseFloat(document.getElementById('tcp').value, 10);
    var rescp   = (cp*tcp);

    if (Number.isNaN(rescp)){
        rescp = 0;
    }

    document.getElementById('rescp').value = 'R$ '+rescp.toFixed(2);

    var cfp      = parseFloat(document.getElementById('cfp').value, 10);
    var tcfp     = parseFloat(document.getElementById('tcfp').value, 10);
    var rescfp   = (cfp*tcfp);

    if (Number.isNaN(rescfp)){
        rescfp = 0;
    }

    document.getElementById('rescfp').value = 'R$ '+rescfp.toFixed(2);

    var consumototal = cp+cfp;

    document.getElementById('consumototal').value = consumototal.toFixed(2);

    var dp      = parseFloat(document.getElementById('dp').value, 10);
    var tdp     = parseFloat(document.getElementById('tdp').value, 10);
    var resdp   = (dp*tdp);

    if (Number.isNaN(resdp)){
        resdp = 0;
    }

    document.getElementById('resdp').value = 'R$ '+resdp.toFixed(2);

    var dfp      = parseFloat(document.getElementById('dfp').value, 10);
    var tdfp     = parseFloat(document.getElementById('tdfp').value, 10);
    var resdfp   = (dfp*tdfp);

    if (Number.isNaN(resdfp)){
        resdfp = 0;
    }

    document.getElementById('resdfp').value = 'R$ '+resdfp.toFixed(2);

    var up      = parseFloat(document.getElementById('up').value, 10);
    var tup     = parseFloat(document.getElementById('tup').value, 10);
    var resup   = (up*tup);

    if (Number.isNaN(resup)){
        resup = 0;
    }

    document.getElementById('resup').value = 'R$ '+resup.toFixed(2);

    var ufp      = parseFloat(document.getElementById('ufp').value, 10);
    var tufp     = parseFloat(document.getElementById('tufp').value, 10);
    var resufp   = (ufp*tufp);

    if (Number.isNaN(resufp)){
        resufp = 0;
    }

    document.getElementById('resufp').value = 'R$ '+resufp.toFixed(2);

    var ep      = parseFloat(document.getElementById('ep').value, 10);
    var tep     = parseFloat(document.getElementById('tep').value, 10);
    var resep   = (ep*tep);

    if (Number.isNaN(resep)){
        resep = 0;
    }

    document.getElementById('resep').value = 'R$ '+resep.toFixed(2);

    var efp      = parseFloat(document.getElementById('efp').value, 10);
    var tefp     = parseFloat(document.getElementById('tefp').value, 10);
    var resefp   = (efp*tefp);

    if (Number.isNaN(resefp)){
        resefp = 0;
    }

    document.getElementById('resefp').value = 'R$ '+resefp.toFixed(2);

    var der      = parseFloat(document.getElementById('der').value, 10);
    var tder     = parseFloat(document.getElementById('tder').value, 10);
    var resder   = (der*tder);

    if (Number.isNaN(resder)){
        resder = 0;
    }

    var bandeira        = parseFloat(document.getElementById('bandeira').value, 10);
    if (Number.isNaN(bandeira)){
        bandeira = 0 ;
    }

    var ip        = parseFloat(document.getElementById('ip').value, 10);
    if (Number.isNaN(ip)){
        ip = 0 ;
    }

    document.getElementById('resder').value = resder.toFixed(2);

    var desconto = document.getElementById('desconto').value;
    if (Number.isNaN(desconto)){
        desconto = 0 ;
    }
    var resfinal   = (rescp+rescfp+resdp+resdfp+resup+resufp+resep+resefp+resder+ip+bandeira-desconto);

    document.getElementById('resfinal').value = parseFloat(resfinal).toFixed(2);

    console.log(resfinal);
}

function pegar(){

    $('.nav-item > a').click(function()
    {
        var mes = $(this).attr('id');

        document.getElementById("demo").innerHTML = mes;

        document.getElementById("var").value = mes;
    });
}