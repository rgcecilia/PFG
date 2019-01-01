<?php

session_start();
include("conexion.php");
include("controles.php");

?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body id="administracion">
        <!-- Navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="logout.php">Salir</a>
                <button class="navbar-toggler navbar-toggler-right navbar-expand" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarResponsive">
                    <ul class="nav nav-tabs ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" id="bienvenido-tab" data-toggle="tab" href="#bienvenido" role="tab" aria-controls="bienvenido" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="usuarios-tab" data-toggle="tab" href="#usuarios" role="tab" aria-controls="usuarios" aria-selected="false">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contenido-tab" data-toggle="tab" href="#contenido" role="tab" aria-controls="contenido" aria-selected="false">Contenido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="servicios-tab" data-toggle="tab" href="#servicios" role="tab" aria-controls="servicios" aria-selected="false">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="servicios-tab" data-toggle="tab" href="#datos" role="tab" aria-controls="datos" aria-selected="false">Datos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active admin" id="bienvenido" role="tabpanel" aria-labelledby="bienvenido-tab">
                <div class="container">
                    <div class="text-center col-xl-12 col-lg-12">
                        <br/>
                        <h2>Bienvenido</h2>
                        <h3>Al panel de administracion de Ladrón de Guevara</h3>
                        <h3>Procuradores</h3>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade admin" id="usuarios" role="tabpanel" aria-labelledby="usuarios-tab">
                <div class="container">
                    <div class="row">
                        <div class="form-group col-xl-4 col-lg-4">
                            <form method='POST' action='usuarios_dao.php'>
                                <fieldset>
                                <legend class="text-center">Crear Usuario</legend>
                                </br>
                                <label for="dni">Dni:</label>
                                <input class="form-control" type='text' name='dni' maxlength='9' minlength='9' placeholder="Documento nacional de identidad" /> 
                                </br>
                                <label for="nombre">Nombre:</label>
                                <input class="form-control" type='text' name='nombre' maxlength='50' placeholder="Nombre..." /> 
                                </br>
                                <label for="password">Password:</label>
                                <input class="form-control" type='password' name='password' maxlength='50' placeholder="Contraseña..." />
                                <br/>
                                <input type="submit" name="crear" value="Crear" class="btn btn-sm btn-primary mx-auto text-center"/>
                                </fieldset>
                            </form>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4">
                            <form method='post' action='usuarios_dao.php'>
                                <fieldset>
                                <legend class="text-center">Eliminar Usuario</legend>
                                </br>
                                <label for="Usuario">Usuario:</label>
                                <select name='dni' class='form-control'>
                                    <option selected="true" disabled="disabled">Seleccion</option>
                                    <?php
                                    $consulta = "select dni, nombre from usuario";
                                    $res = mysqli_query($con, $consulta);
                                    while ($fila = mysqli_fetch_array($res)) {
                                        extract($fila);
                                        echo "<option value='$dni'>$nombre</option>";
                                    }
                                    ?>
                                </select>
                                </br>
                                <input type="submit" name="eliminar" value="Eliminar" class="btn btn-sm btn-danger mx-auto text-center"/>
                                </fieldset>
                            </form>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4">
                            <form method='post' action='usuarios_dao.php'>
                                <fieldset>
                                <legend class="text-center">Modificar Usuario</legend>
                                </br>
                                <label for="Usuario">Usuario:</label>
                                <select name='dni' class='form-control'>
                                    <option selected="true" disabled="disabled">Seleccion</option>
                                    <?php
                                    $consulta = "select dni, nombre from usuario";
                                    $res = mysqli_query($con, $consulta);
                                    while ($fila = mysqli_fetch_array($res)) {
                                        extract($fila);
                                        echo "<option value='$dni'>$nombre</option>";
                                    }
                                    ?>
                                </select>
                                </br>
                                <label for="nombre">Nombre:</label>
                                <input class='form-control' type='text' name='nombre' maxlength='50' placeholder="Nuevo nombre" />                               
                                </br>
                                <label for="password">Password:</label>
                                <input class='form-control' type='password' name='password' maxlength='50' placeholder="Nuevo pass" />
                                </br>
                                <input type="submit" name="modificar" value="Modificar" class="btn btn-sm btn-warning mx-auto text-center"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>             
            <div class="tab-pane fade admin" id="contenido" role="tabpanel" aria-labelledby="contenido-tab">
                <div class="container">
                    <h2 class="text-center">Contenido</h2>
                    <div class="row">
                        <div class='form-group col-xl-6 col-lg-6'>            
                            <form method='post' action='contenido_dao.php' enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="text-center">Inicio</legend>
                                        <label for="titulo">Titulo:</label>
                                        <input type="text" class="form-control" id="titulo" value="<?php echo "$titulo_inicio";?>" name="titulo">                  
                                        </br>
                                        <label for="texto">Texto:</label>
                                        <input type="text" class="form-control" id="texto" value="<?php echo "$txt_inicio";?>" name="texto"> 
                                        </br>
                                        <label for="imagen">Imagen:</label>
                                        <input type="file" class="form-control" id="imagen" name="imagen" size="30"/>
                                        </br>
                                        <input type="submit" name="inicio" value="Modificar Inicio" class="btn btn-sm btn-primary mx-auto text-center" type="button"/>
                                </fieldset>
                            </form>
                        </div>
                        <div class="form-group col-xl-6 col-lg-6">
                            <form method='post' action='contenido_dao.php' enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="text-center">Sobre nosotros</legend>
                                        <label for="titulo">Titulo:</label>
                                        <input type="text" class="form-control" id="titulo" value="<?php echo "$titulo_nosotros";?>" name="titulo">                  
                                        </br>
                                        <label for="texto">Texto:</label>
                                        <input type="text" class="form-control" id="texto" value="<?php echo "$txt_nosotros";?>" name="texto"> 
                                        </br>
                                        <label for="imagen">Imagen:</label>
                                        <input type="file" class="form-control" id="imagen" name="imagen" size="30"/>
                                        </br>
                                        <input type="submit" name="nosotros" value="Modificar Sobre Nosotros" class="btn btn-sm btn-primary mx-auto text-center" type="button"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade admin" id="servicios" role="tabpanel" aria-labelledby="servicios-tab">
                <div class="container">
                    <h2 class="text-center">Servicios</h2>
                    <div class="row">
                        <div class='form-group col-xl-6 col-lg-6'>
                            <form method='post' action='servicios_dao.php' enctype='multipart/form-data'>
                                <fieldset>
                                    <legend class='text-center'>Crear Servicio Nuevo</legend>
                                    <input type='hidden' value='servicios' name='seccion'>
                                    <label for='titulo'>Titulo:</label>
                                    <input type='text' class='form-control' id='titulo' name='titulo' maxlength='50'>                
                                    </br>
                                    <label for='texto'>Texto:</label>
                                    <input type='text' class='form-control' id='texto'name='texto' maxlength='500'>
                                    </br>
                                    <label for='imagen'>Imagen:</label>
                                    <input type='file' class='form-control' id='imagen' name='imagen' size='30'/>
                                    </br>
                                    <input type='submit' name='crear' value='crear' class='btn btn-sm btn-primary mx-auto text-center' type='button'/>
                                </fieldset>
                            </form>
                        </div>
                        <?php
                        $consulta = "select * from servicios;";
                        $resultado = mysqli_query($con, $consulta);
                        $num_filas = mysqli_num_rows($resultado);
                        while ($fila = mysqli_fetch_array($resultado)) {
                            extract($fila);
                        echo"<div class='form-group col-xl-6 col-lg-6'>";
                            echo"<form method='post' action='servicios_dao.php' enctype='multipart/form-data'>";
                                echo"<fieldset>";
                                    echo"<legend class='text-center'>Modificar Servicio</legend>";
                                        echo "<input type='hidden' value='$id' name='id'>";
                                        echo "<label for='titulo'>Titulo:</label>";
                                        echo"<input type='text' class='form-control' id='titulo' value='$txt_titulo' name='titulo' maxlength='50'>";                
                                        echo"</br>";
                                        echo"<label for='texto'>Texto:</label>";
                                        echo"<input type='text' class='form-control' id='texto' value='$txt_texto' name='texto' maxlength='500'>";
                                        echo"</br>";
                                        echo"<label for='imagen'>Imagen:</label>";
                                        echo"<input type='file' class='form-control' id='imagen' name='imagen' size='30'/>";
                                        echo"</br>";
                                        echo"<div class='text-center'><div class='btn-group justify-content-center'><input type='submit' name='modificar' value='Modificar Servicio' class='btn btn-sm btn-primary mx-auto text-center' type='button'/>";
                                        echo"<input type='submit' name='eliminar' value='Eliminar Servicio' class='btn btn-sm btn-danger mx-auto text-center' type='button'/></div></div>";
                                echo"</fieldset>";
                            echo"</form>";
                        echo"</div>";
                        }?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade admin" id="datos" role="tabpanel" aria-labelledby="datos-tab">
                <div class="container">
                    <h2 class="text-center">Datos</h2>
                    <div class="row">
                        <div class='form-group col-xl-6 col-lg-6'>   
                            <form method='post' action='datos_dao.php'>
                                <fieldset>
                                    <legend class="text-center">Datos</legend>
                                    <input type='hidden' value='datos' name='seccion'>
                                        <label for="Direccion">Direccion:</label>
                                        <input type="text" class="form-control" id="direccion" value="<?php echo "$direccion";?>" name="direccion">                  
                                        </br>
                                        <label for="texto">Url google maps:</label>
                                        <input type="text" class="form-control" id="mapa" value="<?php echo "$url_direccion";?>" name="url_direccion"> 
                                        </br>
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" id="email" value="<?php echo "$email";?>" name="email"> 
                                        </br>
                                        <label for="telefono">Telefono:</label>
                                        <input type="text" class="form-control" id="telefono" value="<?php echo "$telefono";?>" name="telefono">                                  
                                </fieldset>
                        </div>
                        <div class='col-xl-6 col-lg-6'> 
                                <fieldset>
                                    <legend class="text-center">Redes Sociales</legend>
                                        <label for="Direccion">Linked In:</label>
                                        <input type="text" class="form-control" id="linkedin" value="<?php echo "$url_linkedin";?>" name="url_linkedin">                  
                                        </br>
                                        <label for="texto">Facebook:</label>
                                        <input type="text" class="form-control" id="facebook" value="<?php echo "$url_facebook";?>" name="url_facebook"> 
                                        </br>
                                        <label for="email">Instagram:</label>
                                        <input type="text" class="form-control" id="instagram" value="<?php echo "$url_instagram";?>" name="url_instagram"> 
                                        </br>
                                        <input type="submit" name="modificar" value="Modificar datos" class="btn btn-primary center-block" type="button"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </body>
    <script>
            <?php if($_SESSION['mensaje'] != ""){
                echo "alert('".$_SESSION['mensaje']."')";
                $_SESSION['mensaje'] = "";
            }?>
        </script>
</html>
