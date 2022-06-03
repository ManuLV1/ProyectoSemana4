<?php
include ('conexion.php');
$con = conectar();
$code_estudiante = $_GET['id']
$sql = "DELETE FROM alumno WHERE code ='$code'";
$mysql = mysqli_query($con, $sql);
if ($query) {
    Header("Location: index.php");
}else{}
?>