<div class="container-fluid">
    <form action="<?php echo base_url('listaMes')?>" method="POST">
        <h4 class="text-center mt-4">Mes Desejado:</h4>
        <div class="input-group mb-3 mt-4">
        <select type="text" class="form-control" id="text_field" value="<?php echo set_value ('busca');?>" name="busca" placeholder="Mes Desejado" aria-label="Mes Desejado" aria-describedby="button-addon2" required>
            <?php if(isset($mes)){
                foreach ($mes as $mes) {?>
            <option value="<?php echo $mes->mes?>"><?php echo $mes->mes?></option>
                <?php }}?>

        </select>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" id="submit" type="submit" id="button-addon2">Buscar</button>
            </div>
        </div>
    </form>
    <div id="search_content">
    <!-- está no buscaMes.js -->
    </div>
    
    <script>
        function myFunction() {
          var mywindow = window.open('', 'new div', 'height=400,width=600');
            window.print();
        }
    </script>
</div>
</div>
