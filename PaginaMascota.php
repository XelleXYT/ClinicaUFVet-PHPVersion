<?php
?>

<br>
<br>
  <div class="row">
        <div class="col-3">
            <div id="aSaber">Foto</div>
        </div>
        <div class="col-8">
            <div id="nombreMascota">Aquí va el nombre de la mascota</div>
            <br>
        </div>
        <div class="col-1"></div>
  </div>

<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>

    <div class="row">
         <div class="col-md-4">
            <br>
            <div class="datosMascota mChip"></div>
            <br>
            <div class="datosMascota mSexo"></div>
            <br>
            <div class="datosMascota mEspecie"></div>
            <br>
            <div class="datosMascota mRaza"></div>
            <br>
            <div class="datosMascota fNac"></div>
            <br>
            <div class="datosMascota mProp"></div>
        </div>
        <div class="col-md-6">
            <br>
            <div class="datosInsertados">Aquí va el chip</div>
            <br>
            <div class="datosInsertados">Sexo</div>
            <br>
            <div class="datosInsertados">Especie</div>
            <br>
            <div class="datosInsertados">Raza</div>
            <br>
            <div class="datosInsertados">Fecha Nacimiento</div>
            <br>
            <div class="datosInsertados">Dueño</div>
        </div>
        <div class="col-2"></div>
    </div>
<br>
<br>

<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>

<div id="citas" class="row">
    
    Lugar donde se insertan las citas.
    
</div>
<div class="row">
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="">Buscar Mascota</button>
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary" id="boton1" onclick="nuevaMascota()">Nueva Mascota</button>
    </div>
</div>

    <script>
    
      function nuevaMascota(){
          $("#pgPrincipal").load("NuevaMascota.php");
      }
    
    </script>
