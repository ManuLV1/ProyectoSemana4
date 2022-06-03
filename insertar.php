<?php
include ("conexion.php");
$con = conectar();
$code = $_POST['txtCode'];
$cedula = $_POST['txtCedula'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$sql = "INSERT INTO alumno VALUES ($code, $cedula, '$nombre', '$apellido')";
$query = mysqli_query($con, $sql);
if ($query) {
    Header("Location: index.php");
}else{}
?>