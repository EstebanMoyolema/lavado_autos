<?php
    include("../../conexion.php");

    $id=$_GET['id'];
    $eliminar = "DELETE FROM empleado WHERE em_id='$id'";
    $resultado = mysqli_query($con,$eliminar);

    if($resultado){
        header("Location:../empleado.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
    }
?>