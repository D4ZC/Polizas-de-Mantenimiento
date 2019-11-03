</main> <!--Cerrando etiqueta main abierta en el header-->
<script src="/ProyectoPolizas/js/jquery.js"></script>
<script src="/ProyectoPolizas/js/materialize.min.js"></script>
<script src="/ProyectoPolizas/js/sweetalert2.min.js"></script>
<script>
  $('.button-collpase').sideNav();
  $('select').material_select();
function may(obj, id){
  obj = obj.toUpperCase();
  document.getElementById(id).value = obj;
}

$('#buscar').keyup(function(event){
var contenido = new RegExp($(this).val(), 'i');
$('tr').hide();
$('tr').filter(function(){
    return contenido.test($(this).text();
}).show();

$('.cabecera').attr('style', '');
});
});
</script>
