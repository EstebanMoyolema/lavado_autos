<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "lavado_autos";

    $con = mysqli_connect($host,$user,$pass,$db);
    $con = mysqli_connect("localhost","root","","lavado_autos");
    mysqli_select_db ($db,$con);
?>