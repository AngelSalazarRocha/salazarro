<?php
define('DB_SERVER' ,'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD' , '');
define('DB_NAME','salazarro');

$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($link ===false){
    die("Error en la conexion". mysqli_connect_error());
}
?>
