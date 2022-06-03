<?php
include ("conexion.php");
$con = conectar();
$code = $_POST['code'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sql = "UPDATE alumno SET cedula= '$cedula' nombre= '$nombre' apellido= '$apellido' WHERE code= $code";
$query = mysqli_query($con, $sql);
if ($query) {
    Header("Location: index.php");
}else{}
?>