

var req = null;

$(function(){
    const path      = window.location.href; //
    var array_path  = path.split( '/' );
    array_path.pop();
    var array_base_path = Object.assign( [], array_path );
    array_path.push( 'search' );

    const full_path = array_path.join( '/' );
    const base_path = array_base_path.join( '/' );

    $('#submit').click( function(e){

        e.preventDefault();
        const value = $('#text_field').val();

        req = $.ajax({
            type: "POST",
            url: full_path,
            data: {'busca' : value},
            dataType: "text",
            success: function(msg){
                $('#search_content').html('');

                if( msg == 'null' ){
                  return;
                }

                 var array =             JSON.parse(msg);


                var first_element = null;
                console.log(array);
                array.forEach( (element, index) => {
                    var node_id = 'content' + element.id;
                    const {mes, consumoPonta, tcp, vpcp , consumoForaPonta, tcfp, vpcfp, demandaPonta, tdp, vpdp, demandaForaPonta, tdfp, vpdfp, ultrapassagemPonta, tup, vpup, ultrapassagemForaPonta, tufp, vpufp,  erexPonta, tep, vpep,  erexForaPonta, tefp, vpefp,  derex, tderex, vpderex, valorapagar, bandeira, desconto, iluminacaoip} = element;

                    if(index == 0)
                    {
                        first_element = node_id;
                    }

                    var content = 
                    `
                    <div id="printable" class="page">
                    <table class="table table-hover">
                    <thead>
                    <h5 class="text-center mt-3 mb-3">${mes}</h5>
                      <tr>
                        <th scope="col">Apresentação</th>
                        <th scope="col">Consumos</th>
                        <th scope="col">R$ V.Unitários</th>
                        <th scope="col">R$ V.Parciais</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Consumo Ponta</td>
                        <td>${consumoPonta}</td>
                        <td>${tcp}</td>
                        <td>${vpcp}</td>
                      </tr>
                      <tr>
                        <td>Consumo Fora Ponta</td>
                        <td>${consumoForaPonta}</td>
                        <td>${tcfp}</td>
                        <td>${vpcfp}</td>
                      </tr>
                      <tr>
                        <td>Demanda Ponta</td>
                        <td>${demandaPonta}</td>
                        <td>${tdp}</td>
                        <td>${vpdp}</td>
                      </tr>
                      <tr>
                        <td>Demanda Fora Ponta</td>
                        <td>${demandaForaPonta}</td>
                        <td>${tdfp}</td>
                        <td>${vpdfp}</td>
                      </tr>
                      <tr>
                        <td>Ultrapassagem Ponta</td>
                        <td>${ultrapassagemPonta}</td>
                        <td>${tup}</td>
                        <td>${vpup}</td>
                      </tr>
                      <tr>
                        <td>Ultrapassagem Fora Ponta</td>
                        <td>${ultrapassagemForaPonta}</td>
                        <td>${tufp}</td>
                        <td>${vpufp}</td>
                      </tr>
                      <tr>
                        <td>Erex Ponta</td>
                        <td>${erexPonta}</td>
                        <td>${tep}</td>
                        <td>${vpep}</td>
                      </tr>
                      <tr>
                        <td>Erex Fora Ponta</td>
                        <td>${erexForaPonta}</td>
                        <td>${tefp}</td>
                        <td>${vpefp}</td>
                      </tr>
                      <tr>
                        <td>DEREX</td>
                        <td>${derex}</td>
                        <td>${tderex}</td>
                        <td>R$ ${vpderex}</td>
                      </tr>
                      <tr>
                        <td>Adicional de Bandeira</td>
                        <td></td>
                        <td></td>
                        <td>R$ ${bandeira}</td>
                      </tr>
                      <tr>
                        <td>Cip - Iluminação Publica</td>
                        <td></td>
                        <td></td>
                        <td>R$ ${iluminacaoip}</td>
                      </tr>
                      <tr>
                        <td>Desconto na conta</td>
                        <td></td>
                        <td></td>
                        <td>R$ ${desconto}</td>
                      </tr>
                      <tr>
                        <td>Total Aproximadamente a pagar</td>
                        <td></td>
                        <td></td>
                        <td>R$ ${valorapagar}</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                    `;

                    $('#search_content').append( content ); 

                });
            }
        });

    });

});