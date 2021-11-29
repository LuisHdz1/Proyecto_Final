<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$id=$_POST['id'];
$precio=$_POST['Precio'];
$existencias=$_POST['Existencias'];
$proveedor=$_POST['Proveedor'];
$departamento=$_POST['Departamento'];
$descripcion=$_POST['Descripcion'];

$sql="UPDATE articulos SET  id='$id',Precio='$precio',Existencias='$existencias',Proveedor='$proveedor',Departamento='$departamento',Descripcion='$descripcion' WHERE Nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>