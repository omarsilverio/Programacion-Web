<?php
//Correo de destino
if ($_POST['g-recaptcha-response'] == '') {
    echo "Captcha invalido";
    } else {
        $Destino = "";
        $asunto = $_POST['asunto'];

        $nombre = $_POST['nombre'];
        $primer_apellido = $_POST['primer_apellido'];
        $segundo_apellido = $_POST['segundo_apellido'];
        $email = $_POST['email'];
        $comentario = $_POST['comentario'];

        $Contenido = "Nombre: ".$nombre.
                    "\nPrimer Apellido: ".$primer_apellido.
                    "\nSegundo Apellido: ".$segundo_apellido. 
                    "\nEmail: ".$email.
                    "\nComentario: ".$comentario;

        mail($Destino,$asunto,$Contenido);
        header("location:../html/");
}
?>