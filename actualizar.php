<?php
include ("conexion.php");
$con = conectar();
$id =$_GET['id'];
$sql = "SELECT * FROM alumno WHERE code = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class= "container mt-5">
        <form action="update.php" method = "POST">
            <input type="hidden" name= "txtCode" value= "<?php echo $row ['code']?>">
            <input type="text" name= "txtCedula" value= "<?php echo $row ['cedula']?>">
            <input type="text" name= "txtNombre" value= "<?php echo $row ['nombre']?>">
            <input type="text" name= "txtApellido" value= "<?php echo $row ['apellido']?>">
            <input type="text" class= "btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>