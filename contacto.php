<?php
//Importamos las variables del formulario de contacto



@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$web = addslashes($_POST['web']);
@$mensaje = addslashes($_POST['mensaje']);



//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "freenetworker@softwareentusmanos.tuars.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web www.miweb.com\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Sitio Web: $web\n"
. "Mensaje: $mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
echo "<div class='container'>\n";
echo "<div class='page-header' id='page1'>\n";

if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {


//Si el mensaje se envía muestra una confirmación
?>

      <script>
     
    
     alert("mensaje enviado correctamente"); 
window.location.href="index.html";
     </script> 
     
     
<? 
}else{
//Si el mensaje no se envía muestra el mensaje de error
?>

      <script>
     
    
     alert("el mensaje no se ha enviado correctamente"); 
window.location.href="index.html";
     </script> 
     
     
<? 

}
echo "</div>";
echo "</div>";


?>