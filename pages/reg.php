<?php
    $host    = "localhost";
    $user    = "root";
    $pass    = "";
    $db_name = "lavado_autos";

    //create connection
    $connection = mysqli_connect($host, $user,$pass, $db_name);

    $cedula=$_POST['CLI_CEDULA'];
    $nombre=$_POST['CLI_NOMBRE'];
    $apellido=$_POST['CLI_APELLIDO'];
    $telefono=$_POST['CLI_TELEFONO'];


    $resultado = mysqli_query($connection, "INSERT INTO cliente VALUES ('$cedula','$nombre','$apellido',
                '$telefono')") or die ("Error al envio");

    if($resultado){
        echo "<script>alert('Se ingreso el registro a la base de datos'); window.location='cliente.php';</script>";
    }else{
        echo "<script>alert('No se pudo ingreso el registro a la tabla'); window.history.go(-1);</script>";
    }
?>