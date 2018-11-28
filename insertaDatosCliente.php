<?php

include ('m1sFunc10nes.php');

$nombreC = $_POST['nombreC'];
$apellidosC = $_POST['apellidosC'];
$dniC = $_POST['dniC'];
$direccionC = $_POST['direccionC'];
$cpC = $_POST['cpC'];
$telefonoC = $_POST['telefonoC'];

$mysql = conectaBBDD();
$resultadoQuery = $mysql->query("INSERT INTO cliente VALUES ('$dniC','$nombreC', '$apellidosC', '$direccionC', $cpC, $telefonoC )");
?>
