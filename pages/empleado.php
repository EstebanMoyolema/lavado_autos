<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" >
        <title>Lavados ABC</title>
        <!--Referenciar archivo .CSS-->
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="../js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="header">
            <div class="logo">
                <a class="title-head" href="../index.php"><h1>Lavados ABC</h1></a>
            </div>
        </header>
        
    <head>
    </head>
        <div class="espacio"><br></div>
        <div class="image_main" style=" background-image: url('../images/car-wash.jpg'); ">
            <div class="agregarCliente">
                <p class="cliente_Cabezera">Empleado</p>
                <button id="btn-abrir-popup" class="btnAgregarCliente">Agregar Empleado</button>
            </div>
            <div class="overlay" id="overlay">
                <div class="popup" id="popup">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h3>Ingresar Empleado</h3>
                    <form name="Registro-Empleado" method="post" action="regEmpleado.php">
                        <div class="contenedor-inputs">
                            <input type="text" name="em_id" placeholder="ID">
                            <input type="text" name="em_nombre" placeholder="Nombre">
                            <input type="text" name="em_apellido" placeholder="Apellido">
                        </div>
                        <button onclick="new Register_Emp().registeremp()"><input type="submit" class="btn-submit" Value="Ingresar"></button>
                    </form>
                </div>
            </div>
            <script src="../js/main.js"></script>
        <!--Prueba Datos-->
        <div id="contenido">
        <table style="margin: auto; width: 850px; border-collapse: separate; border-spacing: 10px 5px; background-color:#F8F8FF;">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </thead>
            <?php
        $host    = "localhost";
        $user    = "root";
        $pass    = "";
        $db_name = "lavado_autos";
        $connection = mysqli_connect($host, $user,$pass, $db_name);
        $result = mysqli_query($connection,"SELECT em_id,em_nombre,em_apellido FROM empleado");
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>"; echo $row['em_id']; echo "</td>";
            echo "<td>"; echo $row['em_nombre']; echo "</td>";
            echo "<td>"; echo $row['em_apellido']; echo "</td>";
            echo "<td><a href='editarEmp.php?id=".$row['em_id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
            echo "<td><a href='../pages/EditarEliminarReg/eliminarEmp.php?id=".$row['em_id']."' class='table__item__link'><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>";
        }
        ?>
        </table>
        </div>
        <script src="../js/confirmacion.js"></script>
        <script src="../js/main.js"></script>
        <!--Boton regresar home-->
        <div class="container">
        <a class='flotante' href='../index.php' ><img src='../images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>
</body>
</html>
