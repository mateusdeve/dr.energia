<!-- Header -->

<header class="masasa" >

<div class="container h-100">

  <div class="row h-100 align-items-center justify-content-center text-center">

    <div class="col-lg-10 align-self-end">

      <h1 style="color: black !important;" class="wow fadeInLeft text-uppercase text-white font-weight-bold" data-wow-delay="0.7s" data-wow-duration="0.8s">EFICIÊNCIA ENERGÉTICA</h1>

      <hr class="divider my-4 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.3s">

    </div>
    <div class="col-lg-8 align-self-baseline wow flipInX">

      <p class="text-white-75 font-weight-light mb-5 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s" style="color: black !important;">Reduza os custos com energia elétrica!</p>

      <a class="btn btn-xl js-scroll-trigger" href="#calc" style="color: white !important; background-color: #ff5f2e;">Vamos calcular ?</a>

    </div>

  </div>

</div>

</header>

<div class="container">

<br>

<h3 class="text-center wow fadeInUp" id="calc">Calcule seu sistema solar</h3>

<br>

<form>

    <div class="d-inline-block" id="disable" style="width:100%;">
    <div class="row">
      <div class="col-12 mt-3 col-md-6">
        <label >Nome:</label>
        <input type="text" class="form-control" id="nome" onkeyup="simulador.calc()" name="nome" value="<?php set_value('nome')?>" placeholder="Nome" required>
      </div>

      <div class="col-12 mt-3 col-md-6">
        <label >Email:</label>
        <input type="email" class="form-control" id="email" onkeyup="simulador.calc()" name="email" value="<?php set_value('email')?>" placeholder="Email" required>
      </div>

      <div class="col-12 mt-3 col-md-12">
        <label >Estado:</label>
        <select onchange="simulador.calc()" id="estado" name="estado" class="form-control">
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
            <option value="Estrangeiro">Estrangeiro</option>
        </select>
      </div>

      <div class="col-12 col-md-12 mt-3">
        <label >Consumo medio mês em KWH:</label>
        <input type="text" class="form-control" id="cmm" onkeyup="simulador.calc()" name="cmm" value="<?php set_value('cmm')?>" placeholder="Consumo medio mês" required>
      </div>

      <div class="col-12 col-md-12 mt-3">
      <label >Valor da tarifa em R$:</label>
        <input type="text" class="form-control" id="tarifa" onkeyup="simulador.calc()" name="tarifa" value="<?php set_value('tarifa')?>" placeholder="Tarifa" required>
      </div>

      <div class="col-12 col-md-12 mt-3">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Escolha sua região:</label>
            <select class="form-control" id="exampleFormControlSelect1" onchange="simulador.calc()" name="hsp">
              <option value="4.4">Região Norte</option>
              <option value="4.8">Região Nordeste</option>
              <option value="4.7">Região Centro - Oeste</option>
              <option value="4.0">Região Sul</option>
              <option value="4.5">Região Sudeste</option>
            </select>
        </div>
      </div>
      <div class="col-12 col-md-12 mt-3" id="alert1">      
      </div>
      <div class="col-12 col-md-12 mt-3" id="alert2">      
      </div>
      <div class="col-12 col-md-12 mt-3" id="alert3">      
      </div>

      </div>
      </div>
<div class="d-none" id="active">
<div class="row">
      <div class="col-12 col-md-12 mt-3">
      <label >Energia media mensal em KWH:</label>
        <input type="text" class="form-control" id="emm" onkeyup="simulador.calc()" name="emm" value="<?php set_value('emm')?>" placeholder="Energia media mensal" required readonly>
      </div>

      <div class="col-12 col-md-12 mt-3">
      <label >Energia media diaria em KWH:</label>
        <input type="text" class="form-control" id="emd" onkeyup="simulador.calc()" name="emd" value="<?php set_value('emd')?>" placeholder="Energia media diaria" required readonly>
      </div>

      <div class="col-12 col-md-12 mt-3">
        <input type="hidden" class="form-control" id="pm" onkeyup="simulador.calc()" name="pm" value="<?php set_value('pm')?>" placeholder="Potencia modulo" required readonly>
      </div>

      <div class="col-12 col-md-12 mt-3">
      <label >Potência pico KWp:</label>
        <input type="text" class="form-control" id="ppico" onkeyup="simulador.calc()" name="ppico" value="<?php set_value('ppico')?>" placeholder="Potência pico" required readonly>
      </div>

      <div class="col-12 col-md-12 mt-3">
      <label >Potência inversor KWp:</label>
        <input type="text" class="form-control" id="pinver" onkeyup="simulador.calc()" name="pinver" value="<?php set_value('pinver')?>" placeholder="Potência inversor" required readonly>
      </div>

      <div class="col-12 col-md-12 mt-3">
      <label >Área de instalação:</label>
        <input type="text" class="form-control" id="area" onkeyup="simulador.calc()" name="area" value="<?php set_value('area')?>" placeholder="Área" required readonly>
      </div>

      <div class="col-12 col-md-12 mt-3">
      <label >Quantidade de placa:</label>
        <input type="text" class="form-control" id="qm" onkeyup="simulador.calc()" name="qm" value="<?php set_value('qm')?>" placeholder="qm" required readonly>
      </div>
      <div class="col-12 col-md-12 mt-3">
      <label >Economia de energia mensal em R$:</label>
        <input type="text" class="form-control" id="em" onkeyup="simulador.calc()" name="em" value="<?php set_value('em')?>" placeholder="em" required readonly>
      </div>
      <div class="col-12 col-md-12 mt-3">
      <label >Valor aproximado do sistema instalado:</label>
        <input type="text" class="form-control" id="kwp" onkeyup="simulador.calc()" name="kwp" value="<?php set_value('kwp')?>" placeholder="kwp" required readonly>
      </div>
      </div>
      <div class="col-12 mt-5 text-center" id="button-voltar">
        <button class="btn btn-primary" onClick="simulador.voltar(event)">Voltar</button>
      </div>
    </div>
    <div class="col-12 mt-5 text-center d-inline-block" id="button">
        <button class="btn btn-primary" onClick="simulador.active(event)">Enviar</button>
      </div>

  </form>

</div>
