<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);

insertar($conexion);

function consulta($conexion){
    if(isset($_POST['guardar'])){
        insertar($conexion);
    }
    if (isset($_POST['eliminar'])){
        eliminar($conexion);
    }
}

function insertar($conexion){
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $query = "INSERT INTO persona(idpersona, rut, nombre, apellido, edad)
             VALUES (0, '$rut','$nombre', '$apellido','$edad')";

             $conexion->query($query);
             $conexion->close();
}

function eliminar($conexion){
    $idpersona = $_POST('idpersona');

    $query = "DELETE FROM persona WHERE idpersona='$idpersona";

    $conexion->query($query);
    $conexion->close();
}

?>