<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellidop=$_POST['ApellidoPaterno'];
$apellidom=$_POST['ApellidoMaterno'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['NumerodeTelefono'];
$sexo=$_POST['Sexo'];
$numempleado=$_POST['NumerodeEmpleado'];


$sql="INSERT INTO empleado(`Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Direccion`, `NumerodeTelefono`, `Sexo`, `NumerodeEmpleado`) VALUES('$nombre','$apellidop','$apellidom','$direccion','$telefono','$sexo','$numempleado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>