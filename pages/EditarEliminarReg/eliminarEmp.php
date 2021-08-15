<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "lavado_autos";

    $con = mysqli_connect($host,$user,$pass);
    mysqli_select_db ($con,$db);

    $id=$_GET['id'];
    $eliminar = "DELETE FROM empleado WHERE em_id='$id'";
    $resultado = mysqli_query($con,$eliminar);

    if($resultado){
        header("Location:../empleado.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
    }
?>