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


$sql="INSERT INTO articulos(`Nombre`, `id`, `Precio`, `Existencias`, `Proveedor`, `Departamento`, `Descripcion`) VALUES('$nombre','$id','$precio','$existencias','$proveedor','$departamento','$descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>