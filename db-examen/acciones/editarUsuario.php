<?php

include('../conec.php');

print_r($_POST);

$codigo = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidop =$_POST['apellidop'];
$apellidom =$_POST['apellidom'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$editarUsuario ="CALL sp_editarusuariobueno('$codigo','$nombre','$apellidop','$apellidom ','$tel','$correo','$usuario','$contra')";


/*"UPDATE examen 
SET nombre = '$nombre', apellidop = '$apellidop', apellidom = '$apellidom', tel = '$tel', correo = '$correo', usuario = '$usuario', contra = '$contra' 
WHERE codigo = '$codigo';";*/

$resultado = mysqli_query($conexion, $editarUsuario);

header('Location: ../examen.php');

?>