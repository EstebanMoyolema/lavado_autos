<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" >
        <title>Lavados ABC</title>
        <!--Referenciar archivo .CSS-->
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
        <script src="${pageContext.request.contextPath}/resource/js/Register.js" type="text/javascript"></script>
        <script src="${pageContext.request.contextPath}/resource/js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="${pageContext.request.contextPath}/resource/js/jquery-3.5.0.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="../js/main.js" type="text/javascript"></script>
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
                <p class="cliente_Cabezera">Clientes</p>
                <button id="btn-abrir-popup" class="btnAgregarCliente">Agregar Cliente</button>
            </div>
            <div class="overlay" id="overlay">
                <div class="popup" id="popup">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h3>Ingresar Cliente</h3>
                    <form name="Registro" method="POST" action="reg.php">
                        <div class="contenedor-inputs">
                            <input type="text" name="CLI_CEDULA"     placeholder="Cedula">
                            <input type="text" name="CLI_NOMBRE"     placeholder="Nombre">
                            <input type="text" name="CLI_APELLIDO"   placeholder="Apellido">
                            <input type="text" name="CLI_TELEFONO"   placeholder="Telefono">
                        </div>
                        <button onclick="new Register().register()"><input type="submit" class="btn-submit" Value="Ingresar"></button>
                    </form>
                </div>
            </div>

        <!--Prueba Datos-->
        <div id="contenido">
        <table style="margin: auto; width: 850px; border-collapse: separate; border-spacing: 10px 5px; background-color:#F8F8FF;">
            <thead>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Actividad</th>
            </thead>
            <?php
        $host    = "localhost";
        $user    = "root";
        $pass    = "";
        $db_name = "lavado_autos";
        $connection = mysqli_connect($host, $user,$pass, $db_name);
        
        $result = mysqli_query($connection,"SELECT CLI_CEDULA,CLI_NOMBRE,CLI_APELLIDO,CLI_TELEFONO  FROM cliente");
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>"; echo $row['CLI_CEDULA']; echo "</td>";
            echo "<td>"; echo $row['CLI_NOMBRE']; echo "</td>";
            echo "<td>"; echo $row['CLI_APELLIDO']; echo "</td>";
            echo "<td>"; echo $row['CLI_TELEFONO']; echo "</td>";
            echo "<td><a href='editarCli.php?id=".$row['CLI_CEDULA']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
            echo "<td><a href='../pages/EditarEliminarReg/eliminarCli.php?id=".$row['CLI_CEDULA']."' class='table__item__link'> <button type='button' class='btn btn-success'>Eliminar</button> </a> </td>";
            echo "</tr>";
        }
        ?>
        </table>
        <!--Boton regresar home-->
        <div class="container">
        <a class='flotante' href='../index.php' ><img src='../images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>
        </div>
            <!--
                <iframe class="frame" src="tablaCliente.php"></iframe>
            -->
            <script src="../js/confirmacion.js"></script>
            <script src="../js/main.js"></script>
    </body>
</html>