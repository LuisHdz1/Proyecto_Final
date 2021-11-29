<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM empleado";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
    
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Direccion</th>
                                        <th>Numero de Telefono</th>
                                        <th>Sexo</th>
                                        <th>Numero de Empleado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['ApellidoPaterno']?></th>
                                                <th><?php  echo $row['ApellidoMaterno']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['NumerodeTelefono']?></th>
                                                <th><?php  echo $row['Sexo']?></th>
                                                <th><?php  echo $row['NumerodeEmpleado']?></th>
                                                <th><a href="crud_empleado/actualizar.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="crud_empleado/delete.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>