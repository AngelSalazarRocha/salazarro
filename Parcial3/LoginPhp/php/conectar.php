<?php

$Usuario    = $_POST['strUsuario'];
$Contraseña = $_POST['strContraseña'];

$hostname = 'localhost';
$database = 'salazarro';
$username = 'root';
$password = '';

$link = new mysqli($hostname, $username, $password, $database);

if ($link->connect_error) {
        $row['resultado']  = '1';
        $row['informacion']= 'Error DB';
		$row['mensaje']    = 'Error conexion';
		$row['detalle']    = 'No hay conexion a la base de datos';
    } else {

    $passwordHash = password_hash($Contraseña, PASSWORD_DEFAULT, ['cost' => 11]);
    $passwordInBD="select clave from tendero
                    where  usuario = '".$Usuario."'";
    //verificando compatibilidad de contraseña
    if(password_verify($passwordInBD, $passwordHash))
    {   
        //contraseña correcta

    }
    

    $result = $link->query($consulta);

    if ($result->num_rows > 0) {
            $registro = $result->fetch_assoc();

			$row['resultado']  = '0';
			$row['informacion']= 'Login Correcto';
			$row['mensaje']    = 'Acceso Concecido';
			$row['detalle']    = 'Bienvenid@ '.$registro['nombre'].' '.$registro['apPaterno'];

            session_start();
            $_SESSION['idUsuario']=$registro['idUsuario'];
            $_SESSION['nombre']=$registro['nombre'];

    } else  {
        $row['resultado']  = '1';
        $row['informacion']= 'Login Incorrecto';
        $row['mensaje']    = 'Acceso Negado';
        $row['detalle']    = 'Usuario y/o Password Incorrecto';
    }
    $link->close();
}

//var_dump($row);


//$encoded_row = arr  ay_map('utf8_encode',$row);


//echo json_encode($encoded_row);

?>
