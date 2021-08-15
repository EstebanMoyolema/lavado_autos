<?php
    $host    = "localhost";
    $user    = "root";
    $pass    = "";
    $db_name = "lavado_autos";

    $con = mysqli_connect($host,$user,$pass);
    mysqli_select_db ($con,$db_name);

    $id=$_GET['id'];
    $eliminar = "DELETE FROM CLIENTE WHERE cli_cedula='$id'";
    $resultado = mysqli_query($con,$eliminar);

    if($resultado){
        header("Location:../cliente.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
    }
?>