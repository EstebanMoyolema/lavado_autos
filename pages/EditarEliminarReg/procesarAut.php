<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "lavado_autos";

    $con = mysqli_connect($host,$user,$pass);
    mysqli_select_db ($con,$db);


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        $cedula=$_POST['CLI_CEDULA'];
        $marca=$_POST['AU_MARCA'];
        $modelo=$_POST['AU_MODELO'];
        $estado=$_POST['AU_ESTADO'];
    }

    $actualizar = "UPDATE autos SET 
    CLI_CEDULA='$cedula', 
    AU_MARCA='$marca',
    AU_MODELO='$modelo',
    AU_ESTADO='$estado'
    where  AU_PLACA='$id'";

    $resultado= mysqli_query($con,$actualizar);

    if($resultado){
        echo "<script>alert('Se actualizo la base de datos'); window.location='../autos.php';</script>";
    }else{
        echo "<script>alert('No se pudo actualizar la tabla'); window.history.go(-1);</script>";
    }
?>