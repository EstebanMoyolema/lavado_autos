<?php
    $host    = "localhost";
    $user    = "root";
    $pass    = "";
    $db_name = "lavado_autos";

    //create connection
    $connection = mysqli_connect($host, $user,$pass, $db_name);

    $id = $_POST['em_id'];
    $nombre = $_POST['em_nombre'];
    $apellido = $_POST['em_apellido'];

    $resultado = mysqli_query($connection, "INSERT INTO empleado VALUES ('$id','$nombre','$apellido');") or die ("Error al envio");
    if($resultado){
        echo "<script>alert('Se ingreso el registro a la base de datos'); window.location='empleado.php';</script>";
    }else{
        echo "<script>alert('No se pudo ingreso el registro a la tabla'); window.history.go(-1);</script>";
    }
?>