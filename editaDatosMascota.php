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
  $resultadoQuery = $mysql->query("UPDATE mascota SET nombre= '$nombreM', sexo=$sexoM, especie='$especieM', raza='$razaM', fecha_nacimiento='$nacimientoM', cliente='$clienteM' WHERE chip=$chipM ");
  
  

?>

