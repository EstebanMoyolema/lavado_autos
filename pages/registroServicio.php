<?php
    $host    = "localhost";
    $user    = "root";
    $pass    = "";
    $db_name = "lavado_autos";

    //create connection
    $connection = mysqli_connect($host, $user,$pass, $db_name);

    $cedula=$_POST['cli_Cedula'];
    $empId=$_POST['em_id'];
    $ServNombre=$_POST['ser_nombre'];
    $ServPrecio=$_POST['ser_precio'];
    $ServFecha=$_POST['SER_FECHA_HORA'];
    $ServPlaca=$_POST['au_placa'];
    $ServEstado=$_POST['au_estado'];


    $resultado = mysqli_query($connection, "INSERT INTO servicio VALUES ('$cedula','$empId','$ServNombre',
                '$ServPrecio','$ServFecha','$ServPlaca','$ServEstado')") or die ("Error al envio");

    if($resultado){
        header("Location:../index.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
    }
?>