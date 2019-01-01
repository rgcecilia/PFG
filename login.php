<?php
session_start();
include("conexion.php");
?>

<!doctype html>
<html lang="es">
<head>
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
                <form method="post" action="verificacion.php">
                    <div class="form-group">
                    <label for="dni">DNI:</label>
                    <input type="text" maxlength="9" class="form-control" name="dni">
                    </div>                
                    <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" maxlength="50" class="form-control" name="password">
                    </div>		
                    <button type="submit" class="btn btn-primary mx-auto text-center">Accesso</button>
                </form>
            </div>     
          </div>
        </header>  
    </body>
</html>