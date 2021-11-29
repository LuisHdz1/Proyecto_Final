<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div style="text-align: center; margin-top: 6%;">
    <div class="col-md-3" style="background: lavender; border-radius: 10px; padding: 20px; display: inline-block;">
        <h1>Animales</h1>
        <form action="insertar.php" method="POST">
            <p>Al terminar el registro reinicie la página</p>
            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
            <input type="text" class="form-control mb-3" name="Raza" placeholder="Raza">
            <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad">
            <input type="text" class="form-control mb-3" name="Motivo" placeholder="Motivo">
            <input type="text" class="form-control mb-3" name="Alergias" placeholder="Alergias">
            <input type="text" class="form-control mb-3" name="Peso" placeholder="Peso">
            <input type="text" class="form-control mb-3" name="Temperatura" placeholder="Temperatura">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>