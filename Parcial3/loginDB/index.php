<?php

    if(isset($_SESSION['usuario'])){
        header('location: principal.php');
    }else{
        header('location: login.php');
    }

?>