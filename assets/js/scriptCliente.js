 //$('.modal_open').modal('show')
 $( ".btn-remover" ).click(function() {
    $("input[name=id_usuario]").val($(this).data('id'));
});

$( ".btn-alterar" ).click(function() {
    var user = $(this).data('user');
    $("#update_modal").find("input[name=login]").val(user.login);
    $("#update_modal").find("input[name=senha]").val(user.senha);
    $("#update_modal").find("input[name=perfil]").val(user.perfil);
    $("#update_modal").find("input[name=tarifa]").val(user.tarifa);
    $("#update_modal").find("input[name=id]").val(user.id);
    $("#update_modal").modal("show");
   //console.log(user)
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})