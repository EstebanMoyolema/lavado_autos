<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" >
        <title>Lavados ABC</title>
        <!--Referenciar archivo .CSS-->
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    </head>
<body>
<header class="header">
        <div class="logo">
            <a class="title-head" href="../index.php"><h1>Lavados ABC</h1></a>
        </div>
        </header>
        <div class="espacio"><br></div>
        <div class="image_main" style=" background-image: url('../images/car-wash.jpg'); ">
            <div class="agregarCliente">
                <p class="cliente_Cabezera">Autos</p>
                <button id="btn-abrir-popup" class="btnAgregarCliente">Agregar Auto</button>
            </div>
            <div class="overlay" id="overlay">
                <div class="popup" id="popup">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h3>Ingresar Auto</h3>
                    <form name="Registro-Producto" method="POST" action="reg_auto.php">
                        <div class="contenedor-inputs">
                            <input type="text" name="au_placa" placeholder="Placa">
                            <!--Spiner Cedula Cliente-->
                        <p id="desOrden">Cedula del cliente</p>
                        <select name="cli_Cedula">
                            
                            <?php
                                $host    = "localhost";
                                $user    = "root";
                                $pass    = "";
                                $db_name = "lavado_autos";
                                //create connection
                                $connection = mysqli_connect($host, $user,$pass, $db_name);
                                $getCliente1 = "select cli_cedula,cli_nombre,cli_apellido from cliente;";
                                $getCliente2 = mysqli_query($connection,$getCliente1);
                                while($row = mysqli_fetch_array($getCliente2)){
                                    $cedula=$row['cli_cedula'];
                                    $nombre=$row['cli_nombre'];
                                    $apellido=$row['cli_apellido'];
                                    ?>
                                    <option value="<?php echo $cedula; ?>"><?php echo $cedula." ".$nombre." ".$apellido; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                            <input type="text" name="au_marca" placeholder="Marca">
                            <input type="text" name="au_modelo" placeholder="Modelo">
                            <input type="text" name="au_estado" placeholder="Estado">
                        </div>
                        <button onclick="new Register_Prod().registerpro()"><input type="submit" class="btn-submit" Value="Ingresar"></button>
                    </form>
                </div>
            </div>
            <!--Prueba Datos-->
        <div id="contenido">
        <table style="margin: auto; width: 850px; border-collapse: separate; border-spacing: 10px 5px; background-color:#F8F8FF;">
            <thead>
                <th>Placa</th>
                <th>Cedula del cliente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Estado</th>
            </thead>
            <?php


        $result = mysqli_query($connection,"SELECT au_placa,cli_cedula,au_marca,au_modelo,au_estado FROM autos");
    
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>"; echo $row['au_placa']; echo "</td>";
            echo "<td>"; echo $row['cli_cedula']; echo "</td>";
            echo "<td>"; echo $row['au_marca']; echo "</td>";
            echo "<td>"; echo $row['au_modelo']; echo "</td>";
            echo "<td>"; echo $row['au_estado']; echo "</td>";
            echo "<td> <a href='editarAut.php?id=".$row['au_placa']."'><button type='button' class='btn btn-danger'>Modificar</button></a> </td>";
            echo "<td> <a href='../pages/EditarEliminarReg/eliminarAut.php?id=".$row['au_placa']."' class='table__item__link'><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            
            echo "</tr>";
        }
        ?>
        </table>
        </div>
        <!--Boton regresar home-->
        <div class="container">
        <a class='flotante' href='../index.php' ><img src='../images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>
            <!--
                <iframe class="frame" src="tablaAutos.php"></iframe>                
            -->
        <script src="../js/confirmacion.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>