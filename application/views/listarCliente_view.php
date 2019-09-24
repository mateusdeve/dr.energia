<div class="container-fluid">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Login</th>
            <th scope="col">Senha</th>
            <th scope="col">Perfil</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php if(isset($user_data)){
                foreach ($user_data as $row) { ?>
            <tr>
                <th scope="row"><?php echo $row->id?></th>
                <td><?php echo $row->login?></td>
                <td><?php echo $row->senha?></td>
                <td><?php echo $row->perfil?></td>
                <td class="row">
                    <form action="cadastroCliente" method="GET">
                        <input type="hidden" name="id" value="<?php echo $row->id?>"/>
                        <button type="submit" class="btn btn-outline-primary" title="Cadastrar Grafico Cliente"><i class="fas fa-chart-area"></i></button>
                    </form>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-outline-secondary btn-alterar" title="Alterar Login" data-toggle="modal" data-user='<?php echo json_encode($row);?>'><i class="fas fa-pencil-alt"></i></button><span ></span>&nbsp;&nbsp;&nbsp;
                    <button title="Remover Login" class="btn btn-outline-danger btn-remover" data-toggle="modal" data-target="#remove_confirmation_modal" data-id="<?php echo $row->id;?>"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
                <?php }}?>
        </tbody>
    </table>
    <div class="text-center">
    <br>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" >
            Cadastrar Novo Login
        </button>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro Para Acesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('listarCliente');?>" method="POST">
            <div class="modal-body">
                <div class="row">
                        <div class="col-12">
                            <label>Login:</label>
                            <input type="text" class="form-control" name="login" value="<?php echo set_value('login');?>" placeholder="login" required/>
                        </div>
                        <div class="col-12">
                            <label class="mt-2">Senha:</label>
                            <input type="text" class="form-control" name="senha" value="<?php echo set_value('senha');?>" placeholder="Senha" required/>
                        </div>
                        <div class="col-12">
                            <label class="mt-2">Perfil:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="perfil" required>
                                <option value="admin">Admininstrador</option>
                                <option value="cliente">Cliente</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="mt-2">Tarifa:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="tarifa" required>
                                <option value="azul">Azul</option>
                                <option value="verde">Verde</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>