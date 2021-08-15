<?php
    include("../../conexion.php");


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        $nombre=$_POST['CLI_NOMBRE'];
        $apellido=$_POST['CLI_APELLIDO'];
        $telefono=$_POST['CLI_TELEFONO'];
    }

    $actualizar = "UPDATE cliente SET 
    CLI_NOMBRE='$nombre',
    CLI_APELLIDO='$apellido', 
    CLI_TELEFONO='$telefono' 
    where  CLI_CEDULA='$id'";

    $resultado= mysqli_query($con,$actualizar);

    if($resultado){
        echo "<script>alert('Se actualizo la base de datos'); window.location='../cliente.php';</script>";
    }else{
        echo "<script>alert('No se pudo actualizar la tabla'); window.history.go(-1);</script>";
    }
?>