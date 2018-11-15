<?php
?>
  <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="datosMascota">Nombre</div>
            <br>
            <div class="datosMascota">Apellidos</div>
            <br>
            <div class="datosMascota">DNI</div>
            <br>
            <div class="datosMascota">Dirección</div>
            <br>
            <div class="datosMascota">CP</div>
            <br>
            <div class="datosMascota">Teléfono</div>
        </div>
        <div class="col-2"></div>
  </div>
<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="">Buscar Dueño</button>
    </div>
    <div class="col-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="nuevoDueno()">Nuevo Dueño</button>
    </div>
</div>

<script>
  function nuevoDueno(){
          $("#pgPrincipal").load("NuevoDueno.php");
      }

</script>
