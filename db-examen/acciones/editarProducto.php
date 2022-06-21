<?php

include('../conec.php');

$codigoProducto = $_POST['id'];
$nombre = $_POST['N'];
$precio = $_POST['P'];
$fabricante = $_POST['F'];

print_r($_GET);

$editarProducto = "CALL sp_editarProducto('$nombre', '$precio', '$fabricante', '$codigoProducto')";

/* UPDATE producto SET nombre = '$nombre', precio = '$precio', codigo_fabricante = '$fabricante'  WHERE codigo = '$codigoProducto */

$resultado = mysqli_query($conexion, $editarProducto);

header('Location: ../productos.php');

?>
