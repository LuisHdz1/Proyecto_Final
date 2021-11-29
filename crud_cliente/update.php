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


$sql="UPDATE cliente SET  ApellidoPaterno='$apellidop',ApellidoMaterno='$apellidom',NumerodeTelefono='$telefono',CorreoElectronico='$correo',Sexo='$sexo',Direccion='$direccion' WHERE Nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>