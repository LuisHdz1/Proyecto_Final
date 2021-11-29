<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellidop=$_POST['ApellidoPaterno'];
$apellidom=$_POST['ApellidoMaterno'];
$telefono=$_POST['NumerodeTelefono'];
$correo=$_POST['CorreoElectronico'];
$sexo=$_POST['Sexo'];
$direccion=$_POST['Direccion'];


$sql="INSERT INTO cliente(`Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `NumerodeTelefono`, `CorreoElectronico`, `Sexo`, `Direccion`) VALUES('$nombre','$apellidop','$apellidom','$telefono','$correo','$sexo','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>