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

          <a class="btn btn-xl js-scroll-trigger" href="#calc" style="color: white !important; background-color: #ff5f2e;">Calcule o Consumo Por Aparelho</a>

        </div>

      </div>

    </div>

  </header>

  <div class="container">

    <br>

    <h3 class="text-center wow fadeInUp" id="calc">Calcule o Consumo Por Aparelho</h3>

    <br>

    <form>

        <div class="row">

          <div class="col-md-4">

            <label >Insira a Potência do seu aparelho em Watts(W)</label>

            <input id="potencia" type="tel" class="form-control" value="" onkeyup="num(this);" onblur="calcular()" placeholder="0">

          </div>

          <div class="col-md-4">

              <label >Quantas horas por mês é o seu consumo ?</label>

              <input id="horas" type="tel" class="form-control" value="" onkeyup="calcular()" placeholder="0">

          </div>

          <div class="col-md-4">

            <label >Insira o valor do kWh em sua cidade</label>

            <input id="valor" type="tel"  name="dinheiro"  class="form-control" value="" onkeyup="calcular()" placeholder="0.00">

          </div>

        </div>

        <div class="form-group">

          <label>Total consumo KWh</label>

          <input id="result" type="text" class="form-control" readonly placeholder="0">

        </div>

        <div class="form-group">

            <label>Total consumo R$</label>

            <input id="result2" type="text" class="form-control" readonly placeholder="0">

          </div>

      </form>

  </div>

      

</body>

</html>