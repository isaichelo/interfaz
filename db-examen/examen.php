<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>Examen</title>
</head>

<body>
<?php
include('partials/nav.html');
?>
    <h3>Crea un perfil</h3>

    <form action="registroExamen.php" method="POST">

    <div class="mb-3">
            <label class="form-label">Ingresa el usuario</label>
            <input type="text" class="form-control" name="usuario" />
        </div>

        <div class="mb-3">
            <label class="form-label">Ingresa el nombre</label>
            <input type="text" class="form-control" name="nombre" />
        </div>

        <div class="mb-3">
            <label class="form-label">Ingresa el apellido paterno</label>
            <input type="text" class="form-control" name="apellidop" />
        </div>

        <div class="mb-3">
            <label class="form-label">Ingresa el apellido materno</label>
            <input type="text" class="form-control" name="apellidom" />
        </div>

        <div class="mb-3">
            <label class="form-label">Ingresa el telefono</label>
            <input type="number" class="form-control" name="tel" />
        </div>

        <div class="mb-3">
            <label class="form-label">Ingresa el correo</label>
            <input type="text" class="form-control" name="correo" />
        </div>


        <div class="mb-3">
            <label class="form-label">Ingresa la contraseña</label>
            <input type="text" class="form-control" name="contra" />
        </div>

        <button>
        <input type="submit" name="enviar" value="Insertar perfil" class="btn btn-primary" />
        </button>
    </form>
<!-- INICIO DE LA TABLA -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Eliminar</th>
                <th scope= "col">Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('conec.php'); //Conexión a la db
                //consulta a la db 
                $consulta = "CALL sp_mostrarUsuario"; 
                $resultado = mysqli_query($conexion,$consulta); 
                while($fila = mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?php echo $fila["codigo"] ?></td>
                <td><?php echo $fila["usuario"] ?></td>
                <th scope="row"><?php echo $fila["nombre"] ?></th>
                <td><?php echo $fila["apellidop"] ?></td>
                <td><?php echo $fila["apellidom"] ?></td>
                <td><?php echo $fila["tel"] ?></td>
                <td><?php echo $fila["correo"] ?></td>
                <td><?php echo $fila["contra"] ?></td>
                <!--Boton eliminar-->
                <td><a target="_self" href="acciones/eliminarUsuario.php?id=<?php echo $fila["codigo"] ?>"><i class="bi bi-trash text-danger"></i></td>
                <!-- Boton editar -->
                <td><a target="_self" href="acciones/edicionUsuario.php?id=<?php echo $fila["codigo"]?>"><i class="bi bi-pencil square text-primary"></i></td> 
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>