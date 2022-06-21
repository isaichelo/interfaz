<?php

include('../conec.php');

$codigoUsuario = $_GET['id'];

$eliminarUsuario = "CALL sp_eliminarUsuario('$codigoUsuario')";

$resultado = mysqli_query($conexion, $eliminarUsuario);

header('Location: ../examen.php');

?>