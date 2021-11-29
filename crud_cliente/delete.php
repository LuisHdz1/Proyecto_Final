<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM cliente  WHERE Nombre='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../empleado.php");
    }
?>
