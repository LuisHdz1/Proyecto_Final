<?php

include("conexion.php");
$con=conectar();

$id=$_POST['Nombre'];
$apellidop=$_POST['ApellidoPaterno'];
$apellidom=$_POST['ApellidoMaterno'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['NumerodeTelefono'];
$sexo=$_POST['Sexo'];
$numempleado=$_POST['NumerodeEmpleado'];

$sql="UPDATE empleado SET  ApellidoPaterno='$apellidop',ApellidoMaterno='$apellidom',Direccion='$direccion',NumerodeTelefono='$telefono',Sexo='$sexo',NumerodeEmpleado='$numempleado' WHERE Nombre='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>