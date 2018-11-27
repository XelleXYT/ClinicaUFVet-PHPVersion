<?php
include ('m1sFunc10nes.php');
    
    $numeroChip=$_POST['numeroChip'];
    
    //$numeroChip=1;
    
    $mysql= conectaBBDD();
    $resultadoQuery=$mysql->query("SELECT * FROM mascota WHERE chip=$numeroChip");
    $numMascota = $resultadoQuery->num_rows;
    
    echo $numMascota;
  
    
    $listaMascota = array();

for ($i = 0; $i < $listaMascota; $i++) {
    $rAux = $resultadoQuery->fetch_array();
    $listaMascota[$i][0] = $rAux['chip'];
    $listaMascota[$i][1] = $rAux['nombre'];
    $listaMascota[$i][2] = $rAux['sexo'];
    $listaMascota[$i][3] = $rAux['especie'];
    $listaMascota[$i][4] = $rAux['raza'];
    $listaMascota[$i][5] = $rAux['fecha_nacimiento'];
    $listaMascota[$i][6] = $rAux['cliente'];
}

?>


<br>
  <div class="row">
      <div class="col-1"></div>
        <div class="col-4">
            <div class="unaFoto"></div>
        </div>
        <div class="col-6">
            <br>
            <div id="nombreMascota">Aquí va el nombre de la mascota</div>
            <br>
        </div>
        <div class="col-1"></div>
  </div>
<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>

    <div class="row">
        <div class="col-md-1"></div>
         <div class="col-md-4">
            <br>
            <div class="datosMascota mChip"></div>
        </div>
        <div class="col-md-6">
            <br>
            <div class="datosInsertados">Aquí va el chip</div>
        </div>
        <div class="col-md-1"></div>
    </div>
<div class="row">
        <div class="col-md-1"></div>
         <div class="col-md-4">
            <br>
            <div class="datosMascota mSexo"></div>
            <br>           
        </div>
        <div class="col-md-6">
            <br>
            <div class="datosInsertados">Sexo</div>
            <br>
        </div>
        <div class="col-md-1"></div>
    </div>
<div class="row">
        <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota mEspecie"></div>
            <br>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">Especie</div>
            <br>
        </div>
        <div class="col-md-1"></div>
    </div>
<div class="row">
        <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota mRaza"></div>
            <br>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">Raza</div>
            <br>
        </div>
        <div class="col-md-1"></div>
    </div>
<div class="row">
        <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota fNac"></div>
            <br>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">Fecha Nacimiento</div>
            <br>
        </div>
        <div class="col-md-1"></div>
    </div>
<div class="row">
        <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota mProp"></div>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">Dueño</div>
        </div>
        <div class="col-md-1"></div>
    </div>
<br>
<br>

<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>

<div class="row">
    <div class="col-1"></div>
    <div id="citas" class="col-10">Lugar donde se insertan las citas.  </div>
    <div class="col-1"></div> 
</div>
<br>
<div class="row">
    <div class="col-1"></div>
    <div class="col-md-4">
        <button type="submit" class="btn borrarCita" id="boton1" onclick=""></button>
    </div>
    <div class="col-2"></div>
    <div class="col-md-4">
        <button type="submit" class="btn nuevaCita" id="boton1" onclick=""></button>
    </div>
    <div class="col-1"></div>
</div>
<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>
<br>

<div class="row menu">
    <div class="col-1"></div>
    <div class="col-md-4">
        <button type="submit" class="btn editarMascota" id="boton1" onclick=""></button>
    </div>
    <div class="col-2"></div>
    <div class="col-md-4">
        <button type="submit" class="btn nuevaMascota" id="boton1" onclick="nuevaMascota()"></button>
    </div>
    <div class="col-1"></div>
</div>


    <script>
    
      function nuevaMascota(){
          $("#pgPrincipal").load("NuevaMascota.php");
      }
    
    </script>
