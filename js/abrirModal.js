$(function(){
    $('#form').submit(function(){
        var data = $(this).serialize();
        $.post('consulta.php',data,function(respuesta){
             $('#IniciarSecion').modal('hide');
             $('#myModal').modal('open');
        });
        return false;
    });
});