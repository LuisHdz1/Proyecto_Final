<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articulos WHERE Nombre='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">
                                <input type="text" class="form-control mb-3" name="Existencias" placeholder="Existencias" value="<?php echo $row['Existencias']  ?>">
                                <input type="text" class="form-control mb-3" name="Proveedor" placeholder="Proveedor" value="<?php echo $row['Proveedor']  ?>">
                                <input type="text" class="form-control mb-3" name="Departamento" placeholder="Departamento" value="<?php echo $row['Departamento']  ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">

                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>