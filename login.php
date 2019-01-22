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
    <meta name="Procurador de la propiedad" content="">
    <meta name="Rgc & Mmp" content="">
        <title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="http://localhost/PFG/index.php">Volver a la pagina principal</a>
          </div>
        </nav>
        <header class="cabecera" style="background-image: url('<?php echo "$img_inicio"; ?>');">
          <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto col-lg-8 col-md-8">
                <form method="post" action="sesion/verificacion.php">
                    <div class="form-group">
                        <label for="dni" class="text-white">DNI:</label>
                        <input type="text" maxlength="9" class="form-control" name="dni" id="dni">
                    </div>                
                    <div class="form-group">
                        <label for="password" class="text-white">Contraseña:</label>
                        <input type="password" maxlength="50" class="form-control" name="password" id="pass">
                    </div>		
                    <button type="submit" class="btn btn-primary mx-auto text-center">Accesso</button>
                </form>
            </div>     
          </div>
        </header>  
    </body>
    <script>
        <?php
        if ($_SESSION['mensaje'] != "") {
            echo "alert('" . $_SESSION['mensaje'] . "')";
            $_SESSION['mensaje'] = "";
        }
        ?>
    </script>
</html>