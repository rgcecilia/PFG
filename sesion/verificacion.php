<?php     
    session_start();
    include("conexion.php");
    if(empty($_POST['dni']) || empty($_POST['password'])){
       header("location:../login.php");
    }
    $identificador = $_POST['dni'];
    $password = $_POST['password'];
    $consulta = "select dni, nombre, pass from usuario where dni ='$identificador' and pass ='$password'";
    $resultado = mysqli_query($con, $consulta);
    $num_filas = mysqli_num_rows($resultado);

    if($num_filas == 0){
        header("location:../login.php");	
    }else{       
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        $_SESSION['user']= $dni;
        $_SESSION['name']= $nombre;
        $_SESSION['tab']= "#bienvenido";
        header("location:../administradores.php");
    }
    mysqli_close($con);
?>
