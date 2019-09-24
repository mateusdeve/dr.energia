<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background:rgba(255, 91, 41, 0.9) !important;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('home');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="assets/img/logodr.png" style="width: 30px; height: 30px;">
        </div>
        <div class="sidebar-brand-text mx-3">Dr.Energia</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('areaCliente');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Área Do Cliente</span></a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Gráficos
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoConsumoPonta');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Consumo Ponta</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoConsumoForaPonta');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Consumo Fora Ponta</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoConsumoTotal');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Consumo Total em kwh</span></a>
      </li>

      <?php if(isset($tarifa)){
              if($tarifa <> 'verde'){?>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoDemandaPonta');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Demanda Ponta</span></a>
      </li>
              <?php }}?>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoDemandaForaPonta');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Demanda Fora Ponta</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoDemandaRegistrada');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Demanda Registrada</span></a>
      </li>

      <?php if(isset($tarifa)){
              if($tarifa <> 'verde'){?>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoUltrapassagemPonta');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Ultrapassagem Ponta</span></a>
      </li>
              <?php }}?>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoUltrapassagemForaPonta');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Ultrapassagem Fora Ponta</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoErexPonta');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Erex Ponta</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoErexForaPonta');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Erex Fora Ponta</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoDerex');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Derex</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('graficoValoresPagos');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Valores Pagos</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ListaMes');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Conta de Luz</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nome?></span>
                <img class="img-profile rounded-circle" src="assets/img/perfil.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="home">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Home
                </a>
                <a class="dropdown-item" href="login">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  login
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
