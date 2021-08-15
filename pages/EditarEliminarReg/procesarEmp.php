<?php
    include("../../conexion.php");


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        $nombre=$_POST['EM_NOMBRE'];
        $apellido=$_POST['EM_APELLIDO'];
    }

    $actualizar = "UPDATE empleado SET 
    EM_NOMBRE='$nombre',
    EM_APELLIDO='$apellido'
    where  em_id='$id'";

    $resultado= mysqli_query($con,$actualizar);

    if($resultado){
        echo "<script>alert('Se actualizo la base de datos'); window.location='../empleado.php';</script>";
    }else{
        echo "<script>alert('No se pudo actualizar la tabla'); window.history.go(-1);</script>";
    }
?>