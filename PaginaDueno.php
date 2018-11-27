<?php

   include ('m1sFunc10nes.php');
 
 $numeroDNI=$_POST['numeroDNI'];
 
 //$numeroDNI='00000001C';
 
 $mysql= conectaBBDD();
 $resultadoQuery=$mysql->query("SELECT * FROM cliente WHERE dni='$numeroDNI'");
 $numCliente = $resultadoQuery->num_rows;
 
 echo $numCliente;

?>


<div class="row">
      <div class="col-md-1"></div>
         <div class="col-md-4">
            <br>
            <div class="datosMascota nMascota"></div>
            <br>
        </div>
        <div class="col-md-6">
            <br>
            <div class="datosInsertados">Nombre</div>
            <br>
        </div>
       <div class="col-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota pApellidos"></div>
            <br>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">Apellidos</div>
            <br>
        </div>
       <div class="col-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota pDNI"></div>
            <br>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">DNI</div>
            <br>
        </div>
       <div class="col-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota pDir"></div>
            <br>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">Dirección</div>
            <br>
        </div>
       <div class="col-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota pCP"></div>
            <br>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">CP</div>
            <br>
        </div>
       <div class="col-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
         <div class="col-md-4">
            <div class="datosMascota pTLFN"></div>
        </div>
        <div class="col-md-6">
            <div class="datosInsertados">Teléfono</div>
        </div>
       <div class="col-1"></div>
</div>


<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>
<br>
  
<div class="row menu">
    <div class="col-1"></div>
    <div class="col-md-4">
        <button type="submit" class="btn editarCliente" id="boton1" onclick="nuevoDueno()"></button>
    </div>
    <div class="col-2"></div>
    <div class="col-md-4">
        <button type="submit" class="btn nuevoCliente" id="boton1" onclick="nuevoDueno()"></button>
    </div>
    <div class="col-1"></div>
</div>

<script>
  function nuevoDueno(){
          $("#pgPrincipal").load("NuevoDueno.php");
      }

</script>
