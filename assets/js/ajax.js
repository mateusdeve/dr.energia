$.ajax({
    type: "POST",
    url: 'searchList',
    dataType: "json",
    success: function(msg){
        $('#search_content').html('');

        if( msg == 'null' ){
          return;
        }
        
        msg.forEach( (element) => {
            const {id, login, senha, perfil} = element;

            var content = 
            `
            <tr>
                <th scope="row">${id}</th>
                <td>${login}</td>
                <td>${senha}</td>
                <td>${perfil}</td>
                <td class="row">
                    <form action="cadastroCliente" method="GET">
                        <input style="display:none" name="id" value="${id}"/>
                        <button type="submit" class="btn btn-primary" title="Cadastrar Grafico desse Cliente"><i class="fas fa-chart-area"></i></button>
                    </form>&nbsp;&nbsp;
                    <button class="btn btn-outline-secondary btn-alterar" data-toggle="modal" data-user='<?php echo json_encode($row);?>'><i class="fas fa-pencil-alt"></i></button><span class="pr-3"></span>
                    <button class="btn btn-outline-danger btn-remover" data-toggle="modal" data-target="#remove_confirmation_modal" data-id="<?php echo $row->id;?>"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            `;

            $('#search_content').append( content ); 

        });
    }
});