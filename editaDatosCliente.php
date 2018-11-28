<?php

include ('m1sFunc10nes.php');

$nombreC = $_POST['nombreC'];
$apellidosC = $_POST['apellidosC'];
$dniC = $_POST['dniC'];
$direccionC = $_POST['direccionC'];
$cpC = $_POST['cpC'];
$telefonoC = $_POST['telefonoC'];

$mysql = conectaBBDD();
$resultadoQuery = $mysql->query("UPDATE cliente SET dni= '$dniC', nombre= '$nombreC', apellido= '$apellidosC', direccion='$direccionC', cp=$cpC, telefono=$telefonoC WHERE dni='$dniC' ");
?>
