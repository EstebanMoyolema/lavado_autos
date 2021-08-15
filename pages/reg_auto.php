<?php
    $host    = "localhost";
    $user    = "root";
    $pass    = "";
    $db_name = "lavado_autos";

    //create connection
    $connection = mysqli_connect($host, $user,$pass, $db_name);

    $placa=$_POST['au_placa'];
    $cedula=$_POST['cli_Cedula'];
    $marca=$_POST['au_marca'];
    $modelo=$_POST['au_modelo'];
    $estado=$_POST['au_estado'];


    $resultado = mysqli_query($connection, "INSERT INTO autos VALUES ('$placa','$cedula','$marca',
                '$modelo','$estado')") or die ("Error al envio");
                if($resultado){
                    echo "<script>alert('Se ingreso el registro a la base de datos'); window.location='autos.php';</script>";
                }else{
                    echo "<script>alert('No se pudo ingreso el registro a la tabla'); window.history.go(-1);</script>";
                }
?>