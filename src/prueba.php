<?php
  function accion(){
    echo "accion";
  }
  function acciondos(){
    echo 19;
  }
?>

<input type="submit" name="" value="Buscar" id="boton1" onclick = "funcion();">
<script>
  function funcion(){
 const btn = document.querySelector("#boton1");
 
 btn.addEventListener('click',mostrarEmpresas);
 function mostrarEmpresas(){
  
 }
  }
</script>