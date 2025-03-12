<?php
    #echo "Desde database.php";
    $db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

    if(!$db){
        echo "Error al conectarse a la db";
        exit;
    }
?>