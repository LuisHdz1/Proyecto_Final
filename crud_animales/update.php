<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$raza=$_POST['Raza'];
$edad=$_POST['Edad'];
$motivo=$_POST['Motivo'];
$alergias=$_POST['Alergias'];
$peso=$_POST['Peso'];
$temperatura=$_POST['Temperatura'];

$sql="UPDATE animales SET  Raza='$raza',Edad='$edad',Motivo='$motivo',Alergias='$alergias',Peso='$peso',Temperatura='$temperatura' WHERE Nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>