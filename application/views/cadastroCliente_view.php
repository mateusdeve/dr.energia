<div class="container">
    <h5 class="text-center mb-3 center">Cadastro Cliente</h5>
    <nav >
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Documentação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="janeiro" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="janeiro" aria-selected="false">Jan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="fevereiro" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="fevereiro" aria-selected="false">Fev</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="março" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="março" aria-selected="false">Mar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="abril" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="abril" aria-selected="false">Abr</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="maio" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="maio" aria-selected="false">Mai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="junho" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="junho" aria-selected="false">Jun</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="julho" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="julho" aria-selected="false">Jul</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="agosto" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="agosto" aria-selected="false">Ago</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="setembro" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="setembro" aria-selected="false">Set</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="outubro" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="outubro" aria-selected="false">Out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="novembro" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="novembro" aria-selected="false">Nov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dezembro" data-toggle="tab" href="#peg-tab" role="tab" aria-controls="dezembro" aria-selected="false">Dez</a>
            </li>
        </ul>
    </nav>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h1>Designer</h1>
        </div>
        <div class="tab-pane fade" id="peg-tab" role="tabpanel" aria-labelledby="janeiro-tab">
        <form action="<?php base_url('cadastroCliente')?>" method="post">
        <div class="container mt-4">
        <h5 class="mb-3" id="demo" style="color:rgba(255, 91, 41, 0.9);"></h5>
            <div class="row">
                <input type="hidden" id="var" name="mes" value="" class="form-control" required/>
                <input type="hidden" name="id_cliente" value="<?php echo $id_cliente?>" class="form-control" required/>
                <div class="col-md-4">
                    <label>Consumo Ponta</label>
                    <input type="text" id="cp" onkeyup="calc()" name="consumoPonta" value="<?php echo set_value('consumoPonta');?>" class="form-control" placeholder="Quantidade" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa CP</label>
                    <input type="text" id="tcp" name="tcp" onkeyup="calc()" value="<?php echo set_value('tcp');?>" class="form-control" placeholder="Quanto" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial CP</label>
                    <input type="text" id="rescp" name="vpcp" onkeyup="calc()" value="<?php echo set_value('vpcp');?>" class="form-control" placeholder="Valor Final" readonly required/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label>Consumo Fora Ponta</label>
                    <input type="text" id="cfp" onkeyup="calc()" name="consumoForaPonta" value="<?php echo set_value('consumoForaPonta');?>" class="form-control" placeholder="Quantidade"  required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa CFP</label>
                    <input type="text" id="tcfp" onkeyup="calc()" name="tcfp" value="<?php echo set_value('tcfp');?>" class="form-control" placeholder="Quanto" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial CFP</label>
                    <input type="text" id="rescfp" onkeyup="calc()" name="vpcfp" value="<?php echo set_value('vpcfp');?>" class="form-control" placeholder="Valor Final"  readonly required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" id="consumototal" onkeyup="calc()" name="consumototal" value="<?php echo set_value('consumototal');?>" class="form-control" required/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label>Demanda Ponta(AZUL)</label>
                    <input type="text" id="dp" onkeyup="calc()" name="demandaPonta" value="<?php echo set_value('demandaPonta');?>" class="form-control" placeholder="Demanda Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa DP</label>
                    <input type="text" id="tdp" onkeyup="calc()" name="tdp" value="<?php echo set_value('tdp');?>" class="form-control" placeholder="Tarifa Demanda Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial DP</label>
                    <input type="text" id="resdp" onkeyup="calc()" name="vpdp" value="<?php echo set_value('vpdp');?>" class="form-control" placeholder="Valor Parcial Demanda Ponta" readonly required/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <label>Demanda Registrada</label>
                    <input type="text" id="dp" onkeyup="calc()" name="demandaRegistrada" value="<?php echo set_value('demandaRegistrada');?>" class="form-control" placeholder="Demanda Registrada" required/>
                </div>
            </div>
            <div class="div row mt-3">
                <div class="col-md-4">
                    <label>Demanda Fora Ponta(AZUL, VERDE)</label>
                    <input type="text" id="dfp" onkeyup="calc()" name="demandaForaPonta" value="<?php echo set_value('demandaForaPonta');?>"class="form-control" placeholder="Demanda Fora Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa dfp</label>
                    <input type="text" id="tdfp" onkeyup="calc()" name="tdfp" value="<?php echo set_value('tdfp');?>" class="form-control" placeholder="Tarifa Demanda Fora Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial dfp</label>
                    <input type="text" id="resdfp" onkeyup="calc()" name="vpdfp" value="<?php echo set_value('vpdfp');?>" class="form-control" placeholder="Valor Parcial Demanda Fora Ponta" readonly required/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label>Ultrapassagem Ponta(AZUL)</label>
                    <input type="text" id="up" onkeyup="calc()" name="ultrapassagemPonta" value="<?php echo set_value('ultrapassagemPonta');?>" class="form-control" placeholder="Ultrapassagem Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa up</label>
                    <input type="text" id="tup" onkeyup="calc()" name="tup" value="<?php echo set_value('tup');?>" class="form-control" placeholder="Tarifa Ultrapassagem Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial up</label>
                    <input type="text" id="resup" onkeyup="calc()" name="vpup" value="<?php echo set_value('vpup');?>" class="form-control" placeholder="Valor Parcial Ultrapassagem Ponta" readonly required/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label>Ultrapassagem Fora Ponta(AZUL,VERDE)</label>
                    <input type="text" id="ufp" onkeyup="calc()" name="ultrapassagemForaPonta" value="<?php echo set_value('ultrapassagemForaPonta');?>" class="form-control" placeholder="Ultrapassagem Fora Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa ufp</label>
                    <input type="text" id="tufp" onkeyup="calc()" name="tufp" value="<?php echo set_value('tufp');?>" class="form-control" placeholder="Tarifa Ultrapassagem Fora Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial ufp</label>
                    <input type="text" id="resufp" onkeyup="calc()" name="vpufp" value="<?php echo set_value('vpufp');?>" class="form-control" placeholder="Valor Parcial Ultrapassagem Fora Ponta" readonly required/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label>EREX Ponta</label>
                    <input type="text" id="ep" onkeyup="calc()" name="erexPonta" value="<?php echo set_value('erexPonta');?>" class="form-control" placeholder="EREX Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa ep</label>
                    <input type="text" id="tep" onkeyup="calc()" name="tep" value="<?php echo set_value('tep');?>" class="form-control" placeholder="Tarifa EREX Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial ep</label>
                    <input type="text" id="resep" onkeyup="calc()" name="vpep" value="<?php echo set_value('vpep');?>" class="form-control" placeholder="Valor Parcial EREX Ponta" readonly required/>
                </div>
            </div>
            <div class="div row mt-3">
                <div class="col-md-4">
                    <label>EREX Fora Ponta</label>
                    <input type="text" id="efp" onkeyup="calc()" name="erexForaPonta" value="<?php echo set_value('erexForaPonta');?>" class="form-control" placeholder="Erex Fora Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa efp</label>
                    <input type="text" id="tefp" onkeyup="calc()" name="tefp" value="<?php echo set_value('tefp');?>" class="form-control" placeholder="Tarifa EREX Fora Ponta" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial efp</label>
                    <input type="text" id="resefp" onkeyup="calc()" name="vpefp" value="<?php echo set_value('vpefp');?>" class="form-control" placeholder="Valor Parcial EREX Fora Ponta" readonly required/>
                </div>
            </div>
            <div class="div row mt-3">
                <div class="col-md-4">
                    <label>DEREX</label>
                    <input type="text" id="der" onkeyup="calc()" name="derex" value="<?php echo set_value('derex');?>" class="form-control" placeholder="DEREX" required/>
                </div>
                <div class="col-md-4">
                    <label>Tarifa derex</label>
                    <input type="text" id="tder" onkeyup="calc()" name="tderex" value="<?php echo set_value('tderex');?>" class="form-control" placeholder="Tarifa DEREX" required/>
                </div>
                <div class="col-md-4">
                    <label>Valor Parcial derex</label>
                    <input type="text" id="resder" onkeyup="calc()" name="vpderex" value="<?php echo set_value('vpderex');?>" class="form-control" placeholder="Valor Parcial DEREX" readonly required/>
                </div>
            </div>
            <div class="div row mt-3">
                <div class="col-md-8">
                    <input type="hidden" class="form-control"/>
                </div>
                <div class="col-md-4">
                    <label>Iluminação Publica</label>
                    <input type="text" name="iluminacaoip" id="ip" onkeyup="calc()" value="<?php echo set_value('iluminacaoip');?>" class="form-control" placeholder="Iluminação Publica" required/>
                </div>
                <div class="col-md-8">
                    <input type="hidden" class="form-control"/>
                </div>
                <div class="col-md-4 mt-3">
                    <label>Bandeira</label>
                    <input type="text" id="bandeira" onkeyup="calc()" name="bandeira" value="<?php echo set_value('bandeira');?>" class="form-control" placeholder="Bandeira"/>
                </div>
                <div class="col-md-8">
                    <input type="hidden" class="form-control"/>
                </div>
                <div class="col-md-4 mt-3">
                    <label>Desconto</label>
                    <input type="text" name="desconto" id="desconto" onkeyup="calc()"  value="<?php echo set_value('desconto');?>" class="form-control" placeholder="Desconto"/>
                </div>
                <div class="col-md-8">
                    <input type="hidden" class="form-control"/>
                </div>
                <div class="col-md-4 mt-3">
                    <label>Valor a Pagar</label>
                    <input type="text" name="valorapagar" id="resfinal" onkeyup="calc()"  value="<?php echo set_value('valorapagar');?>" class="form-control" placeholder="Valor A Pagar" readonly required/>
                </div>
            </div>
            <div class="text-center mt-4 mb-5">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>    
      </form>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
</div>