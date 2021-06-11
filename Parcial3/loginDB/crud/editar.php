<?php 
    include("../conexionBD.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            $id_rol = $_POST['id_rol'];
            $nombre_tendero = $_POST['nombre_tendero'];
            $tipo = $_POST['tipo'];
            $descripcion = $_POST['descripcion'];
            
            $sql="update rol set nombre_tendero='".$nombre_tendero."', tipo='".$tipo."', descripcion='".$descripcion."'
                    where id_rol = '".$id_rol."'";

            $resultado=mysqli_query($link,$sql);

            if($resultado){
                echo "<script> alert('Correcto los datos se actualizaron correctamente');
                            window.location='rol.php'
                        </script>;";
            }else{
                echo "<script> alert('Error; los datos no se actualizaron correctamente');
                            window.location='rol.php'
                        </script>;";
            }
            mysqli_close($link);
        }else{
            $id_rol=$_GET['id_rol'];
            $sql="select * from rol where id_rol='".$id_rol."'";
            $resultado=mysqli_query($link,$sql);

            $fila = mysqli_fetch_assoc($resultado);

            $nombre_tendero=$fila["nombre_tendero"];
            $tipo=$fila["tipo"];
            $descripcion=$fila["descripcion"];

            mysqli_close($link);
    ?>
    <div class="container-form">
        <h1 class="title-welcome">Editar rol</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label>Nombre tendero</label>
            <input type="text" name="nombre_tendero" value="<?php echo $nombre_tendero; ?>">

            <label>Tipo de rol</label>
            <input type="text" name="tipo" value="<?php echo $tipo; ?>">

            <label >Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $descripcion; ?>">

            <input type="hidden" name="id_rol" value="<?php echo $id_rol; ?>">

            <input type="submit" name="enviar" value="Aceptar">

        </form>
    </div>
    <?php
        }
    ?>
    <span class="text-footer">
        <a href="rol.php">Regresar</a>
    </span>
</body>
</html>