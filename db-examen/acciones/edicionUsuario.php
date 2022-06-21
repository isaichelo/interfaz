<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>Edicion Usuario</title>

</head>
<body>
    <?php
    include('../conec.php'); //Conexión a la db
      
    //consulta a la db
    $id=$_GET['id'];

    /* query */
    $consulta = "CALL sp_edicionusuario2 ('$id')"; 
    
    /* Consulta a la base de datos e insercion de query */
    $resultado = mysqli_query($conexion,$consulta); 

    /* Recorrido de registros */
    $fila = mysqli_fetch_array($resultado);
    ?>

      <form action="editarUsuario.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Editar el nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?php echo $fila ["nombre"] ?>" />
      <label class="form-label">Editar el apellido paterno</label>
      <input type="text" class="form-control" name="apellidop" value="<?php echo $fila ["apellidop"] ?>" />
      <label class="form-label">Editar el apellido materno</label>
      <input type="text" class="form-control" name="apellidom" value="<?php echo $fila ["apellidom"] ?>" />
      <label class="form-label">Editar el telefono</label>
      <input type="text" class="form-control" name="tel" value="<?php echo $fila ["tel"] ?>" />
      <label class="form-label">Editar el correo</label>
      <input type="email" class="form-control" name="correo" value="<?php echo $fila ["correo"] ?>" />
      <label class="form-label">Editar el usuario</label>
      <input type="text" class="form-control" name="usuario" value="<?php echo $fila ["usuario"] ?>" />
      <label class="form-label">Editar la contraseña</label>
      <input type="text" class="form-control" name="contra" value="<?php echo $fila ["contra"] ?>" />
    </div>
    <input type="hidden" name="id" value="<?php echo $fila["codigo"] ?> "/>

    <input type="submit" name="enviar" value="Insertar nombre" class="btn btn-primary" />

  </form>
</body>
</html>