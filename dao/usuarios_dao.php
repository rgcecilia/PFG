<?php
session_start();
include("../sesion/conexion.php");
include("../sesion/controles.php");
$_SESSION['tab'] = "#usuarios-tab"; 
if (isset($_POST['crear']) && !empty($_POST['dni']) && !empty($_POST['nombre']) && !empty($_POST['password'])) {
    if(strlen($_POST['dni']) !=9) {
        $_SESSION['mensaje'] = "El dni ha de tener 9 digitos";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php");   
    }
    if(5 > strlen($_POST['password'])) {
        $_SESSION['mensaje'] = "La contraseña ha de tener 5 digitos al menos";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php");   
    
    }else{
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $consulta = "select dni from usuario where dni='$dni'";
        $resultado = mysqli_query($con, $consulta);
        $filas = mysqli_num_rows($resultado);      
        if ($filas == 1) {
            $_SESSION['mensaje'] = "Ya existe un usuario con este DNI";
            mysqli_close($con);
            header("refresh:0, url=../administradores.php");                  
        } else {
            $consulta = "insert into usuario values('$dni', '$nombre', $password)";
            $resultado = mysqli_query($con, $consulta);
            $_SESSION['mensaje'] = "Usuario creado correctamente";
            mysqli_close($con);
            header("refresh:0, url=../administradores.php");    
        }
    }
}else if(isset($_POST['crear']) || empty($_POST['dni']) || empty($_POST['nombre']) || empty($_POST['password'])){   
    $_SESSION['mensaje'] = "Faltan Datos";
    header("refresh:0, url=../administradores.php");   
}
if(isset($_POST['eliminar']) && !empty($_POST['dni'])){
    $dni = $_POST['dni'];
    $consulta = "delete from usuario where dni='$dni'";
    $resultado = mysqli_query($con, $consulta);
    $_SESSION['mensaje'] = "Usuario Eliminado";
    mysqli_close($con);
    header("location=../administradores.php"); 
}
if (isset($_POST['modificar']) && !empty($_POST['dni'])){
    $dni = $_POST['dni'];
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $consulta = "update usuario set nombre='$nombre' where dni='$dni'";
        $resultado = mysqli_query($con, $consulta);
    }
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        $consulta = "update usuario set pass='$password' where dni='$dni'";
        $resultado = mysqli_query($con, $consulta);
    }
    $_SESSION['mensaje'] = "Usuario Modificado";
    mysqli_close($con);
    header("refresh:0, url=../administradores.php");   
}
?>