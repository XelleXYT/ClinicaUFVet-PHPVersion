<?php
include ('m1sFunc10nes.php');

$numeroChip = $_POST['numeroChip'];

//$numeroChip=1;

$mysql = conectaBBDD();
$resultadoQuery = $mysql->query("SELECT * FROM mascota WHERE chip=$numeroChip");
$numMascota = $resultadoQuery->num_rows;

$listaMascota = array();

for ($i = 0; $i < $numMascota; $i++) {
    $rAux = $resultadoQuery->fetch_array();
    $listaMascota[0] = $rAux['chip'];
    $listaMascota[1] = $rAux['nombre'];
    $listaMascota[2] = $rAux['sexo'];
    $listaMascota[3] = $rAux['especie'];
    $listaMascota[4] = $rAux['raza'];
    $listaMascota[5] = $rAux['fecha_nacimiento'];
    $listaMascota[6] = $rAux['cliente'];
}

// 
$resultadoQuery = $mysql->query("SELECT * FROM cita WHERE mascota = $numeroChip");
$numCitas = $resultadoQuery->num_rows;

$listaCitas = array();

for ($i = 0; $i < $numCitas; $i++) {
    $rAux = $resultadoQuery->fetch_array();
    $listaCitas[$i][0] = $rAux[0];
    $listaCitas[$i][1] = $rAux[1];
    $listaCitas[$i][2] = $rAux[2];
    $listaCitas[$i][3] = $rAux[3];
    $listaCitas[$i][4] = $rAux[4];
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
        <div id="nombreMascota"><br><br><p id="mNombre" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="chip" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="sexo" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="especie" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="raza" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="nacimiento" style="text-align:center;"></p></div>
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
        <div class="datosInsertados"><p id="propietario" style="text-align:center;"></p></div>
    </div>
    <div class="col-md-1"></div>
</div>
<br>
<br>

<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>

<div class="row">
    <div class="col-1"></div>
    <div id="citas" class="col-10" style="height: 400px">
        <div>Numero Cita: <span id="c_id"></span></div>
        <div>Fecha cita: <span id="c_fecha"></span></div>
        <div>Veterinario: <span id="c_veterinario"></span></div>
        <div>Descripción: <br/><span id="c_descripcion"></span></div>
        <div style="float: none; position: relative; top: 200px;">
        <div class="btn datosInsertados" onclick="anteriorCita()">Anterior</div>
        <div class="btn datosInsertados" onclick="siguienteCita()">Siguiente</div>
        </div>
    </div>
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
        <button type="submit" class="btn editarMascota" id="boton1" onclick="editarMascota()"></button>
    </div>
    <div class="col-2"></div>
    <div class="col-md-4">
        <button type="submit" class="btn nuevaMascota" id="boton1" onclick="nuevaMascota()"></button>
    </div>
    <div class="col-1"></div>
</div>


<script>

    var listaMascotas =<?php echo json_encode($listaMascota) ?>;
    var listaCitas =<?php echo json_encode($listaCitas) ?>;
    var numcita = 0;
    console.log(listaMascotas[1]);
    console.log(listaCitas[1]);

    if (listaMascotas.length > 0) {
        rellenaDatosM();
    }

    if (listaCitas.length > 0) {
        rellenaDatosC();
    }

    function nuevaMascota() {
        editaMascotaBoolean = false;
        $("#pgPrincipal").load("NuevaMascota.php");

    }

    function siguienteCita() {
        if (numcita + 1 <= listaCitas.length - 1) {
            numcita++;
        } else {
            numcita = 0;
        }
        rellenaDatosC();
    }
    
    function anteriorCita() {
        if (numcita - 1 >= 0) {
            numcita--;
        } else {
            numcita = listaCitas.length - 1;
        }
        rellenaDatosC();
    }

    function rellenaDatosM() {
        $('#chip').text(listaMascotas[0]);
        $('#mNombre').text(listaMascotas[1]);
        $('#sexo').text(listaMascotas[2]);
        $('#especie').text(listaMascotas[3]);
        $('#raza').text(listaMascotas[4]);
        $('#nacimiento').text(listaMascotas[5]);
        $('#propietario').text(listaMascotas[6]);
    }

    function rellenaDatosC() {
        $('#c_id').text(listaCitas[numcita][0]);
        $('#c_fecha').text(listaCitas[numcita][1]);
        $('#c_veterinario').text(listaCitas[numcita][4]);
        $('#c_descripcion').text(listaCitas[numcita][2]);
    }

    function editarMascota() {
        var arrayMascota = listaMascotas;

        $("#pgPrincipal").load("NuevaMascota.php", {
            datosMascota: arrayMascota,
        });

        editaMascotaBoolean = true;
    }

</script>
