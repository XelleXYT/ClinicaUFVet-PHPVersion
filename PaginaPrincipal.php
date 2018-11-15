<?php
?>
<div id="menu" class="row">
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="cargaMascota()">Mascota</button>
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="cargaDueno()">Dueño</button>
    </div>
    
</div>
<div>
    <div class="row">
        <div class="col-md-1"></div>
        <div id="pgPrincipal" class="col-10"></div>
        <div class="col-md-1"></div>
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