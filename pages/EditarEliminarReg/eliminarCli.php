<?php
    $host    = "localhost";
    $user    = "root";
    $pass    = "";
    $db_name = "lavado_autos";
    $connection = mysqli_connect($host, $user,$pass, $db_name);

    $id=$_GET['id'];
    $eliminar = "DELETE FROM cliente WHERE cli_cedula='$id'";
    $resultado = mysqli_query($connection,$eliminar);


    if($resultado){
        header("Location:../cliente.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
    }
?>