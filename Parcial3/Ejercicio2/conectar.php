<?php
$hostname = 'localhost';
$database = 'salazarro';
$username = 'root';
$password = '';
try
{
    $con = new PDO('mysql:host=$hostname;dbname=$database',$username,$password);
}
catch(PDOException $e)
{
    echo "Error de conexión a la base de datos";
    echo $e->getMessage();
    exit();
}
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
