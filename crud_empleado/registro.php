<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div style="text-align: center; margin-top: 6%;">
    <div class="col-md-3" style="background: lavender; border-radius: 10px; padding: 20px; display: inline-block;">
        <h1>Empleado</h1>
        <form action="insertar.php" method="POST">
            <p>Al terminar el registro reinicie la página</p>
            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
            <input type="text" class="form-control mb-3" name="ApellidoPaterno" placeholder="Apellido Paterno">
            <input type="text" class="form-control mb-3" name="ApellidoMaterno" placeholder="Apellido Materno">
            <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
            <input type="text" class="form-control mb-3" name="NumerodeTelefono" placeholder="Numero de Telefono">
            <input type="text" class="form-control mb-3" name="Sexo" placeholder="Sexo">
            <input type="text" class="form-control mb-3" name="NumerodeEmpleado" placeholder="Numero de Empleado">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>