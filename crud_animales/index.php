<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM animales";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Animales</title>
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
                                        <th>Nombre</th>
                                        <th>Raza</th>
                                        <th>Edad</th>
                                        <th>Motivo</th>
                                        <th>Alergias</th>
                                        <th>Peso</th>
                                        <th>Temperatura</th>
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
                                                <th><?php  echo $row['Raza']?></th>
                                                <th><?php  echo $row['Edad']?></th>
                                                <th><?php  echo $row['Motivo']?></th>
                                                <th><?php  echo $row['Alergias']?></th>
                                                <th><?php  echo $row['Peso']?></th>
                                                <th><?php  echo $row['Temperatura']?></th>
                                                <th><a href="crud_animales/actualizar.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="crud_animales/delete.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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