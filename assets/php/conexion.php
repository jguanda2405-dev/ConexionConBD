<?php

$host = "localhost"; 
$user = "root";
$pass = "";
$db   = "guanda";

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    die("Error de conexion: " . mysqli_connect_error());
} else {
    //echo "Conectado"; 
}

?>