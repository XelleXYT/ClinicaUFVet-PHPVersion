<?php

function conectaBBDD() {
    require('./c0nf1g/c0nf1g.php');
    $mysqli = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bbdd);
    $mysqli->query("SET NAMES utf8");
    return $mysqli;
}
?>

