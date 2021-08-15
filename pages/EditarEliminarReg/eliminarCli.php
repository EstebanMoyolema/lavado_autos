<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "lavado_autos";

    $con = mysqli_connect($host,$user,$pass);
    mysqli_select_db ($con,$db);

    $id=$_GET['id'];
    $eliminar = "DELETE FROM cliente WHERE cli_cedula='$id'";
    $resultado = mysqli_query($con,$eliminar);

    if($resultado){
        header("Location:../cliente.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
    }
?>