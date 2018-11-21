<?php
?>


<div class="row">
      <div class="col-md-1"></div>
         <div class="col-md-4">
            <br>
            <div class="datosMascota nMascota"></div>
            <br>
            <div class="datosMascota pApellidos"></div>
            <br>
            <div class="datosMascota pDNI"></div>
            <br>
            <div class="datosMascota pDir"></div>
            <br>
            <div class="datosMascota pCP"></div>
            <br>
            <div class="datosMascota pTLFN"></div>
        </div>
        <div class="col-md-6">
            <br>
            <div class="datosInsertados">Nombre</div>
            <br>
            <div class="datosInsertados">Apellidos</div>
            <br>
            <div class="datosInsertados">DNI</div>
            <br>
            <div class="datosInsertados">Dirección</div>
            <br>
            <div class="datosInsertados">CP</div>
            <br>
            <div class="datosInsertados">Teléfono</div>
        </div>
         <div class="col-1"></div>
    </div>
<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>
<br>
  
<div class="row">
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="">Buscar Dueño</button>
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="nuevoDueno()">Nuevo Dueño</button>
    </div>
</div>

<script>
  function nuevoDueno(){
          $("#pgPrincipal").load("NuevoDueno.php");
      }

</script>
