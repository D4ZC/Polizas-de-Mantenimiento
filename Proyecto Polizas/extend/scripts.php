</main> <!--Cerrando etiqueta main abierta en el header-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
<script>
  $('.button-collpase').sideNav();
</script>

<script>

$('#buscar').keyup(function(event){
  var contenido = new RegExp($(this).val(), 'i');
  $('tr').hide();
  $('tr').filter(function(){
      return contenido.test($(this).text();
  }).show();
  $('.cabecera').attr('style','');
});

  $('.button-collpase').sideNav();
  $('select').material_select();
  
  function may(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value=obj;
  }
</script>
