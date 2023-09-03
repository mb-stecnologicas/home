<?php
$name = $POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from="mb.tecnologias.uy@gmail.com";
$email_subject="Nueva Consulta en tu Página";

$email_body="Usuario: $name.\n".
             "E-Mail del Usuario: $visitor_email.\n".
              "Telefono: $number.\n".
                "Mensaje: $message.\n";

$to='mb.tecnologias.uy@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contacto.html");
?>