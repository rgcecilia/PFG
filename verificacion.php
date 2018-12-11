<?php
	session_start();
	include("controles.php");
	
	if(empty($_POST['dni']) || empty($_POST['password'])){
		header("location:index.php");
	}
	
	$dni=$_POST['dni'];
	$password=$_POST['password'];
	$consulta = "select dni, pass from usuario where dni='$dni' and pass='$password'";
	$resultado = mysqli_query($con, $consulta);
	$num_filas = mysqli_num_rows($resultado);
	$tipo= mysqli_fetch_row($resultado);
	
	if($num_filas == 0){
		echo"<h2>Usuario no existe</h2>";
		header("Refresh:2; url=index.php");		
	}else{
		$_SESSION['user']=$dni;
		$_SESSION['password']=$_POST['password'];
		header("location:administradores.php");
	}
	mysqli_close($con);
?>
