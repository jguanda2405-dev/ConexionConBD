<?php

include_once('assets/php/conexion.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <div class="container my-4">
    <h2>Usuarios</h2>

    <div class="container-fluid">
      <div class="row">
        <div class="col-7">
          1 of 2
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $Q = "SELECT * FROM usuarios"; 
              $rsQ = mysqli_query($conn,$Q) or die("Error: " . mysqli_error($conn)); 

              while ($fila = mysqli_fetch_array($rsQ)) {
              ?>
                <tr>
                  <th scope="row"><?php echo $fila['idUsuario']; ?></th>
                  <td><?php echo $fila['nombre']; ?></td>
                  <td><?php echo $fila['apellido']; ?></td>
                  <td><?php echo $fila['correo']; ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>

        <div class="col-5">
          2 of 2
          <form action="" method="post">
            <div class="input-group mb-3">
              <span class="input-group-text" id="addon-nombre">Nombre</span>
              <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-nombre">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="addon-apellido">Apellido</span>
              <input type="text" class="form-control" name="txtApellido" placeholder="Apellido" aria-label="Apellido" aria-describedby="addon-apellido">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="addon-correo">Correo</span>
              <input type="email" class="form-control" name="txtCorreo" placeholder="Correo" aria-label="Correo" aria-describedby="addon-correo">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="addon-clave">Clave</span>
              <input type="password" class="form-control" name="txtPassword" placeholder="Clave" aria-label="Clave" aria-describedby="addon-clave">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/Bmn