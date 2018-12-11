<?php
	session_start();
	include("controles.php");
?>

<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
	<div class="page-header d-flex justify-content-center">
            <h2 class="text-center">Panel de Administracion<br/></h2>
            </div>
		<div class="col-md-2">
                    <nav class="nav-sidebar ">
			<ul class="nav tabs">
                            <li class="active"><a href="#tab0" data-toggle="tab">Bienvenido</a></li>
                            <li class=""><a href="#tab1" data-toggle="tab">Gestion de Usuarios</a></li>
                            <li class=""><a href="#tab2" data-toggle="tab">Modificar Textos</a></li>
                            <li class=""><a href="#p3" data-toggle="tab">Sobre Nosotros</a></li>
                            <li class=""><a href="#p4" data-toggle="tab">Servicios</a></li>
                            <li class=""><a href="#p5" data-toggle="tab">Extras</a></li>
                            <li class=""><a href="logout.php">Salir</a></li>
			</ul>
                    </nav>
		</div>
		<div class="tab-content" id="tabContent">
			<br/>
			<div id="tab0" class="tab-pane text-style active">
                            <div class="text-center col-md-10 col-lg-10">
				<h2>Bienvenido</h2>
				<?php
				echo "<h2 class='text-primary'>".$_SESSION['password']."</h2>";
				?>
                            </div>
			</div>
			<div id="tab1" class="tab-pane text-style">
				<div class="form-group col-md-10 col-lg-10">
					<h2 class="text-center">Crear Usuarios</h2>
					<form method='POST' action='modificar_usuarios.php'>
					Dni:
					<input class="form-control" type='text' name='dni' maxlength='9' minlength='9' placeholder="Documento nacional de identidad" /> Apellido:
					<input class="form-control" type='text' name='apellido' maxlength='50' placeholder="Apellido del nuevo usuario" /> Tipo:
					<label class="form-control">
					Administrador
					<input type='radio' name='tipo' value='0' checked/> Estudiante
					<input type='radio' name='tipo' value='1' />
					</label>
					<br/>
					<input class="btn btn-primary center-block" type='submit' name='crear' value='Crear Usuario' />
					</form>
				</div>
			</div>
	<div id="tab2" class="tab-pane text-style">
	<div class="form-group col-md-10 col-lg-10">
	<h2 class="text-center">Modificar textos</h2>
        <div class='form-group col-md-10 col-md-offset-1'>
        <form method='post' action='modificar_notas.php'>
		Seleccione un texto para modificarlos:
	<select class='form-control' name='asignatura'>
            <option selected="true" disabled="disabled">Seleccione un texto</option>
		<?php
                    $consulta = "select identificador, titulo, texto from textos";
                    $resultado = mysqli_query($con, $consulta);
                    $num_filas = mysqli_num_rows($resultado);
                    $resultado = mysqli_query($con, $consulta);
                        while($fila = mysqli_fetch_array($resultado)){
				extract($fila);
			echo "<option value='$identificador'>$titulo</option>";
			}
		?>
        </select>
            <div class="form-group">
                <label for="titulo">Nuevo Titulo:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nuevo titulo..." name="titulo">
            </div>
                
            <div class="form-group">
                <label for="texto">Nuevo Texto:</label>
                <input type="area" class="form-control" id="asunto" placeholder="Nuevo texto..." name="texto">
            </div>
                <input type="submit" name="modificar" value="Modificar el texto" class="btn btn-primary" type="button"/>
	</form>
</div>
</div>
</div>
<div id='p3' class='tab-pane text-style'>
	<div class='form-group col-md-10 col-lg-10'>
		<h2 class="text-center">Menu de Calificaciones</h2>
		<form method='post' action='submenu_notas.php'>
			Usuario:
				<select class='form-control' name='dni'>
				<?php
				$query = "select dni, apellido from usuario";
				$res = mysqli_query($con, $query);
				while($fila = mysqli_fetch_array($res)){
					extract($fila);
				echo "<option value='$dni'>$apellido</option>";
				}
				?>
				</select>
				<br>
				<input class='btn btn-primary center-block' type='submit' name='enviar' value='Ver notas del alumno' />
					</form>
				</div>
			</div>
			<div id='p4' class='tab-pane text-style'>
				<div class='form-group col-md-10 col-lg-10'>
					<h2 class="text-center">Modificar Usuarios</h2>
					<form method='post' action='modificar_usuarios.php'>
						Usuario:
						<select name='dni' class='form-control'>
							<option selected="true" disabled="disabled">Seleccion</option>
							<?php
							$consulta = "select dni, apellido from usuario";
							$res = mysqli_query($con, $consulta);
							while($fila = mysqli_fetch_array($res)){
								 extract($fila);
								 echo "<option value='$dni'>$apellido</option>";
							}
							?>
						</select>
						<br/>
						<input class='btn btn-primary center-block' type='submit' name='eliminar' value='eliminar definitivamente' />
						<br/>
						<h3 class="text-center">Si desea modificarlo introduzca aqui los nuevos datos:</h3>
						<br/> Apellido:
						<input class='form-control' type='text' name='apellido_nuevo' maxlength='50' placeholder="Nuevo apellido" /> Tipo:
						<select name='tipo_nuevo' class='form-control'>
							<option selected="true" disabled="disabled">Seleccion</option>
							<option value="0">Administrador</option>
							<option value="1">Estudiante</option>
						</select>
						<br/>
						<input class='btn btn-primary center-block' type='submit' name='modificar' value='Modificar Usuario' />
					</form>
				</div>
			</div>
			<div id='p5' class='tab-pane text-style'>
				<div class='form-group col-md-10 col-lg-10'>
					<form method='post' action='modificar_asignaturas.php'>
						Asignatura:
						<select class='form-control' name='asignatura' maxlength='30'>
							<option selected="true" disabled="disabled">Seleccion</option>
							<?php
							$consulta = "select identificador, nombre from asignatura";
							$res = mysqli_query($con, $consulta);
							while($fila = mysqli_fetch_array($res)){
								 extract($fila);
								 echo "<option value='$identificador'>$nombre</option>";
							}
							mysqli_close($con);
							?>
						</select>
						<br/>
						<input class='btn btn-primary center-block' type='submit' name='eliminar' value='eliminar definitivamente' /> Nuevo Nombre:
						<input class='form-control' type='text' name='nuevo' maxlength='30' minlength='3' />
						<br/>
						<input class='btn btn-primary center-block' type='submit' name='modificar' value='Modificar Nombre' />
					</form>
				</div>
			</div>

		</div>
	</div>
</body>
</html>
