<?php

session_start(); // Inicia o continua la sesión del navegador en el servidor PHP

include('./m1sFunc10nes.php');

function limpiaPalabra($palabra) {
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, "´");
    $palabra = trim($palabra, '"');
    $palabra = trim($palabra, "(");
    $palabra = trim($palabra, ")");
    $palabra = trim($palabra, "&");
    $palabra = trim($palabra, ";");
    $palabra = trim($palabra, "<");
    $palabra = trim($palabra, ">");

    return $palabra;
}

$mysqli = conectaBBDD();

$name_input = $_POST['name_input'];
$pass_input = $_POST['pass_input'];

// Filtro basico contra Inyeccion SQL
$name_input = limpiaPalabra($name_input);
$pass_input = limpiaPalabra($pass_input);

//echo 'User: '.$name_input.' Password: '.$pass_input;
$resultadoQuery = $mysqli->query("SELECT * FROM veterinario WHERE dni = '$name_input' AND pass = '$pass_input'");

$numUsuarios = $resultadoQuery -> num_rows;

if ($numUsuarios > 0) {

    $r = $resultadoQuery->fetch_array();

    // Guarda el nombre de usuario en la variable de sesión nombreUsuario.
    $_SESSION['nombre'] = $name_input; 
    
    // Guarda el idUsuario de la base de datos en la variable de sesión idUsuario.
    $_SESSION['dni'] = $r['dni'];

    // Muestra la pantalla de la aplicación
    require 'PaginaPrincipal.php';
} else {
    // Muestra pantalla de error
    require 'index.php';
}

//$numPreguntas = $resultadoQuery->num_rows;
//
//for ($i = 0; $i < $numPreguntas; $i++) {
//    $r = $resultadoQuery->fetch_array();
//    echo $r['nombreUsuario'] . '<br/>';
//}
//echo $numPreguntas;
?>
