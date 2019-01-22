<?php     
    session_start();
    include("conexion.php");
    if(empty($_POST['dni']) || empty($_POST['password'])){
       $_SESSION['mensaje'] = "Debes Rellenar Todos los datos de acceso";
       header("Location:../login.php");
    }
    $identificador = $_POST['dni'];
    $password = $_POST['password'];
    $consulta = "select dni, nombre, pass from usuario where dni ='$identificador' and pass ='$password'";
    $resultado = mysqli_query($con, $consulta);
    $num_filas = mysqli_num_rows($resultado);

    if($num_filas == 0){
        $_SESSION['mensaje'] = "No existe ningun usuario con esas credenciales";
        header("Location:../login.php");
    }else{       
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        $_SESSION['user']= $dni;
        $_SESSION['name']= $nombre;
        $_SESSION['mensaje'] = "";
        $_SESSION['tab']= "#bienvenido-tab";
        header("Location:../administradores.php");
    }
    mysqli_close($con);
?>
