<?php
    $clave = 'salazar'; //$2y$11$35UOTIEjgSFeUH58AzK0OOu0oPfH/jeMD6I4/lg0t3l7bUx0kjffy

    $hash = password_hash($clave, PASSWORD_DEFAULT, ['cost' => 11]);
    echo $hash . '<br/>';

    //gerardo
    echo password_hash('pineda', PASSWORD_DEFAULT, ['cost' => 11]);   //$2y$11$SDz6q3t00tZZnnXzIQJAqehQUOfgYsnyJOKzpLzzdrKyERFs/QgZK

    //como verificar compatibilidad de credenciales
    /*if(password_verify($clave, $hash))
    {   echo '<br/>';
        echo 'Los password son compatibles';
    }*/
?>
