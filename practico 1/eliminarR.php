<?php

include_once('conexion.php');
//actualizar registros


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];



$sql = "DELETE FROM usuarios WHERE id = '$id'";


if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro eliminado correctamente";
} else {

    $conexion->error;
};

$conexion->close();

header('Location:listar.php');
