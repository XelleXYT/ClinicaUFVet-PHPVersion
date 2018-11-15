<?php
?>
<div id="menu" class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="cargaMascota()">Mascota</button>
    </div>
    <div class="col-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="cargaDueno()">Dueño</button>
    </div>
    
</div>
<div id="pgPrincipal">
    
</div>

<script>

   function cargaMascota(){
       $("#pgPrincipal").load("PaginaMascota.php");
   }
   
   function cargaDueno(){
       $("#pgPrincipal").load("PaginaDueno.php");
   }

</script>