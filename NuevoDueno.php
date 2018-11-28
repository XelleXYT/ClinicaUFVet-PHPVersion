<?php
$datos = $_POST['datosCliente'];
?>

<br>
<div class="row">
    <div class="col-1"></div>
    <div class="col-md-4">
        <div class="datosMascota nMascota"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaNombre" class="form-control" type="text" placeholder="Nombre">
        <br>
    </div>
    <div class="col-1"></div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-md-4">
        <div class="datosMascota pApellidos"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaApellidos" class="form-control" type="text" placeholder="Apellidos">
        <br>
    </div>
    <div class="col-1"></div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-md-4">
        <div class="datosMascota pDNI"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaDNI" class="form-control" type="text" placeholder="DNI">
        <br>
    </div>
    <div class="col-1"></div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-md-4">
        <div class="datosMascota pDir"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaDir" class="form-control" type="text" placeholder="Dirección">
        <br>
    </div>
    <div class="col-1"></div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-md-4">
        <div class="datosMascota pCP"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaCP" class="form-control" type="text" placeholder="CP">
        <br>
    </div>
    <div class="col-1"></div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-md-4">
        <div class="datosMascota pTLFN"></div>
    </div>
    <div class="col-md-6">
        <input id="cajaTLFN" class="form-control" type="text" placeholder="Teléfono">
    </div>
    <div class="col-1"></div>
</div>

<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>
<br>
<div class="row menu">
    <div class="col-1"></div>
    <div class="col-md-4">
        <button type="submit" class="btn botonEditar" id="botonEditaC" onclick=""></button>
    </div>
    <div class="col-2"></div>
    <div class="col-md-4">
        <button type="submit" class="btn botonGuardar" id="botonInsertaC" onclick=""></button>
    </div>
    <div class="col-1"></div>
</div>

<script>
    var datos = new Array();

    if (editaClienteBoolean) {
        datos = <?php echo json_encode($datos) ?>;
        rellenaDatosNC();
    }

    function rellenaDatosNC() {
        cajaNombre.value = datos[1];
        cajaApellidos.value = datos[2];
        cajaDNI.value = datos[0];
        cajaDir.value = datos[3];
        cajaCP.value = datos[4];
        cajaTLFN.value = datos[5];
    }

    console.log(datos);

    $('#botonEditaC').click(function () {
        var nombreC = $('#cajaNombre').val();
        var apellidosC = $('#cajaApellidos').val();
        var dniC = $('#cajaDNI').val();
        var direccionC = $('#cajaDir').val();
        var cpC = $('#cajaCP').val();
        var telefonoC = $('#cajaTLFN').val();

        //Cargamos el archivo que vamos a leer para hacer la comprobación.
        $('#pgPrincipal').load("editaDatosCliente.php", {
            nombreC: nombreC,
            apellidosC: apellidosC,
            dniC: dniC,
            direccionC: direccionC,
            cpC: cpC,
            telefonoC: telefonoC,
        });

    });

    $('#botonInsertaC').click(function () {
        var nombreC = $('#cajaNombre').val();
        var apellidosC = $('#cajaApellidos').val();
        var dniC = $('#cajaDNI').val();
        var direccionC = $('#cajaDir').val();
        var cpC = $('#cajaCP').val();
        var telefonoC = $('#cajaTLFN').val();

        //Cargamos el archivo que vamos a leer para hacer la comprobación.
        $('#pgPrincipal').load("insertaDatosCliente.php", {
            nombreC: nombreC,
            apellidosC: apellidosC,
            dniC: dniC,
            direccionC: direccionC,
            cpC: cpC,
            telefonoC: telefonoC,
        });

    });



</script>

