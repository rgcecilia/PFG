<?php
session_start();
include("../sesion/conexion.php");
include("../sesion/controles.php");
$_SESSION['tab'] = "#datos-tab";
if(isset($_POST['modificar'])){
    $direccion = $_POST['direccion'];
    $url_direccion = $_POST['url_direccion'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $url_linkedin = $_POST['url_linkedin'];
    $url_facebook = $_POST['url_facebook'];
    $url_instagram = $_POST['url_instagram']; 
    $consulta = "update datos set direccion='".$direccion."', url_direccion='".$url_direccion."', email='".$email."', telefono='".$telefono."', url_linkedin='".$url_linkedin."', url_facebook='".$url_facebook."', url_instagram='".$url_instagram."';";
    $resultado=mysqli_query($con, $consulta);
    $_SESSION['mensaje'] = "Datos Actualizados";
    mysqli_close($con);
    header("refresh:0, url=../administradores.php"); 
    
}else{
    $_SESSION['mensaje'] = "Datos no actualizados";
    header("refresh:0, url=../administradores.php"); 
}
?>
