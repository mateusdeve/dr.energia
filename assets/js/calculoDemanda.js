function calcular(){

    // Input DVD
    var idAdvd      = parseFloat(document.getElementById('idAdvd').value);
    var recdvd      = parseFloat(document.getElementById('recdvd').value);
    var resudvd     = (idAdvd*recdvd);
    if (Number.isNaN(resudvd)){
        resudvd = 0;
    }
    document.getElementById('resudvd').value = resudvd;

    // Input Aquecedor 100 a 300

    var idAqu       = parseFloat(document.getElementById('idAqu').value);
    var recAqu      = parseFloat(document.getElementById('recAqu').value);
    var resuAqu     = (idAqu*recAqu);
    if (Number.isNaN(resuAqu)){
        resuAqu = 0;
    }
    document.getElementById('resuAqu').value = resuAqu;

    // Input Aquecedor 100

    var idAqu100       = parseFloat(document.getElementById('idAqu100').value);
    var recAqu100      = parseFloat(document.getElementById('recAqu100').value);
    var resuAqu100     = (idAqu100*recAqu100);
    if (Number.isNaN(resuAqu100)){
        resuAqu100 = 0;
    }
    document.getElementById('resuAqu100').value = resuAqu100;

    // Input Aquecedor 300 a 600

    var idAqu600       = parseFloat(document.getElementById('idAqu600').value);
    var recAqu600      = parseFloat(document.getElementById('recAqu600').value);
    var resuAqu600     = (idAqu600*recAqu600);
    if (Number.isNaN(resuAqu600)){
        resuAqu600 = 0;
    }
    document.getElementById('resuAqu600').value = resuAqu600;

    // Input Aspirador de pó

    var idAsp       = parseFloat(document.getElementById('idAsp').value);
    var recAsp      = parseFloat(document.getElementById('recAsp').value);
    var resuAsp     = (idAsp*recAsp);
    if (Number.isNaN(resuAsp)){
        resuAsp = 0;
    }
    document.getElementById('resuAsp').value = resuAsp;

    // Input Barbeador

    var idBarb      = parseFloat(document.getElementById('idBarb').value);
    var recBarb     = parseFloat(document.getElementById('recBarb').value);
    var resuBarb    = (idBarb*recBarb);
    if (Number.isNaN(resuBarb)){
        resuBarb = 0;
    }
    document.getElementById('resuBarb').value = resuBarb;

    // Input Batedeira

    var idBated     = parseFloat(document.getElementById('idBated').value);
    var recBated    = parseFloat(document.getElementById('recBated').value);
    var resuBated   = (idBated*recBated);
    if (Number.isNaN(resuBated)){
        resuBated = 0;
    }
    document.getElementById('resuBated').value = resuBated;

    // Input Cafeteira

    var idCafe      = parseFloat(document.getElementById('idCafe').value);
    var recCafe     = parseFloat(document.getElementById('recCafe').value);
    var resuCafe    = (idCafe*recCafe);
    if (Number.isNaN(resuCafe)){
        resuCafe = 0;
    }
    document.getElementById('resuCafe').value = resuCafe;

    // Input Carregador de Celular

    var idCel       = parseFloat(document.getElementById('idCel').value);
    var recCel      = parseFloat(document.getElementById('recCel').value);
    var resuCel     = (idCel*recCel);
    if (Number.isNaN(resuCel)){
        resuCel = 0;
    }
    document.getElementById('resuCel').value = resuCel;

    // Input Centrifuga

    var idCentri    = parseFloat(document.getElementById('idCentri').value);
    var recCentri   = parseFloat(document.getElementById('recCentri').value);
    var resuCentri  = (idCentri*recCentri);
    if (Number.isNaN(resuCentri)){
        resuCentri = 0;
    }
    document.getElementById('resuCentri').value = resuCentri;

    // Input Churrasqueira Eletrica

    var idChurras    = parseFloat(document.getElementById('idChurras').value);
    var recChurras   = parseFloat(document.getElementById('recChurras').value);
    var resuChurras  = (idChurras*recChurras);
    if (Number.isNaN(resuChurras)){
        resuChurras = 0;
    }
    document.getElementById('resuChurras').value = resuChurras;

    // Input Ar Condicionado

    var idArcond    = parseFloat(document.getElementById('idArcond').value);
    var recArcond   = parseFloat(document.getElementById('recArcond').value);
    var resuArcond  = (idArcond*recArcond);
    if (Number.isNaN(resuArcond)){
        resuArcond = 0;
    }
    document.getElementById('resuArcond').value = resuArcond;

    // Input Conjunto de som 

    var idSom    = parseFloat(document.getElementById('idSom').value);
    var recSom   = parseFloat(document.getElementById('recSom').value);
    var resuSom  = (idSom*recSom);
    if (Number.isNaN(resuSom)){
        resuSom = 0;
    }
    document.getElementById('resuSom').value = resuSom;

    // Input Cortador de Grama

    var idGrama    = parseFloat(document.getElementById('idGrama').value);
    var recGrama   = parseFloat(document.getElementById('recGrama').value);
    var resuGrama  = (idGrama*recGrama);
    if (Number.isNaN(resuGrama)){
        resuGrama = 0;
    }
    document.getElementById('resuGrama').value = resuGrama;

    // Input Depurador

    var idDep    = parseFloat(document.getElementById('idDep').value);
    var recDep   = parseFloat(document.getElementById('recDep').value);
    var resuDep  = (idDep*recDep);
    if (Number.isNaN(resuDep)){
        resuDep = 0;
    }
    document.getElementById('resuDep').value = resuDep;

    // Input Esterelizador

    var idEstereliza    = parseFloat(document.getElementById('idEstereliza').value);
    var recEstereliza   = parseFloat(document.getElementById('recEstereliza').value);
    var resuEstereliza  = (idEstereliza*recEstereliza);
    if (Number.isNaN(resuEstereliza)){
        resuEstereliza = 0;
    }
    document.getElementById('resuEstereliza').value = resuEstereliza;

    // Input Exaustor

    var idExaustor    = parseFloat(document.getElementById('idExaustor').value);
    var recExaustor   = parseFloat(document.getElementById('recExaustor').value);
    var resuExaustor  = (idExaustor*recExaustor);
    if (Number.isNaN(resuExaustor)){
        resuExaustor = 0;
    }
    document.getElementById('resuExaustor').value = resuExaustor;

    // Input Espremedor de Frutas

    var idFrutas    = parseFloat(document.getElementById('idFrutas').value);
    var recFrutas   = parseFloat(document.getElementById('recFrutas').value);
    var resuFrutas  = (idFrutas*recFrutas);
    if (Number.isNaN(resuFrutas)){
        resuFrutas = 0;
    }
    document.getElementById('resuFrutas').value = resuFrutas;

    // Input FAX

    var idFax    = parseFloat(document.getElementById('idFax').value);
    var recFax   = parseFloat(document.getElementById('recFax').value);
    var resuFax  = (idFax*recFax);
    if (Number.isNaN(resuFax)){
        resuFax = 0;
    }
    document.getElementById('resuFax').value = resuFax;

    // Input Ferro de passar roupa

    var idFerroRoupa    = parseFloat(document.getElementById('idFerroRoupa').value);
    var recFerroRoupa   = parseFloat(document.getElementById('recFerroRoupa').value);
    var resuFerroRoupa  = (idFerroRoupa*recFerroRoupa);
    if (Number.isNaN(resuFerroRoupa)){
        resuFerroRoupa = 0;
    }
    document.getElementById('resuFerroRoupa').value = resuFerroRoupa;

    // Input Forno

    var idForno    = parseFloat(document.getElementById('idForno').value);
    var recForno   = parseFloat(document.getElementById('recForno').value);
    var resuForno  = (idForno*recForno);
    if (Number.isNaN(resuForno)){
        resuForno = 0;
    }
    document.getElementById('resuForno').value = resuForno;

    // Input Microondas

    var idMicroondas    = parseFloat(document.getElementById('idMicroondas').value);
    var recMicroondas   = parseFloat(document.getElementById('recMicroondas').value);
    var resuMicroondas  = (idMicroondas*recMicroondas);
    if (Number.isNaN(resuMicroondas)){
        resuMicroondas = 0;
    }
    document.getElementById('resuMicroondas').value = resuMicroondas;

    // Input Freezer

    var idFreezer    = parseFloat(document.getElementById('idFreezer').value);
    var recFreezer   = parseFloat(document.getElementById('recFreezer').value);
    var resuFreezer  = (idFreezer*recFreezer);
    if (Number.isNaN(resuFreezer)){
        resuFreezer = 0;
    }
    document.getElementById('resuFreezer').value = resuFreezer;

    // Input Geladeira

    var idGeladeira    = parseFloat(document.getElementById('idGeladeira').value);
    var recGeladeira   = parseFloat(document.getElementById('recGeladeira').value);
    var resuGeladeira  = (idGeladeira*recGeladeira);
    if (Number.isNaN(resuGeladeira)){
        resuGeladeira = 0;
    }
    document.getElementById('resuGeladeira').value = resuGeladeira;

    // Input Grill

    var idGrill    = parseFloat(document.getElementById('idGrill').value);
    var recGrill   = parseFloat(document.getElementById('recGrill').value);
    var resuGrill  = (idGrill*recGrill);
    if (Number.isNaN(resuGrill)){
        resuGrill = 0;
    }
    document.getElementById('resuGrill').value = resuGrill;

    // Input Home Theater

    var idHoThe    = parseFloat(document.getElementById('idHoThe').value);
    var recHoThe   = parseFloat(document.getElementById('recHoThe').value);
    var resuHoThe  = (idHoThe*recHoThe);
    if (Number.isNaN(resuHoThe)){
        resuHoThe = 0;
    }
    document.getElementById('resuHoThe').value = resuHoThe;

    // Input Impressora a jato de tinta

    var idImpressTinta    = parseFloat(document.getElementById('idImpressTinta').value);
    var recImpressTinta   = parseFloat(document.getElementById('recImpressTinta').value);
    var resuImpressTinta  = (idImpressTinta*recImpressTinta);
    if (Number.isNaN(resuImpressTinta)){
        resuImpressTinta = 0;
    }
    document.getElementById('resuImpressTinta').value = resuImpressTinta;

    // Input Impressora a laser

    var idImpressLaser    = parseFloat(document.getElementById('idImpressLaser').value);
    var recImpressLaser   = parseFloat(document.getElementById('recImpressLaser').value);
    var resuImpressLaser  = (idImpressLaser*recImpressLaser);
    if (Number.isNaN(resuImpressLaser)){
        resuImpressLaser = 0;
    }
    document.getElementById('resuImpressLaser').value = resuImpressLaser;

    // Input Liquidificador

    var idLiquidificador    = parseFloat(document.getElementById('idLiquidificador').value);
    var recLiquidificador   = parseFloat(document.getElementById('recLiquidificador').value);
    var resuLiquidificador  = (idLiquidificador*recLiquidificador);
    if (Number.isNaN(resuLiquidificador)){
        resuLiquidificador = 0;
    }
    document.getElementById('resuLiquidificador').value = resuLiquidificador;

    // Input Máquina de costura

    var idMaqCostura    = parseFloat(document.getElementById('idMaqCostura').value);
    var recMaqCostura   = parseFloat(document.getElementById('recMaqCostura').value);
    var resuMaqCostura  = (idMaqCostura*recMaqCostura);
    if (Number.isNaN(resuMaqCostura)){
        resuMaqCostura = 0;
    }
    document.getElementById('resuMaqCostura').value = resuMaqCostura;

    // Input Máquina de Louça

    var idMaqLouca    = parseFloat(document.getElementById('idMaqLouca').value);
    var recMaqLouca   = parseFloat(document.getElementById('recMaqLouca').value);
    var resuMaqLouca  = (idMaqLouca*recMaqLouca);
    if (Number.isNaN(resuMaqLouca)){
        resuMaqLouca = 0;
    }
    document.getElementById('resuMaqLouca').value = resuMaqLouca;

    // Input Máquina de roupa

    var idMaqRoupa    = parseFloat(document.getElementById('idMaqRoupa').value);
    var recMaqRoupa   = parseFloat(document.getElementById('recMaqRoupa').value);
    var resuMaqRoupa  = (idMaqRoupa*recMaqRoupa);
    if (Number.isNaN(resuMaqRoupa)){
        resuMaqRoupa = 0;
    }
    document.getElementById('resuMaqRoupa').value = resuMaqRoupa;

    // Input Máquina de secar de roupas

    var idMaqSecar    = parseFloat(document.getElementById('idMaqSecar').value);
    var recMaqSecar   = parseFloat(document.getElementById('recMaqSecar').value);
    var resuMaqSecar  = (idMaqSecar*recMaqSecar);
    if (Number.isNaN(resuMaqSecar)){
        resuMaqSecar = 0;
    }
    document.getElementById('resuMaqSecar').value = resuMaqSecar;

    // Input Microcomputador (CPU e Monitor)

    var idMaqComputador    = parseFloat(document.getElementById('idMaqComputador').value);
    var recMaqComputador   = parseFloat(document.getElementById('recMaqComputador').value);
    var resuMaqComputador  = (idMaqComputador*recMaqComputador);
    if (Number.isNaN(resuMaqComputador)){
        resuMaqComputador = 0;
    }
    document.getElementById('resuMaqComputador').value = resuMaqComputador;

    // Input Projetor de slides

    var idProjetor    = parseFloat(document.getElementById('idProjetor').value);
    var recProjetor   = parseFloat(document.getElementById('recProjetor').value);
    var resuProjetor  = (idProjetor*recProjetor);
    if (Number.isNaN(resuProjetor)){
        resuProjetor = 0;
    }
    document.getElementById('resuProjetor').value = resuProjetor;

    // Input Secador de cabelos

    var idSecador    = parseFloat(document.getElementById('idSecador').value);
    var recSecador   = parseFloat(document.getElementById('recSecador').value);
    var resuSecador  = (idSecador*recSecador);
    if (Number.isNaN(resuSecador)){
        resuSecador = 0;
    }
    document.getElementById('resuSecador').value = resuSecador;

    // Input Telefone sem fio

    var idTel    = parseFloat(document.getElementById('idTel').value);
    var recTel   = parseFloat(document.getElementById('recTel').value);
    var resuTel  = (idTel*recTel);
    if (Number.isNaN(resuTel)){
        resuTel = 0;
    }
    document.getElementById('resuTel').value = resuTel;

    // Input Televizor

    var idTelev    = parseFloat(document.getElementById('idTelev').value);
    var recTelev   = parseFloat(document.getElementById('recTelev').value);
    var resuTelev  = (idTelev*recTelev);
    if (Number.isNaN(resuTelev)){
        resuTelev = 0;
    }
    document.getElementById('resuTelev').value = resuTelev;


    // Input Torneira

    var idTorneira    = parseFloat(document.getElementById('idTorneira').value);
    var recTorneira   = parseFloat(document.getElementById('recTorneira').value);
    var resuTorneira  = (idTorneira*recTorneira);
    if (Number.isNaN(resuTorneira)){
        resuTorneira = 0;
    }
    document.getElementById('resuTorneira').value = resuTorneira;

    // Input Torradeira

    var idTorradeira    = parseFloat(document.getElementById('idTorradeira').value);
    var recTorradeira   = parseFloat(document.getElementById('recTorradeira').value);
    var resuTorradeira  = (idTorradeira*recTorradeira);
    if (Number.isNaN(resuTorradeira)){
        resuTorradeira = 0;
    }
    document.getElementById('resuTorradeira').value = resuTorradeira;

    // Input Triturador de lixo

    var idTriturador    = parseFloat(document.getElementById('idTriturador').value);
    var recTriturador   = parseFloat(document.getElementById('recTriturador').value);
    var resuTriturador  = (idTriturador*recTriturador);
    if (Number.isNaN(resuTriturador)){
        resuTriturador = 0;
    }
    document.getElementById('resuTriturador').value = resuTriturador;

    // Input Ventilador

    var idVentilador    = parseFloat(document.getElementById('idVentilador').value);
    var recVentilador   = parseFloat(document.getElementById('recVentilador').value);
    var resuVentilador  = (idVentilador*recVentilador);
    if (Number.isNaN(resuVentilador)){
        resuVentilador = 0;
    }
    document.getElementById('resuVentilador').value = resuVentilador;

    // Input Video game

    var idGame    = parseFloat(document.getElementById('idGame').value);
    var recGame   = parseFloat(document.getElementById('recGame').value);
    var resuGame  = (idGame*recGame);
    if (Number.isNaN(resuGame)){
        resuGame = 0;
    }
    document.getElementById('resuGame').value = resuGame;

    // Resultado Final !
    var resultFinal = (resudvd+resuAqu+resuAqu100+resuAqu600+resuAsp+resuBarb+resuBated+resuCafe+resuCel+resuCentri+resuChurras+resuArcond+resuSom+resuGrama+resuDep+resuEstereliza+resuExaustor+resuFrutas+resuFax+resuFerroRoupa+resuForno+resuMicroondas+resuFreezer+resuGeladeira+resuGrill+resuHoThe+resuImpressTinta+resuImpressLaser+resuLiquidificador+resuMaqCostura+resuMaqLouca+resuMaqRoupa+resuMaqSecar+resuMaqComputador+resuProjetor+resuSecador+resuTel+resuTelev+resuTorneira+resuTorradeira+resuTriturador+resuVentilador+resuGame);
    if (Number.isNaN(resultFinal)){
        resultFinal = 0;
    }
    document.getElementById('resultFinal').value = resultFinal;

    // Resultado Final em KVA

    var resultFinalkva = (resultFinal*0.92);

    document.getElementById('resultFinalkva').value = resultFinalkva;

}

// Função para o inpput aceitar apenas numeros
function num(dom){
    dom.value=dom.value.replace(/\D/g,'');
}
