<?php

include('conec.php');

//print_r($_POST);

if(isset($_POST['enviar'])){

    $usuario = $_POST ['usuario'];
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $tel = $_POST['tel'];
    $correo = $_POST ['correo'];
    $contra = $_POST ['contra'];

    $insertarExamen = "INSERT INTO examen (usuario, nombre, apellidop, apellidom, tel, correo, contra) 
    VALUE ('$usuario', '$nombre', '$apellidop', '$apellidom', '$tel', '$correo', '$contra');";

    $resultado = mysqli_query($conexion,$insertarExamen);

    if(!$resultado){
        echo '<script>alert("Los datos no se insertaron")</script>';
    }else{
        echo '<script>alert("Los datos se insertaron")</script>';
    }
}

header('Location: examen.php');
?>