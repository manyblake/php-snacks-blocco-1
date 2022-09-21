<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$atCheck = strpos($email, '@');
$dotCheck = strpos($email, '.');

if ($atCheck != false && $dotCheck != false && strlen($name) > 3 && is_numeric($age)) {
  $msg = 'Accesso Riuscito';
}
else {
  $msg = 'Accesso Negato';
}

var_dump($msg);