<?php
?>


    <div class="row">
        <div class="col-md-2">
          <div id="fotoMascota">Aquí va la foto de la mascota</div>
          <br>     
        </div>
        <div class="col-md-8">
            <div id="nombreMascota">Aquí va el nombre de la mascota</div>
            <br>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        
         <div class="col-md-6">
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
            <div class="datosMascota">Aquí va el chip</div>
            <br>
            <div class="datosMascota">Sexo</div>
            <br>
            <div class="datosMascota">Especie</div>
            <br>
            <div class="datosMascota">Raza</div>
            <br>
            <div class="datosMascota">Fecha Nacimiento</div>
            <br>
            <div class="datosMascota">Dueño</div>
        </div>

    </div>
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
