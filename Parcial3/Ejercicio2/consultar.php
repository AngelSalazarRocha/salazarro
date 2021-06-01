<?php
include "conectar.php";
try {
    $selectAllFrom = "select * from tendero"
    $preparada = $consult -> prepare($selectAllFrom);
    $preparada -> execute();
    while ($row = $preparada -> fetch())
    {
        echo $row['id_usuario'] . '-' . 
            $row['nombre'] . '-' .
            $row['primer_apellido'] . '-' .
            $row['segundo_apellido'] . '-' .
    }
    $preparada -> closeCursor();
} catch (PDOException $ex) {
    //throw $th;
    echo "Error de consulta a la base de datos";
    echo $ex -> getMessage();
}
?>
