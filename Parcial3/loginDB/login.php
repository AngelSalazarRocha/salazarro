<?php
    require "loginCodigo.php";
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
            <img class="logo" src="imgLogo/Logo.ico">
            <h1 class="title">Iniciar seción</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <label for="">Alias de usuario</label>
                <input type="text" name="usuario">
                <span class="msg-error"><?php echo $usuario_err; ?></span>

                <label for="">Contraseña</label>
                <input type="password" name="clave">
                <span class="msg-error"><?php echo $clave_err; ?></span>

                <input type="submit" value="Iniciar">
            </form>
            <span class="text-footer">No tengo cuenta. 
                <a href="registro.php">Registrarme</a>
            </span> 
        </div>
    </div>
</body>
</html>