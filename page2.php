<?php

require 'app/bootstrap.php';

$response = $recaptcha->verify($_POST['g-recaptcha-response']);

if(!$response->isSuccess()) {
    $errors = $response->getErrorCodes();
    var_dump($errors);
    echo "<script>alert('Erro ao confirmar recaptcha!')</script>";
} else {
    echo "<script>alert('Bem Vindo!')</script>";
}
