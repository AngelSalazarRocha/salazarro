<?php
    include 'registroCodigo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Mini super-La 5ta</title>
</head>
<body>
    <div class="container-all">
        <div class="container-form">
            <img src="imgLogo/Logo.ico" alt="" class="logo">
            <h1 class="title">Registro</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                <label for="">Nombre(s)</label>
                <input type="text" name="nombre">
                <span class="msg-error"><?php echo $nombre_err; ?></span>
                
                <label for="" >Primer apellido</label>
                <input type="text" name="primerap">
                <span class="msg-error"><?php echo $primerA_err; ?></span>

                <label for="" >Segundo apellido</label>
                <input type="text" name="segundoap">
                <span class="msg-error"><?php echo $segundoA_err; ?></span>

                <label for="" >Correo</label>
                <input type="text" name="correo">
                <span class="msg-error"><?php echo $correo_err; ?></span>

                <label for="">Alias de usuario</label>
                <input type="text" name="usuario">
                <span class="msg-error"><?php echo $usuario_err; ?></span>

                <label for="">Contraseña</label>
                <input type="password" name="clave">
                <span class="msg-error"><?php echo $clave_err; ?></span>

                <label for="">Rol en el sistema</label>
                <input type="text" name="rol">
                <span class="msg-error"><?php echo $rol_err; ?></span>

                <input type="submit" value="Registrar">
            </form>
            <span class="text-footer">Ya tengo cuenta. 
                <a href="index.php">Ir a login</a>
            </span> 
        </div>
    </div>
</body>
</html>