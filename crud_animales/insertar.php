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

$sql="INSERT INTO animales(`Nombre`, `Raza`, `Edad`, `Motivo`, `Alergias`,`Peso`,`Temperatura`) VALUES('$nombre','$raza','$edad','$motivo','$alergias','$peso','$temperatura')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>