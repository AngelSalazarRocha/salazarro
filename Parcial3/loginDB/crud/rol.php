<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini super - rol</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script type="text/javascript">
        function confirmar(){
            return confirm('Confirmar eliminación de registro de la base de datos');
        }
    </script>
</head>
<body>
<?php 
    include("../conexionBD.php");
    $sql = "select * from rol";
    $resultado = mysqli_query($link, $sql);
?>
    <div class="container-form">
        <h1 class="title-welcome">Modificar lista de roles de usuarios</h1>
        <h3><a href="insert.php" class="msg-error">Agregar nuevo rol</a></h3>
        <table class="table-Ed-Del" >
            <thead>
                <tr>
                    <th>Nombre tendero</th>
                    <th>Tipo de rol</th>
                    <th>Descripción</th>
                    <th>Botones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($filas = mysqli_fetch_assoc($resultado)){
            ?>
                <tr>
                    <td><?php echo $filas["nombre_tendero"]; ?></td>
                    <td><?php echo $filas["tipo"]; ?></td>
                    <td><?php echo $filas["descripcion"]?></td>
                    <td>
                        <?php echo "
                            <a href='editar.php?id_rol=".$filas['id_rol']."'>
                                <input type='submit' name='Editar' value='Editar'>
                            </a>";
                        ?>
                        <?php echo "
                            <a href='eliminar.php?id_rol=".$filas['id_rol']."' onclick='return confirmar()'>
                                <input type='submit' name='Eliminar' value='Eliminar'>
                            </a>";
                        ?>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        
        <span class="text-footer">
            <a href="../index.php">Regresar</a>
        </span>
    </div>
    <?php mysqli_close($link); ?>
</body>
</html>