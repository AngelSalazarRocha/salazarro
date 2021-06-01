<?php
include 'conectar.php';
try {
    $consSql = "select concat_ws(' ', nombre, primer_apellido) as Nombre, usuario as Nombre_usuario, rol from tendero";
    $consulta = $con -> prepare($consSql);
    $consulta = execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    print "<h1><pre>PDO::FETCH_ASOC</pre></h1>";
    print "</br>";
    var_dump($resultado);
    print "</br>";
    printf("<b>Nombre_Completo  = </b> %s <br>", $resultado['Nombre']);
    printf("<b>Usuario          = </b> %s <br>", $resultado['Nombre_usuario']);
    printf("<b>Rol              = </b> %s <br>", $resultado['rol']);
    print "<br><br><br>";
} catch (PDOException $e) 
{
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}
?>
