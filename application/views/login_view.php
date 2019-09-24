  <!-- Masthead -->

  <header class="masasa" style="height:100vh;">

    <div class="container h-100">

      <div class="row h-100 align-items-center justify-content-center text-center">

        <div class="col-lg-10 align-self-end">

          <h1 style="color: black !important;" class="wow fadeInLeft text-uppercase text-white font-weight-bold" data-wow-delay="0.7s" data-wow-duration="0.8s">Área de Login</h1>

          <hr class="divider my-4 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.3s">

        </div>

        <div class="col-lg-8 align-self-baseline">

          <p class="text-white-75 font-weight-light mb-5 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s" style="color: black !important;">Entre com Login e Senha para Continuar</p>



          <button type="button" class="wow flipInX btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-wow-delay="1s" data-wow-duration="1.5s" data-target="#exampleModal" style="color: white !important; background-color: #ff5f2e;">

            Entrar

          </button>



          <!-- Modal -->

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" align="justify">

            <div class="modal-dialog modal-dialog-centered" role="document">

              <div class="modal-content">

                <div class="modal-header">

                  <h5 class="modal-title" id="exampleModalLabel">Preencha os Campos Para Continuar</h5>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                  </button>

                </div>

                <div class="modal-body">

                  <form class="needs-validation" action="<?php echo(base_url('login')); ?>" method="post" novalidate>

                            <div class="form-group">

                                <label>Login:</label>

                                <br>

                                <input type="text" name='login' value="<?php echo set_value ('login'); ?>"class="form-control" id="inputName" placeholder="login" required>

                                <div class="invalid-tooltip">

                                    O campo é Obrigatorio.

                                </div>

                            </div>

                            <div class="form-group">

                                <label>Senha:</label>

                                <br>

                                <input type="password" name='senha' value="<?php echo set_value ('senha'); ?>"class="form-control" id="inputPassword" placeholder="senha" required>

                                <div class="invalid-tooltip">

                                    O campo é Obrigatorio.

                                </div>

                            </div>

                        

                </div>

                <div class="modal-footer">

                  <button type="submit" class="btn" style="color: white !important; background-color: #ff5f2e;">Entrar</button>

                </div>

                </form>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </header>

  <div

      onclick="window.location.href = 'https://api.whatsapp.com/send?phone=5561998531287&text=Ol%C3%A1%2C%20somos%20a%20TrainingCursos%20Como%20podemos%20ajuda-lo%20%3F' "

      target="_blank"

      onmouseleave="mouseout()"

      onmouseover="mouseover()" 

      data-editable="" 

      id="whp"  

       

      class="fixed_button"

    >

      <span id="whp-text">Fale conosco</span>

      <img 

        id="whp-img"

        src="assets/img/wap.png" 

        style="height: 25px;width: 25px;">

    </div>

    <script type="text/javascript">

      

      function mouseover(){

        var whatsapp = document.getElementById('whp');

        whatsapp.style.width = "170px";

        whatsapp.addEventListener("transitionend", function(){

          document.getElementById('whp-text').style.display = "inline-block";

          time_out = setTimeout( function(){

            document.getElementById('whp-text').style.opacity = "1";

            clearTimeout( this );

          }, 1 );

        });

      }



      function mouseout(){

        var whatsapp = document.getElementById('whp');

        whatsapp.style.width = "40px";

        document.getElementById('whp-text').style.display = "none";

        document.getElementById('whp-text').style.opacity = "0";

        whatsapp.addEventListener("transitionend", function(){



          document.getElementById('whp-text').style.opacity = "0";

          document.getElementById('whp-text').style.display = "none";

        });

     

      }

    </script>





  <!-- Bootstrap core JavaScript -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Plugin JavaScript -->

  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>



  <!-- Custom scripts for this template -->

  <script src="assets/js/creative.min.js"></script>



  <script src="assets/js/wow.js"></script>

  <script src="assets/js/main.js"></script>



  <?php if(isset($js)){

          foreach($js as $var){?>

            <script src="<?php echo(base_url('assets/js/'.$var.'.js')); ?>"></script>

    <?php }

         } ?>





</body>



</html>