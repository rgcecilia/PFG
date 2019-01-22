<?php
session_start();
include("../sesion/conexion.php");
include("../sesion/controles.php");
$_SESSION['tab'] = "#servicios-tab";
if(isset($_POST['crear'])){     
    if($_FILES['imagen']['size']<1 || empty($_POST['titulo']) || empty($_POST['texto'])){
        $_SESSION['mensaje'] = "Faltan datos, servicio no creado";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php"); 
    }else{
        // Recibo los datos de la imagen
        $nombre_img = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];
        
        //Si existe imagen y tiene un tamaño correcto
        if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 1500000)){
            //indicamos los formatos que permitimos subir a nuestro servidor
            if (($_FILES["imagen"]["type"] == "image/jpeg") || ($_FILES["imagen"]["type"] == "image/jpg") || ($_FILES["imagen"]["type"] == "image/png")){        
                $uploads_dir = "C:xampp\htdocs\PFG\img\servicios";
                // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                move_uploaded_file($_FILES['imagen']['tmp_name'],"$uploads_dir/$nombre_img");
            }else{
                //si no cumple con el formato
                $_SESSION['mensaje'] = "Formato de imagen de servicio invalido";
                mysqli_close($con);
                header("refresh:0, url=../administradores.php"); 
            }
        }       
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $consulta="insert into servicios values (NULL,'img/servicios/".$nombre_img."','".$titulo."','".$texto."');";
        $resultado=mysqli_query($con, $consulta);
        $_SESSION['mensaje'] = "Nuevo Servicio Creado";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php");      
    }
}
if(isset($_POST['modificar'])){
    $id = $_POST['id'];   
    if($_FILES['imagen']['size']<1) {  
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $consulta="update servicios set txt_titulo='".$titulo."', txt_texto='".$texto."' where id =".$id.";";
        $resultado=mysqli_query($con, $consulta);
        $_SESSION['mensaje'] = "Servicio Actualizado";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php"); 
    }            
    if($_FILES['imagen']['size']>1){
        $nombre_img = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size']; 
        if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 1500000)){
            if (($_FILES["imagen"]["type"] == "image/jpeg") || ($_FILES["imagen"]["type"] == "image/jpg") || ($_FILES["imagen"]["type"] == "image/png")){        
                $uploads_dir = "C:xampp\htdocs\PFG\img\servicios";
                move_uploaded_file($_FILES['imagen']['tmp_name'],"$uploads_dir/$nombre_img");
            }else{
                $_SESSION['mensaje'] = "Formato de imagen de servicio invalido";
                mysqli_close($con);
                header("refresh:0, url=../administradores.php"); 
            }
        } 
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $consulta="update servicios set txt_titulo='".$titulo."', txt_texto='".$texto."', url_imagen='img/servicios/".$nombre_img."' where id =".$id.";";
        $resultado=mysqli_query($con, $consulta);
        $_SESSION['mensaje'] = "Servicio Actualizado";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php"); 
    }
}
if(isset($_POST['eliminar'])){
    $id = $_POST['id'];
    $consulta="delete from servicios where id =".$id.";";
    $resultado=mysqli_query($con, $consulta);
    $_SESSION['mensaje'] = "Servicio Eliminado";
    mysqli_close($con);
    header("refresh:0, url=../administradores.php");   
}

    

