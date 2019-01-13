<?php

    session_start();
    include("sesion/conexion.php");
    $consulta = "select * from datos;";
    $resultado = mysqli_query($con, $consulta);
    $num_filas = mysqli_num_rows($resultado);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Procurador de la propiedad" content="">
        <meta name="Rgc & Mmp" content="">
        
        <title>Ladron de Guevara</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body id="page-top">
        <!-- Navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
                <button class="navbar-toggler navbar-toggler-right navbar-expand" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#nosotros">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#donde">Donde estamos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Inicio -->
        <header class="cabecera" style="background-image: url('<?php echo "$img_inicio"; ?>');">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-left">
                    <div class="col-xl-6 col-lg-6">
                        <?php
                        echo "<h1 class='text-white text-uppercase'>$titulo_inicio</h1>";
                        echo "<h2 class='text-white mx-auto'>$txt_inicio</h2>";
                        ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- Sobre Nosotros -->
        <hr>    
        <section id="nosotros" class="seccion-nosotros bg-light">
            <div class="container">
                <div class="row align-items-center no-gutters mb-4 mb-lg-0">
                    <div class="col-xl-8 col-lg-7">
                        <img class="img-fluid mb-3" src="<?php echo "$img_nosotros";?>" alt="">
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <?php
                            echo "<h3>$titulo_nosotros</h3>";
                            echo "<p class='text-black mb-0'>$txt_nosotros</p>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- Servicios -->
        <section id="servicios" class="seccion-nosotros bg-light">
            <div class="container">
                <?php
                $consulta = "select * from servicios;";
                $resultado = mysqli_query($con, $consulta);
                $num_filas = mysqli_num_rows($resultado);
                $tipo = 1;
                $lado = "text-lg-left";
                while ($fila = mysqli_fetch_array($resultado)) {
                        extract($fila);
                        if($tipo %2 == 0){
                            $lado = "text-lg-left";
                            $orden = "order-lg-first";
                            $tipo++;
                        }else{
                            $lado = "text-lg-right";
                            $orden = "";
                            $tipo++;
                        }              
                echo "<div class='row align-items-center no-gutters mb-5 mb-lg-0'>";
                    echo "<div class='col-lg-6'>";
                        echo "<img class='img-fluid' src='$url_imagen' alt=''>";
                    echo"</div>";
                    echo"<div class='col-lg-6 $orden'>";
                        echo"<div class='bg-dark text-center'>";
                            echo "<div class='project-text $lado text-center'>";                         
                                echo "<h4 class='text-white'>$txt_titulo</h4>";
                                echo "<p class='text-white'>$txt_texto</p>";
                            echo"</div></div></div></div><hr>";
                }
                ?>
        </section>
        <hr>    
        <!-- Contacto -->
        <section id="contacto" class="signup-section bg-dark">
            <div class="container">
                <div class="mx-auto col-lg-8 col-md-10">
                    <form method='POST' action="send_mail.php">
                        <div class="form-group">
                            <label for="nombre" class="text-white">Nombre:</label>
                            <input type='text' class="form-control" id='nombre' placeholder='Nombre y Apellidos...' name='nombre'>
                        </div>
                        <div class="form-group">
                            <label for="asunto" class="text-white">Asunto:</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Asunto..." name="asunto">
                        </div>

                        <div class="form-group">
                            <label for="pwd" class="text-white">Teléfono:</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Telefono de contacto..." name="telefono">
                        </div>

                        <div class="form-group">
                            <label for="email" class="text-white">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="email de contacto..." name="email">
                        </div>
                        <input type="submit" name="enviar" value="enviar" class="btn btn-primary mx-auto text-center"></button>
                    </form>
                </div>    
            </div>
        </section>
        <hr>    
        <!-- Donde estamos -->
        <section class="contact-section bg-black" id="donde">
            <div class="container">
                <div class="row">
                    <!-- Direccion -->
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Dirección</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">                                  
                                    <a href= <?php echo "'$url_direccion' target='_blank'>$direccion</a>" ?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Correo -->
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">
                                    <?php echo "$email"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Telefono -->
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Teléfono</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">
                                    <?php                             
                                    echo "$telefono";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Redes Socialies-->
                <div class="social d-flex justify-content-center">
                    <a href="<?php echo "$url_linkedin" ?>" target="_blank" class="mx-2">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="<?php echo "$url_facebook" ?>" target="_blank" class="mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo "$url_instagram" ?>" target="_blank" class="mx-2">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- Copyright ---->
        <footer class="bg-black small text-center text-white">
            <div class="container">
                Copyright &copy; rgcecilia & mmperez 2018
            </div>
        </footer>
        <script src="js/javascript.js"></script>
    </body>
</html>
