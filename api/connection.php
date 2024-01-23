<?php
// variables de la conexion a la DB
$mysqli = new mysqli("localhot", "root", "", "pruebas");

//Comprobamos la conexion
if($mysqli->connect_errno) {
    die("Fallo la conexcion al servidor");
} else {
    // echo "Conexión exitosa";
}


?>