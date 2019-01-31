<?php
session_start();
include("../sesion/conexion.php");
include("../sesion/controles.php");
$_SESSION['tab'] = "#contenido-tab";
if(isset($_POST['inicio'])){ 
    if($_FILES['imagen']['size']<1) { 
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $consulta="update datos set titulo_inicio='".$titulo."', txt_inicio='".$texto."';";
        $resultado=mysqli_query($con, $consulta);
        $_SESSION['mensaje'] = "Inicio Actualizado";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php"); 
    }
   if($_FILES['imagen']['size']>1){
        $nombre_img = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];
        if (($nombre_img == !NULL) && ($_FILES['imageninicio']['size'] <= 1500000)){
            //indicamos los formatos que permitimos subir a nuestro servidor
            if (($_FILES["imagen"]["type"] == "image/jpeg") || ($_FILES["imagen"]["type"] == "image/jpg") || ($_FILES["imagen"]["type"] == "image/png")){        
                $uploads_dir = "/kunden/homepages/4/d769464405/htdocs/img/inicio";
                move_uploaded_file($_FILES['imagen']['tmp_name'],"$uploads_dir/$nombre_img");
            }else{
                $_SESSION['mensaje'] = "Formato de imagen de inicio invalido";
                mysqli_close($con);
                header("refresh:0, url=../administradores.php"); 
            }
        } 
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $consulta="update datos set titulo_inicio='".$titulo."', txt_inicio='".$texto."', img_inicio='img/inicio/".$nombre_img."';";
        $resultado=mysqli_query($con, $consulta);
        $_SESSION['mensaje'] = "Inicio Actualizado con imagen";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php"); 
    }
}
if(isset($_POST['nosotros'])){
    if($_FILES['imagen']['size']<1) { 
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $consulta="update datos set titulo_nosotros='".$titulo."', txt_nosotros='".$texto."';";
        $resultado=mysqli_query($con, $consulta);
        $_SESSION['mensaje'] = "Sobre Nosotros Actualizado";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php"); 
    }else{
        $nombre_img = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];
        if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 1500000)){
            if (($_FILES["imagen"]["type"] == "image/jpeg") || ($_FILES["imagen"]["type"] == "image/jpg") || ($_FILES["imagen"]["type"] == "image/png")){        
                $uploads_dir = "/kunden/homepages/4/d769464405/htdocs/img/sobre";
                move_uploaded_file($_FILES['imagen']['tmp_name'],"$uploads_dir/$nombre_img");
            }else{
                $_SESSION['mensaje'] = "Formato de imagen de seccion nosotros invalido";
                mysqli_close($con);
                header("refresh:0, url=../administradores.php"); 
            }
        } 
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $consulta="update datos set titulo_nosotros='".$titulo."', txt_nosotros='".$texto."', img_nosotros='img/sobre/".$nombre_img."';";
        $resultado=mysqli_query($con, $consulta);
        $_SESSION['mensaje'] = "Seccion Sobre Nosotros Actualizada con imagen";
        mysqli_close($con);
        header("refresh:0, url=../administradores.php"); 
    }   
}
?>