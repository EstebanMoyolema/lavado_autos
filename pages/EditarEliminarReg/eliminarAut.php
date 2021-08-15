<?php
    include("../../conexion.php");

    $id=$_GET['id'];
    $eliminar = "DELETE FROM autos WHERE au_placa='$id'";
    $resultado = mysqli_query($con,$eliminar);

    if($resultado){
        header("Location:../autos.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
    }
?>