<?php

include ('conec.php');

$email=$_POST["email"];
$password=$_POST["contra"];

$consulta = "SELECT * FROM examen WHERE Correo = '$email' "; 
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($resultado);

$respuesta = ''; //variable de comprobación


if(sizeof($fila) > 0){
    if($fila["contra"] == $password){
        $respuesta = 1;
    }else{
        $respuesta = "La contraseña no coincide";
    }
}else{
    $respuesta = "Email no encontrado";
}

if($respuesta ==1){

    header('location: dashboard.php');

}else{
    header('location: index.html');
}

?>
