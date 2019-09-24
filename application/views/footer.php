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

  <!-- Footer -->
  <div>
     <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019 - drenergia.net.br</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
  </div>

  
  <!-- Scroll to Top Button-->
  <!-- <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> -->

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
  

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo(base_url('assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo(base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo(base_url('assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo(base_url('assets/js/admin/sb-admin-2.min.js')); ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo(base_url('assets/vendor/chart.js/Chart.min.js')); ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo(base_url('assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo(base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>

  <script src="<?php echo(base_url('assets/js/wow.js')); ?>"></script>
  <script src="<?php echo(base_url('assets/js/main.js')); ?>"></script>

  <?php if(isset($js)){
          foreach($js as $var){?>
            <script src="<?php echo(base_url('assets/js/'.$var.'.js')); ?>"></script>
    <?php }
         } ?>


</body>

</html>