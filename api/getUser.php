<?php 

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Req ");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require "conexion.php";

// Pruebas para obtener los usuarios
// $usuario = "matthias";

    $sql = "SELECT * FROM usuarios";
    $query = $mysqli->query($sql);

    $datos = array();

    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
}
    echo json_encode($datos);


?>