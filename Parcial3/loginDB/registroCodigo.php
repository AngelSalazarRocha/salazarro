<?php

    require_once "conexionBD.php";
    $nombre = $primerap = $segundoap = $correo = $usuario = $clave = $rol = "";
    $nombre_err = $primerA_err = $segundoA_err = $correo_err = $usuario_err = $clave_err = $rol_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        //nombre vacio?
        if(empty(trim($_POST["nombre"]))){
            $nombre_err = "Ingresa tu nombre";
        }else{

            $script = "select id_usuario from tendero where nombre = ?";

            if($stmt = mysqli_prepare($link, $script)){
                mysqli_stmt_bind_param($stmt, "s", $param_nombre);
                
                $param_nombre = trim($_POST["nombre"]);

                if(mysqli_stmt_execute($stmt)){

                    mysqli_stmt_store_result($stmt);
                    //y no verifique si el nombre yá existe por que puede haver varios
                    $nombre = trim($_POST["nombre"]);

                }else{
                    echo "¡Algo salió mal, intentalo de nuevo!";
                }
            }
        }
        
        //primer apellido vacio?
        if(empty(trim($_POST["primerap"]))){
            $primerA_err = "Ingresa tu primer apellido";
        }else{
            $script = "select id_usuario from tendero where primer_apellido = ?";

            if($stmt = mysqli_prepare($link, $script)){
                mysqli_stmt_bind_param($stmt, "s", $param_primerap);
                $param_primerap = trim($_POST["primerap"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    //y verifique si el correo yá existe para no ingresarlo
                    
                    $primerap = trim($_POST["primerap"]);
                    
                }else{
                    echo "¡Algo salió mal, intentalo de nuevo!";
                }
            }
        }

        if(empty(trim($_POST["segundoap"]))){
            $segundoA_err = "Ingresa tu segundo apellido";
        }else{
            $script = "select id_usuario from tendero where segundo_apellido = ?";

            if($stmt = mysqli_prepare($link, $script)){
                mysqli_stmt_bind_param($stmt, "s", $param_segundoap);
                $param_segundoap = trim($_POST["segundoap"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    //no verificar si ya existe pues puede haber varios repetidos
                    $segundoap = trim($_POST["segundoap"]);
                }else{
                    echo "¡Algo salió mal, intentalo de nuevo!";
                }
            }
        }

        //correo vacio?
        if(empty(trim($_POST["correo"]))){
            $correo_err = "Ingresa tu correo";
        }else{
            //si tiene contenido se prepara una consulta
            $script = "select id_usuario from tendero where correo = ?";
            //statement si esta preparado y de prepara de una vez el script de consulta
            if($stmt = mysqli_prepare($link, $script)){
                //mandar los parametros
                mysqli_stmt_bind_param($stmt, "s", $param_correo);
                //dar formato al parametro param_correo
                $param_correo = trim($_POST["correo"]);
                //si se ejecuta
                if(mysqli_stmt_execute($stmt)){
                    //que envie resultado
                    mysqli_stmt_store_result($stmt);
                    //y verifique si el correo yá existe para no ingresarlo
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $correo_err = "Este correo ya existe";
                    }else{
                        //cuando no existe se guarda
                        $correo = trim($_POST["correo"]);
                    }
                }else{
                    echo "¡Algo salió mal, intentalo de nuevo!";//no se ejecutó por conexión?
                }
            }
        }

        //usuario
        if(empty(trim($_POST["usuario"]))){
            $usuario_err = "Ingresa tu Alias de usuario";
        }else{
            $script = "select id_usuario from tendero where usuario = ?";

            if($stmt = mysqli_prepare($link, $script)){
                mysqli_stmt_bind_param($stmt, "s", $param_usuario);

                $param_usuario = trim($_POST["usuario"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    $usuario = trim($_POST["usuario"]);
                    
                }else{
                    echo "¡Algo salió mal, intentalo de nuevo!";
                }
            }
        }

        //clave vacia? o muy chica
        if(empty(trim($_POST["clave"]))){
            $clave_err = "Ingresa tu clave";
        }else if(strlen(trim($_POST["clave"])) < 2){
            $clave_err = "Error, minimo 2 caracteres en clave";
        }else{
            $clave = trim($_POST["clave"]);
        }

        //rol vacio?
        if(empty(trim($_POST["rol"]))){
            $rol_err = "Ingresa tu rol";
        }else{
            $script = "select id_usuario from tendero where rol = ?";

            if($stmt = mysqli_prepare($link, $script)){
                mysqli_stmt_bind_param($stmt, "s", $param_rol);
                $param_rol = trim($_POST["rol"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    //no verificar si ya existe pues puede haber varios repetidos
                    $rol = trim($_POST["rol"]);
                }else{
                    echo "¡Algo salió mal, intentalo de nuevo!";
                }
            }
        }

        //errores de entrada antes de insertar los datos en la base
        if(empty($nombre_err) && empty($primerA_err) && empty($segundoA_err) && empty($correo_err) && empty($usuario_err) && empty($clave_err) && empty($rol_err)){
            $sql = "insert into tendero (nombre, primer_apellido, segundo_apellido, correo, usuario, clave, rol) 
            values (?, ?, ?, ?, ?, ?, ?)";
            if($stmt = mysqli_prepare($link, $sql)){
                //echo($nombre. ' '. $primerA. ' '. $segundoA. ' '. $correo. ' '. $usuario. ' '. $clave. ' '. $rol);
                mysqli_stmt_bind_param($stmt, "sssssss", $param_nombre, $param_primerap, $param_segundoap, $param_correo, $param_usuario, $param_clave, $param_rol);

                //estableciendo parametros
                $param_nombre = $nombre;
                $param_primerap = $primerap;
                $param_segundoap = $segundoap;
                $param_correo = $correo;
                $param_usuario = $usuario;
                $param_clave = password_hash($clave, PASSWORD_DEFAULT, ['cost' => 11]);
                $param_rol = $rol;

                if(mysqli_stmt_execute($stmt)){
                    header("location: index.php");
                }else{
                    echo "algo salió mal al guardar datos.";
                }
            }
        }
        mysqli_close($link);
    }
?>
