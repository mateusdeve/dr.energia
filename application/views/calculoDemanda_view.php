    <!-- Header -->

    <header class="masasa" >

    <div class="container h-100">

      <div class="row h-100 align-items-center justify-content-center text-center">

        <div class="col-lg-10 align-self-end ">

          <h1 style="color: black !important;" class="wow fadeInLeft text-uppercase text-white font-weight-bold" data-wow-delay="0.7s" data-wow-duration="0.8s">EFICIÊNCIA ENERGÉTICA</h1>

          <hr class="divider my-4 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.3s">

        </div>

        <div class="col-lg-8 align-self-baseline wow flipInX">

          <p class="text-white-75 font-weight-light mb-5 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s" style="color: black !important;">Reduza os custos com energia elétrica da sua empresa </p>

          <a class="btn btn-xl js-scroll-trigger" href="#calc" style="color: white !important; background-color: #ff5f2e;">Calcule A Demanda</a>

        </div>

      </div>

    </div>

  </header>

  <div class="container">

    <br>

    <h3 class="text-center wow fadeInUp" id="calc">Calcule A Demanda</h3>

    <br>

    <div class="table-responsive">

        <table class="table table-hover">

        <thead>

            <tr>

                <th scope="col">Aparelhos</th>

                <th scope="col" class="qtd">Qtd</th>

                <th scope="col" class="customTable" >Potência parcial (W) </th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>Aparelho de DVD</td>

                <td><input type="hidden" class="form-control" id="idAdvd" value="100" onblur="calcular()" placeholder="0" readonly>

                <input type="tel" class="form-control" id="recdvd" onkeyup="num(this);" onblur="calcular()" placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resudvd" value="0" onblur="calcular()" placeholder="0" readonly></td>

            </tr>

            <tr>

                <td>Aquecedor de água 100 a 300 Litros</td>

                <td><input type="hidden" class="form-control" id="idAqu" value="2500" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recAqu" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuAqu" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                <td>Aquecedor de água 100 Litros</td>

                <td><input type="hidden" class="form-control" id="idAqu100" value="1500" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recAqu100" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuAqu100" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                <td>Aquecedor de água 300 a 600 Litros</td>

                <td><input type="hidden" class="form-control" id="idAqu600" value="3000" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recAqu600" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuAqu600" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                                <td>Aspirador de pó </td>

                <td><input type="hidden" class="form-control" id="idAsp" value="600" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recAsp" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuAsp" value="0"  onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                                <td>Barbeador</td>

                <td><input type="hidden" class="form-control" id="idBarb" value="12" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recBarb" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuBarb" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                                <td>Batedeira</td>

                <td><input type="hidden" class="form-control" id="idBated" value="200" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recBated" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuBated" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                                <td>Cafeteira</td>

                <td><input type="hidden" class="form-control" id="idCafe" value="950" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recCafe" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuCafe" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                                <td>Carregador de Celular</td>

                <td><input type="hidden" class="form-control" id="idCel" value="7" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recCel" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuCel" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                                <td>Centrifuga</td>

                <td><input type="hidden" class="form-control" id="idCentri" value="250" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recCentri" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuCentri" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                                <td>Churrasqueira Eletrica</td>

                <td><input type="hidden" class="form-control" id="idChurras" value="3800" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recChurras" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuChurras" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Ar Condicionado</td>

                <td><input type="hidden" class="form-control" id="idArcond" value="2600" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recArcond" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuArcond" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Conjunto de Som</td>

                <td><input type="hidden" class="form-control" id="idSom" value="100" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recSom" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuSom" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Cortador de Grama</td>

                <td><input type="hidden" class="form-control" id="idGrama" value="900" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recGrama" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuGrama" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Depurador</td>

                <td><input type="hidden" class="form-control" id="idDep" value="450" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recDep" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuDep" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Esterelizador</td>

                <td><input type="hidden" class="form-control" id="idEstereliza" value="200" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recEstereliza" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuEstereliza" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Exaustor</td>

                <td><input type="hidden" class="form-control" id="idExaustor" value="170" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recExaustor" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuExaustor" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Espremedor de frutas</td>

                <td><input type="hidden" class="form-control" id="idFrutas" value="200" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recFrutas" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuFrutas" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>FAX</td>

                <td><input type="hidden" class="form-control" id="idFax" value="30" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recFax" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuFax" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Ferro de passar roupa</td>

                <td><input type="hidden" class="form-control" id="idFerroRoupa" value="1450" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recFerroRoupa" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuFerroRoupa" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Forno</td>

                <td><input type="hidden" class="form-control" id="idForno" value="2500" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recForno" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuForno" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Microondas</td>

                <td><input type="hidden" class="form-control" id="idMicroondas" value="1050" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recMicroondas" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuMicroondas" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Freezer</td>

                <td><input type="hidden" class="form-control" id="idFreezer" value="400" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recFreezer" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuFreezer" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Geladeira</td>

                <td><input type="hidden" class="form-control" id="idGeladeira" value="145" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recGeladeira" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuGeladeira" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Grill</td>

                <td><input type="hidden" class="form-control" id="idGrill" value="1000" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recGrill" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuGrill" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Home Theater</td>

                <td><input type="hidden" class="form-control" id="idHoThe" value="300" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recHoThe" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuHoThe" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Impressora a jato de tinta</td>

                <td><input type="hidden" class="form-control" id="idImpressTinta" value="100" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recImpressTinta" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuImpressTinta" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Impressora a laser </td>

                <td><input type="hidden" class="form-control" id="idImpressLaser" value="100" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recImpressLaser" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuImpressLaser" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Liquidificador</td>

                <td><input type="hidden" class="form-control" id="idLiquidificador" value="300" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recLiquidificador" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuLiquidificador" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Máquina de costura</td>

                <td><input type="hidden" class="form-control" id="idMaqCostura" value="100" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recMaqCostura" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuMaqCostura" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Máquina de lavar louças</td>

                <td><input type="hidden" class="form-control" id="idMaqLouca" value="1500" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recMaqLouca" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuMaqLouca" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Máquina de lavar roupas</td>

                <td><input type="hidden" class="form-control" id="idMaqRoupa" value="550" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recMaqRoupa" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuMaqRoupa" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Máquina de secar de roupas</td>

                <td><input type="hidden" class="form-control" id="idMaqSecar" value="3500" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recMaqSecar" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuMaqSecar" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Microcomputador (CPU e Monitor)</td>

                <td><input type="hidden" class="form-control" id="idMaqComputador" value="300" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recMaqComputador" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuMaqComputador" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Projetor de slides</td>

                <td><input type="hidden" class="form-control" id="idProjetor" value="250" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recProjetor" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuProjetor" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Secador de cabelos</td>

                <td><input type="hidden" class="form-control" id="idSecador" value="1100" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recSecador" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuSecador" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Telefone sem fio</td>

                <td><input type="hidden" class="form-control" id="idTel" value="10" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recTel" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuTel" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Televizor</td>

                <td><input type="hidden" class="form-control" id="idTelev" value="110" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recTelev" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuTelev" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Torneira</td>

                <td><input type="hidden" class="form-control" id="idTorneira" value="3100" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recTorneira" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuTorneira" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Torradeira</td>

                <td><input type="hidden" class="form-control" id="idTorradeira" value="750" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recTorradeira" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuTorradeira" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Triturador de lixo</td>

                <td><input type="hidden" class="form-control" id="idTriturador" value="300" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recTriturador" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuTriturador" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Ventilador</td>

                <td><input type="hidden" class="form-control" id="idVentilador" value="220" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recVentilador" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuVentilador" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                

                <td>Video Game</td>

                <td><input type="hidden" class="form-control" id="idGame" value="15" onblur="calcular()"  placeholder="0" readonly>

                <input type="tel" class="form-control" id="recGame" onkeyup="num(this);" onblur="calcular()"  placeholder="0"></td>

                <td><input type="tel" class="form-control" id="resuGame" value="0" onblur="calcular()"  placeholder="0" readonly></td>

            </tr>

            <tr>

                <td></td>

                <td><input class="inpuval" readonly></td>

                <td><input class="inpu" readonly></td>

            </tr>

        </tbody>

    </table>

    <div>

    <div class="input-group mb-3">

        <div class="input-group-prepend">

            <span class="input-group-text" id="basic-addon1">Demanda Total (KW) :</span>

        </div>

        <input type="text" class="form-control" id="resultFinal" value="0" name="dinheiro" onblur="calcular()"  placeholder="0" readonly>

    </div>

    <div class="input-group mb-3">

        <div class="input-group-prepend">

            <span class="input-group-text" id="basic-addon1">Demanda Total (KVA) :</span>

        </div>

        <input type="text" class="form-control" id="resultFinalkva" value="0" name="dinheiro" onblur="calcular()"  placeholder="0" readonly>

    </div>

    <div>

        <h4>Legenda:</h4><br>

        <h5>W   = Watts</h5>

        <h5>KW  = kilowatt </h5>

        <h5>KVA = Kilovoltampere (Fp = 0.92)</h5>

        <h5>Qtd = Quantidade</h5>

    </div>

    </div>

    </div>

  </div>

      

</body>

</html>