<?php
if(isset($_POST['enviar'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    
    $email_to = "rgcecilia@outlook.com";
    $email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
    if(!isset($_POST['nombre']) || !isset($_POST['asunto']) || !isset($_POST['telefono']) || !isset($_POST['email'])){
        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada error<br />";
        header("refresh:5, url=index.php");
        die();
    }

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "Asunto: " . $_POST['asunto'] . "\n";
    $email_message .= "Telefono: " . $_POST['telefono'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";

$email=$_POST['email'];
// Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);

    echo "¡El formulario se ha enviado con éxito! ha llegado al final";
    header("refresh:10, url=index.php");
}
?>

