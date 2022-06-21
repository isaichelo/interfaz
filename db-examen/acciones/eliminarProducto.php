<?php

include('../conec.php');

$codigoProducto = $_GET['id'];

$eliminarProducto = "CALL sp_eliminarProducto('$codigoProducto')";

$resultado = mysqli_query($conexion, $eliminarProducto);

header('Location: ../productos.php');

?>

