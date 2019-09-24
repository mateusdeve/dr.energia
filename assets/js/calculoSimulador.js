
function Simulador () {
    this.nome   = document.querySelector("#nome").value;
    this.email  = document.querySelector("#email").value;
    this.estado = document.querySelector("#estado").value;
    this.cmm    = parseFloat(document.querySelector("#cmm").value);
    this.tarifa = document.querySelector("#tarifa").value;
    var resultado   = this.tarifa.replace(",", ".");
    this.emm    = parseFloat(document.querySelector("#emm").value = this.cmm);
    this.emd    = parseFloat(document.querySelector("#emd").value = this.cmm/30);
    this.hsp    = document.querySelector("#exampleFormControlSelect1").value;
    this.pm     = parseFloat(document.querySelector("#pm").value = 0.270);
    this.pmView = parseFloat(document.querySelector("#pm").value = 0.270*1000);
    this.ppico  = parseFloat(document.querySelector("#ppico").value = this.emd/this.hsp);
    this.pinver = parseFloat(document.querySelector("#pinver").value = this.ppico);
    this.area   = parseFloat(document.querySelector("#area").value = 2);
    this.qm     = parseFloat(document.querySelector("#qm").value = this.pm/this.ppico);
    var emres   = (this.cmm*resultado)*0.95;
    this.em     = parseFloat(document.querySelector("#em").value = 'R$ '+emres.toFixed(2));
    var valkwp  = 'R$ '+this.pinver*7.000;
    this.kwp    = document.querySelector("#kwp").value = this.valkwp;
}

Simulador.prototype = {

    calc () {

        this.nome       = document.querySelector("#nome").value;
        this.email      = document.querySelector("#email").value;
        this.estado     = document.querySelector("#estado").value;
        this.cmm        = parseFloat(document.querySelector("#cmm").value);
        this.tarifa     = document.querySelector("#tarifa").value;
        var resultado   = this.tarifa.replace(",", ".");
        console.log(this.tarifa);
        this.emm        = parseFloat(document.querySelector("#emm").value = this.cmm);
        var emdres      = this.cmm/30;
        this.emd        = parseFloat(document.querySelector("#emd").value = emdres.toFixed(2));
        this.hsp        = parseFloat(document.querySelector("#exampleFormControlSelect1").value);
        this.pm         = parseFloat(0.270);
        this.pmView     = parseFloat(document.querySelector("#pm").value = 0.270*1000);
        var ppicores    = this.emd/this.hsp;
        this.ppico      = parseFloat(document.querySelector("#ppico").value = ppicores.toFixed(2));
        var pinverres   = this.ppico*1.25;
        this.pinver     = parseFloat(document.querySelector("#pinver").value = pinverres.toFixed(2));
        var qmres       = this.pinver/this.pm;
        this.qm         = parseFloat(document.querySelector("#qm").value = qmres.toFixed(2));
        var areares     =   this.qm*1.8;
        this.area       = parseFloat(document.querySelector("#area").value = areares.toFixed(2));
        var emres       = (this.cmm*resultado)*0.95;
        var emTo        = emres;
        var emR$        = emTo.toLocaleString(window.navigator.language, {style:"currency", currency:"BRL", minimumFractionDigits:2});
        this.em         = document.querySelector("#em").value = emR$;
        var valkwp      = this.pinver*7.000;
        var val         = (valkwp * 1000).toLocaleString(window.navigator.language, {style:"currency", currency:"BRL", minimumFractionDigits:2});
        this.kwp        = document.querySelector("#kwp").value = val;
    
    },

    active (event) {
        event.preventDefault();
    
        const {nome,email,estado,cmm,tarifa,emm,emd,hsp,pm,ppico,pinver,area,qm,em,kwp} = this;

        if(nome == Number.isNaN(nome)){
            document.querySelector('#alert1').innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert">O campo <strong>Nome</strong> é obrigatorio!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        }
        if(email == Number.isNaN(email)){
            document.querySelector('#alert2').innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert">O campo <strong>Email</strong> é obrigatorio!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        }
        if(cmm == Number.isNaN(cmm)){
            document.querySelector('#alert3').innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert">O campo <strong>Email</strong> é obrigatorio!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        }
        
        if(nome != Number.isNaN(nome)) {
            if(email != Number.isNaN(email)) {
                if(estado != Number.isNaN(estado)) {
                    $.ajax({
                        method: "POST",
                        url: "Simulador",
                        data: {nome,email,estado,cmm,tarifa,emm,emd,hsp,pm,ppico,pinver,area,qm,em,kwp}
                       })
                       
                    $('#active').addClass('d-block');
                    $('#active').removeClass('d-none');
                    $('#disable').addClass('d-none');
                    $('#disable').removeClass('d-inline-block');
                    $('#button').removeClass('d-inline-block');
                    $('#button').addClass('d-none');
                }
            }

        }
    
    },

    voltar (event) {
        event.preventDefault();

        $('#active').removeClass('d-block');
        $('#active').addClass('d-none');
        $('#disable').addClass('d-inline-block');
        $('#disable').removeClass('d-none');
        $('#button').addClass('d-inline-block');
        $('#button').removeClass('d-none');
    }


}

var simulador = new Simulador();