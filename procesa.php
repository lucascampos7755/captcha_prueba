<?php
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$asunto= "com";



 $header = 'From:'.$email."\r\n".
'X-Mailer: PHP/'.phpversion()."\r\n".
"Mime-Version: 1.0 \r\n".
"Content-Type: text/plain";
$para='lucascampos7755@gmail.com';
$asunto='prueba';
$mensaje= 'hola hola probando';
mail($para,$asunto,utf8_decode($mensaje),$header);
echo "mensaje enviado";

$recaptcha = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6LcWBK4UAAAAAPHb9Jmhf4ruwqo0iLPBPwJDfK7P',
    'response' => $recaptcha
);

$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);

if ($captcha_success->success) {
    echo 'Se envía el formulario';
} else {
    echo 'No se envía el formulario';
}

?>  