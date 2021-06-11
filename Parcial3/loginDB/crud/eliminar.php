<?php

    

    include("../conexionBD.php");
    $id_rol=$_GET['id_rol'];
    $sql = "delete from rol where id_rol= '".$id_rol."'";
    $resultado = mysqli_query($link, $sql);

    if($resultado){
        echo "<script> alert('Se ha eliminado el registro correctamente');
                    window.location='rol.php'
                </script>;";
    }else{
        echo "<script> alert('Error; no se ha logrado eliminar el registro');
                    window.location='rol.php'
                </script>;";
    }
    mysqli_close($link);
?>