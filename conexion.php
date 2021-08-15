<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "lavado_autos";
    $con = mysqli_connect($host,$user,$pass);
    mysqli_select_db ($con,$db);
?>