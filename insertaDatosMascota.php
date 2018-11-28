<?php
include ('m1sFunc10nes.php');

  $nombreM = $_POST['nombreM'];
  $chipM = $_POST['chipM'];
  $sexoM = $_POST['sexoM'];
  $especieM = $_POST['especieM'];
  $razaM = $_POST['razaM'];
  $nacimientoM = $_POST['nacimientoM'];
  $clienteM = $_POST['clienteM'];

  $mysql = conectaBBDD();
  $resultadoQuery = $mysql->query("INSERT INTO mascota VALUES ('$chipM','$nombreM',$sexoM,'$especieM','$razaM','$nacimientoM','$clienteM');");

?>
