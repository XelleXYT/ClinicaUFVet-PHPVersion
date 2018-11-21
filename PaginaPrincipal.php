<?php
?>
<div id="menu" class="row">
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary botonMascota" id="boton1" onclick="cargaMascota()"></button>
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary botonCliente" id="boton1" onclick="cargaDueno()"></button>
    </div>  
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary botonBuscar" id="boton1" onclick=""></button>
    </div>
</div>
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