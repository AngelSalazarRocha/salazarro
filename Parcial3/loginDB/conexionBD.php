<?php

$dbname = 'salazarro';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';

$link = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if($link ===false){
    die("Error en la conexion". mysqli_connect_error());
}
?>
