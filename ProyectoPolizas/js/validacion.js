$('#nick').change(function(){
      $.post('ajax_validacion.php',{
          nick:$('#nick').val(),
          beforeSend: function(){
            $('.validacion').html("Ingresando al sistema");
          }
      },function(respuesta){
        $('.validacion').html(respuesta);
      });
    });
  $('#btn_guardar').hide();
$('#pass2').change(function(event){
    if($('#pass1').val() == $('#pass2').val()){
     swal('Exito','Acceso concedido','success');
    $('#btn_guardar').show();
    }else{
     swal('Error','ERROR Contraseñas NO coinciden','error');
     $('#btn_guardar').hide();
    }
});

$('.form').keypress(function(e){
    if(e.which == 13){
     return false;
     }
});
