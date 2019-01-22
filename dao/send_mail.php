<?php
$recipient = "luis@ladrondeguevaraprocurador.com";
$fmtMail= implode("", file("mail.htt"));
foreach($_POST as $key=> $val) {
  $fmtMail= str_replace("<$key>", $val, $fmtMail);
}
if ($_POST["access"] == "ionosmail") {
  mail($recipient, $_POST["subject"], $fmtMail);
}
header("location:../index.php"); 
?>

