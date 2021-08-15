<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" >
        <title>Lavados ABC</title>
        <!--Referenciar archivo .CSS-->
        <link rel="stylesheet" type="text/css" href="../lavado_autos/css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    </head>
<body>
        <header class="header">
        <div class="logo">
            <a class="title-head" href="index.php"><h1>Lavados ABC</h1></a>
        </div>
        </header>
        <div class="espacio"><br></div>
        <div class="image_main" style=" background-image: url('../lavado_autos/images/car-wash.jpg'); ">
        <div class="botones_main">
            <button class="botonReg"><p><a href="../lavado_autos/registro.html">Registros</a></p></button>
            <button id="btn-abrir-popup" class="botonNue"><p><a href="#">Ordenes</a></p></button>
            <div class="overlay" id="overlay" >
                <div class="popup" id="popup1" style="overflow-y: scroll; height: 420px;">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <form method="POST" action="../lavado_autos/pages/registroServicio.php">
                        <div class="contenedor-inputs">
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
                                    $apellidoCli=$row['cli_apellido']
                                    ?>
                                    <option value="<?php echo $cedula; ?>"><?php echo $nombre." ".$apellidoCli." ".$cedula; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        <!--Spiner Id Empleado-->
                        <p id="desOrden">Id del empeado</p>
                        <select name="em_id">
                            
                            <?php
                                $host    = "localhost";
                                $user    = "root";
                                $pass    = "";
                                $db_name = "lavado_autos";
                                //create connection
                                $connection = mysqli_connect($host, $user,$pass, $db_name);
                                $getCliente1 = "select em_id,em_nombre,em_apellido from empleado;";
                                $getCliente2 = mysqli_query($connection,$getCliente1);
                                while($row = mysqli_fetch_array($getCliente2)){
                                    $id=$row['em_id'];
                                    $nombreEmp=$row['em_nombre'];
                                    $apellidoEmp=$row['em_apellido'];
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $id." ".$nombreEmp." ".$apellidoEmp; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                            <input type="text" name="ser_nombre"     placeholder="Nombre del Servicio">
                            <input type="text" name="ser_precio"     placeholder="Precio del Servicio">
                            <input type="date" name="SER_FECHA_HORA">
                            <!--Spiner Placa Carro-->
                        <p id="desOrden">Placa del Carro</p>
                        <select name="au_placa">
                            <?php
                                $host    = "localhost";
                                $user    = "root";
                                $pass    = "";
                                $db_name = "lavado_autos";
                                //create connection
                                $connection = mysqli_connect($host, $user,$pass, $db_name);
                                $getCliente1 = "select au_placa from autos;";
                                $getCliente2 = mysqli_query($connection,$getCliente1);
                                while($row = mysqli_fetch_array($getCliente2)){
                                    $id=$row['au_placa'];
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
                                    <?php
                                }
                            ?>
                            
                        </select>
                        <!--Spiner Placa Carro-->
                        <p id="desOrden">Estado del Carro</p>
                        <select name="au_estado">
                            
                            <?php
                                $host    = "localhost";
                                $user    = "root";
                                $pass    = "";
                                $db_name = "lavado_autos";
                                //create connection
                                $connection = mysqli_connect($host, $user,$pass, $db_name);
                                $getCliente1 = "select au_estado from autos;";
                                $getCliente2 = mysqli_query($connection,$getCliente1);
                                while($row = mysqli_fetch_array($getCliente2)){
                                    $id=$row['au_estado'];
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
                                    <?php
                                }
                            ?>
                            
                        </select>
                        </div>
                        <<input type="submit" class="btn-submit" Value="Ingresar">
                    </form>
                </div>
            </div>
            <button class="botonEst"><p><a href="graficas.php">Reportes</a></p></button>
        </div>
        <!--Boton regresar home-->
        <div class="container">
        <a class='flotante' href='index.php' ><img src='images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>
        </div>
    <script src="../lavado_autos/js/main.js" type="text/javascript"></script>
</body>
<footer class="footer">
        <p class="p_footer">© 2021 por Esteban Moyolema</p>
</footer>
</html>
