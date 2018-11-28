<?php
include ('m1sFunc10nes.php');

$numeroDNI = $_POST['numeroDNI'];

//$numeroDNI='00000001C';

$mysql = conectaBBDD();
$resultadoQuery = $mysql->query("SELECT * FROM cliente WHERE dni='$numeroDNI'");
$numCliente = $resultadoQuery->num_rows;

echo $numCliente;

$listaCliente = array();

for ($i = 0; $i < $numCliente; $i++) {
    $rAux = $resultadoQuery->fetch_array();
    $listaCliente[0] = $rAux['dni'];
    $listaCliente[1] = $rAux['nombre'];
    $listaCliente[2] = $rAux['apellido'];
    $listaCliente[3] = $rAux['direccion'];
    $listaCliente[4] = $rAux['cp'];
    $listaCliente[5] = $rAux['telefono'];

    print_r($listaCliente);
}
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
        <div class="datosInsertados"><p id="cNombre" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="cApellido" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="cDNI" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="cDireccion" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="cCP" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="cTelefono" style="text-align:center;"></p></div>
    </div>
    <div class="col-1"></div>
</div>


<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>
<br>

<div class="row menu">
    <div class="col-1"></div>
    <div class="col-md-4">
        <button type="submit" class="btn editarCliente" id="boton1" onclick="editarCliente()"></button>
    </div>
    <div class="col-2"></div>
    <div class="col-md-4">
        <button type="submit" class="btn nuevoCliente" id="boton1" onclick="nuevoDueno()"></button>
    </div>
    <div class="col-1"></div>
</div>

<script>

    var listaCliente =<?php echo json_encode($listaCliente) ?>

    console.log(listaCliente);


    rellenaDatosC();


    function nuevoDueno() {
        $("#pgPrincipal").load("NuevoDueno.php");
    }

    function rellenaDatosC() {
        $('#cNombre').text(listaCliente[1]);
        $('#cApellido').text(listaCliente[2]);
        $('#cDNI').text(listaCliente[0]);
        $('#cDireccion').text(listaCliente[3]);
        $('#cCP').text(listaCliente[4]);
        $('#cTelefono').text(listaCliente[5]);

    }

    function editarCliente() {
        var arrayCliente = listaCliente;

        $("#pgPrincipal").load("NuevoDueno.php", {
            datosCliente: arrayCliente,
        });
    }



</script>
