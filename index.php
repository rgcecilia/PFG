<?php
session_start();
include("controles.php");
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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" crossorigin="anonymous"></script>

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
    <header class="cabecera">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-left">
            <div class="col-xl-6 col-lg-6">
          <h1 class="text-black text-uppercase">Ladron de Guevara</h1>
          <h2 class="text-black mx-auto">Procurador</h2>
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
            <img class="img-fluid mb-3" src="img/sobre_nosotros/imagen1.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h3>Sobre nosotros</h3>
              <p class="text-black mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
            </div>
          </div>
        </div>
        </div>
    </section>
    <hr>
    <!-- Servicios -->
    <section id="servicios" class="seccion-nosotros bg-light">
      <div class="container">
        <!-- Servicio 1 -->
        <div class="row align-items-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/servicios/imagen1.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-dark text-center">
                <div class="project-text text-center text-lg-left">
                  <h4 class="text-white">Profesionalidad</h4>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
              </div>
            </div>
          </div>
        </div>
	<hr>
        <!-- Servicio 2 -->
        <div class="row align-items-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/servicios/imagen2.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-dark text-center">
                <div class="project-text text-center text-lg-right">
                  <h4 class="text-white">Confianza</h4>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>    
    <!-- Contacto -->
    <section id="contacto" class="signup-section bg-dark">

      <div class="container">
          <div class="mx-auto col-lg-8 col-md-10">
            <form action="/action_page.php">
                <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre y Apellidos..." name="nombre">
                </div>
                
                <div class="form-group">
                <label for="asunto">Asunto:</label>
                <input type="text" class="form-control" id="asunto" placeholder="Asunto..." name="nombre">
                </div>
                
                <div class="form-group">
                <label for="pwd">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" placeholder="Telefono de contacto..." name="telefono">
                </div>
                
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="email de contacto..." name="email">
                </div>
     
                <button type="submit" class="btn btn-primary mx-auto text-center">Enviar</button>
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
                    <a href="https://www.google.com/maps/place/Calle+Barrau,+11,+41018+Sevilla/@37.3809183,-5.9764598,18z/data=!4m5!3m4!1s0xd126e98900acda7:0xd51ed4a7ac9d6fa3!8m2!3d37.3807295!4d-5.9760695" target="_blank">Calle Barrau 11, 41008, Sevilla</a>
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
                <div class="small text-black-50">ladrondeguevara@outlook.com</div>
              </div>
            </div>
          </div>
	<!-- Telefono -->
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <h4 class="text-uppercase m-0">Teléfono</h4>
                <hr class="my-4">
                <div class="small text-black-50">+34 6XX9XX9XX</div>
              </div>
            </div>
          </div>
        </div>
        <!--Redes Socialies-->
        <div class="social d-flex justify-content-center">
          <a href="https://es.linkedin.com/in/raulgutierrezcecilia" target="_blank" class="mx-2">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://www.facebook.com/luis.ladrondeguevara.33" target="_blank" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/luis_ladron/?hl=es" target="_blank" class="mx-2">
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
