<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$cuenta = isset($_POST['cuenta']) ? $_POST['cuenta'] : '';
$url = "https://hooks.zapier.com/hooks/catch/803715/oyozwff/";
$data = array('nombre' => $nombre, 'email' => $email, 'telefono' => $telefono, 'cuenta' => $cuenta);
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
?>