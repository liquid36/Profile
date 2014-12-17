<?php

//DATOS ENVIADOS DESDE EL ARCHIVO PRINCIPAL Y SON RECIBIDOS MEDIANTE POST
$arrDatos=array(
    'nombre'        =>$_POST['nombre'],  
    'email'         =>$_POST['email'],
    'telefono'      =>$_POST['telefono'],
    'comentario'     =>$_POST['comentario']
);

//COMO VA A ESTAR ARMADO EL MENSAJE QUE RECIBAMOS
$mensaje = "
    Nombre: ".$arrDatos['nombre']." \r\n
    Apellido: ".$arrDatos['apellido']." \r\n
    Email: ".$arrDatos['email']." \r\n
    Teléfono: ".$arrDatos['telefono']." \r\n
    Comentarios: ".$arrDatos['comentario']." \r\n
";

//PARAMETROS PARA NUESTRO SERVICIO DE CORREO
$mensaje = wordwrap($mensaje, 70);           
$de = $arrDatos['nombre'];
$asunto = "Nuevo mensaje de ".$de."";

//CAMBIAR DATOS
$cabeceras = 'From: NOMBRE DE RECEPCION QUE NOS VA A FIGURAR '."\r\n" .
    'Reply-To: '.$arrDatos['email'].'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
// ENVIAR EMAIL
// mail("marianoabotta@gmail.com",$asunto,$mensaje,$cabeceras);

echo "<p>"  . $cabeceras . "</p>";
echo "<p>"  . $mensaje . "</p>";
echo "<p>"  . $asunto . "</p>";

?>
