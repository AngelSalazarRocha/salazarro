<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar rol</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            $nombre_tendero=$_POST['nombre_tendero'];
            $tipo=$_POST['tipo'];
            $descripcion=$_POST['descripcion'];   
            include("../conexionBD.php");

            $sql="insert into rol (nombre_tendero, tipo, 
            descripcion) values ('".$nombre_tendero."','".$tipo."', 
            '".$descripcion."')";
            $resultado = false;
            $resultado=mysqli_query($link, $sql);

            if($resultado){
                echo "<script> alert('Correcto los datos se ingresaron correctamente');
                                window.location='rol.php'
                        </script>;";
            }else{
                echo "<script> alert('Error los datos no se ingresaron correctamente');
                                window.location='rol.php'
                        </script>;";
            }
            mysqli_close($link);
        }else{
    ?>
    <div class="container-form">
        <h3 class="title-welcome">Agregar nuevo rol</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">

            <label>Nombre tendero</label>
            <input type="text" name="nombre_tendero">

            <label>Tipo de rol</label>
            <input type="text" name="tipo">

            <label >Descripcion</label>
            <input type="text" name="descripcion">

            <input type="submit" name="enviar" value="Agregar">
        </form>
    <?php
        }
    ?>
    <span class="text-footer">
        <a href="rol.php">Regresar</a>
    </span>
    </div>
</body>
</html>