<?php
$datos = $_POST['datosMascota'];
?>

<br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="datosMascota nMascota"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaNombreM" class="form-control" type="text" placeholder="Nombre">
        <br>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="datosMascota mChip"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaChip" class="form-control" type="text" placeholder="Chip">
        <br>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="datosMascota mSexo"></div>
        <br>
    </div>
    <div class="col-md-6">
        <input id="cajaSexo" class="form-control" type="text" placeholder="Sexo">
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
        <input id="cajaEspecie" class="form-control" type="text" placeholder="Especie">
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
        <input id="cajaRaza" class="form-control" type="text" placeholder="Raza">
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
        <input id="cajaFNacimiento" class="form-control" type="text" placeholder="Fecha Nacimiento">
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
        <input id="cajaDueno" class="form-control" type="text" placeholder="Dueño">
    </div>
    <div class="col-md-1"></div>
</div>

<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>
<br>

<div class="row menu">
    <div class="col-1"></div>
    <div class="col-md-4">
        <button type="submit" class="btn botonEditar" id="botonEditaM" onclick=""></button>
    </div>
    <div class="col-2"></div>
    <div class="col-md-4">
        <button type="submit" class="btn botonGuardar" id="boton1" onclick=""></button>
    </div>
    <div class="col-1"></div>
</div>

<script>
    var datos =<?php echo json_encode($datos) ?>

    rellenaDatosNM();

    function rellenaDatosNM() {
        cajaNombreM.value = datos[1];
        cajaChip.value = datos[0];
        cajaSexo.value = datos[2];
        cajaEspecie.value = datos[3];
        cajaRaza.value = datos[4];
        cajaFNacimiento.value = datos[5];
        cajaDueno.value = datos[6];
    }

    console.log(datos);
    //Estos datos los vamos a pasar para editar los datos a través de un query.
    $('#botonEditaM').click(function () {
        //Vamos a leer el contenido de la caja y guardarlo en una variable.
        var nombreM = $('#cajaNombreM').val();
        var chipM= $('#cajaChip').val();
        var sexoM= $('#cajaSexo').val();
        var especieM= $('#cajaEspecie').val();
        var razaM= $('#cajaRaza').val();
        var nacimientoM= $('#cajaFNacimiento').val();
        var clienteM= $('#cajaDueno').val();


        //Cargamos el archivo que vamos a leer para hacer la comprobación.
        $('#pgPrincipal').load("editaDatosMascota.php", {
            nombreM: nombreM,
            chipM: chipM,
            sexoM: sexoM,
            especieM: especieM,
            razaM: razaM,
            nacimientoM: nacimientoM,
            clienteM: clienteM,
        });

    });

</script>
