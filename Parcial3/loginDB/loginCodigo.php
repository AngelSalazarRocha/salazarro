<?php

    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
    {
        header("location: principal.php");
        exit;
    }

    require_once "conexionBD.php";
    $usuario = $clave = "";
    $usuario_err = $clave_err = "";

    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        //validacion de campos vacios
        if(empty(trim($_POST["usuario"])))
        {
            $usuario_err = "Ingresa un alias de usuario";
        }else{
            $usuario = trim($_POST["usuario"]);
        }

        if(empty(trim($_POST["clave"])))
        {
            $clave_err = "Ingrese una contraseña";
        }else{
            $clave = trim($_POST["clave"]);
        }

        //validación de credenciales
        if(empty($usuario_err) && empty($clave_err)){
            $script = "select id_usuario, nombre, primer_apellido, segundo_apellido, correo, usuario, clave, rol
            from tendero where usuario = ?";

            if($stmt = mysqli_prepare($link, $script)){
                mysqli_stmt_bind_param($stmt, "s", $param_usuario);

                $param_usuario = $usuario;

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                }

                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id_usuario, $nombre, $primerap, $segundoap, $correo, $usuario, $hashed_password, $rol);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($clave, $hashed_password)){
                            session_start();
                            //almacenando datos en variables de sesión.
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_usuario"] = $id_usuario;
                            $_SESSION["usuario"] = $usuario;

                            header("location: principal.php");
                        }else{
                            $clave_err = "Contraseña incorrecta... si persiste consulte";
                        }
                    }
                }else{
                    $usuario_err = "No se ha encontrado el alias de usuario";
                }
            }else{
                echo "Algo salió mal, intentalo de nuevo de diferente manera";
            }
        }
        mysqli_close($link);
    }
?>