<?php
include 'conectar.php';
try {
    $consultaSql = "select nombre, primer_apellido, usuario, rol from tendero";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();

    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    print "<h1><pre>PDO::FETCH_ASOC</pre></h1>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>Nombre_Completo  = </b> %s <br>", $resultado['nombre']);
    printf("<b>Usuario          = </b> %s <br>", $resultado['usuario']);
    printf("<b>Rol              = </b> %s <br>", $resultado['rol']);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch (PDOException $e) 
{
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>
