<?php
include("sesion/conexion.php");
$fila = mysqli_fetch_array(mysqli_query($con, "select * from datos;"));
extract($fila);  
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="manifest/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="descripcion" content="Procuradores de la propiedad">
        <meta name="autores" content="Rgc & Mmp">
        <title>Ladron de Guevara</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet"> 
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body id="arriba">
        <!-- Navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#arriba">Inicio</a>
                <button class="navbar-toggler navbar-toggler-right navbar-expand text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-white" href="#nosotros">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-white" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-white" href="#contacto">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-white" href="#donde">Donde estamos</a>
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
                        echo "<h2 class='text-white'>$txt_inicio</h2>";
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
                        <img class="img-fluid" src="<?php echo "$img_nosotros";?>" alt="">
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="texto text-center text-lg-left">
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
        <!-- Seccion de contenido dinamico -->
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
                                echo "<div class='texto $lado text-center'>";                         
                                    echo "<h4 class='text-white'>$txt_titulo</h4>";
                                    echo "<p class='text-white'>$txt_texto</p>";
                                echo "</div>"
                              . "</div>"
                          . "</div>"
                        . "</div>"
                    . "<hr>";
                    }
                ?>
        </section>
        <hr>    
        <!-- Contacto -->
        <section id="contacto" class="seccion-mail bg-dark">
            <div class="container">
                <div class="mx-auto col-lg-8 col-md-10">
                    <form method='POST' action="dao/send_mail.php">
                        <input type="hidden" name="subject" value="Formulario de contacto">
                        <input type="hidden" name="access" value="ionosmail">
                        <div class="form-group">
                            <label for="nombre" class="text-white">Nombre:</label>
                            <input type='text' class="form-control" id='nombre' placeholder='Nombre y Apellidos...' name='nombre'>
                        </div>
                        <div class="form-group">
                            <label for="asunto" class="text-white">Asunto:</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Asunto..." name="asunto">
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="text-white">Teléfono:</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Telefono de contacto..." name="telefono">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-white">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="email de contacto..." name="email">
                        </div>
                        <input type="submit" value="enviar" class="btn btn-primary mx-auto text-center">
                    </form>
                </div>    
            </div>
        </section>
        <hr>    
        <!-- Donde estamos -->
        <section class="seccion-contacto bg-black" id="donde">
            <div class="container">
                <div class="row">
                    <!-- Direccion -->
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Dirección</h4>
                                <hr class="my-4">
                                <div class="small">                                  
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
                <!-- Redes Sociales -->
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
        <!-- Linkia FP!!! ---->
        <footer class="bg-black small text-center text-white">
            <div class="container">
                PFG DAW Linkia FP 2019 rgcecilia & mmperez 2018
            </div>
        </footer>
        <script src="js/javascript.js"></script>
    </body>
</html>
