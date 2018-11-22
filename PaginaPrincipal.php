<?php
?>
<div id="menu" class="row">
    <div class="col-md-3">
        <br>
        <button type="submit" class="btn botonMascota" id="boton1" onclick="cargaMascota()"></button>
        <br>
    </div>
    <div class="col-1"></div>
    <div class="col-md-3">
        <br>
        <button type="submit" class="btn botonCliente" id="boton1" onclick="cargaDueno()"></button>
        <br>
    </div>  
    <div class="col-1"></div>
    <div class="col-md-3">
        <br>
        <button type="submit" class="btn botonBuscar" id="boton1" onclick=""></button>
        <br>
    </div>
</div>
<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>

<div>
    <div class="row">   
        <div id="pgPrincipal" class="col-12"></div>     
    </div>   
</div>

<script>

   function cargaMascota(){
       $("#pgPrincipal").load("PaginaMascota.php");
   }
   
   function cargaDueno(){
       $("#pgPrincipal").load("PaginaDueno.php");
   }

</script>