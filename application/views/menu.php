<body id="page-top">



  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2" id="mainNav">

    <div class="container">

      <img src="assets/img/drenergia.png" class=" wow fadeInDown" style="width: 230px; height: 55px">

      <!-- <img class="navbar-brand js-scroll-trigger" href="#p">Dr.energia</a> -->

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto my-2 my-lg-0">

          <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.4s">

            <a class="nav-link js-scroll-trigger" style="color: black !important;" href="<?php echo base_url('home');?>">Home</a>

          </li>

          <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.4s">

            <a class="nav-link js-scroll-trigger" style="color: black !important;" href="<?php echo base_url('simulador');?>">Calculadora solar</a>

          </li>

          <li class="nav-item wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">

            <a class="nav-link js-scroll-trigger" style="color: black !important;" href="<?php echo base_url('CalculoConsumoAparelho');?>">Consumo por Aparelho</a>

          </li>

          <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.6s">

            <a class="nav-link js-scroll-trigger" style="color: black !important;" href="<?php echo base_url('CalculoContaLuz');?>">Conta de Luz</a>

          </li>

          <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.7s">

            <a class="nav-link js-scroll-trigger" style="color: black !important;" href="<?php echo base_url('CalculoDemanda');?>">Cálculo de Demanda</a>

          </li>

          <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.9s">

            <a class="nav-link js-scroll-trigger" style="color: black !important;" href="<?php echo base_url('login');?>">Login</a>

          </li>

        </ul>

      </div>

    </div>

  </nav>



  <!-- Logout Modal-->

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Pronto para Partir?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">×</span>

          </button>

        </div>

        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>

        <div class="modal-footer">

          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

          <a class="btn btn-primary" href="<?php echo base_url('login/sair');?>">Sair</a>

        </div>

      </div>

    </div>

  </div>