<?php
    include("../conexion.php");
    
    $id = $_GET["id"];
    $usuarios = "select * from cliente where cli_cedula = '$id'";
    mysqli_query($con,$usuarios);
?>
<form action="../pages/EditarEliminarReg/procesarCli.php" method="POST">

    <?php $resultado = mysqli_query($con,$usuarios);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
        <input type="hidden"    name="id"                    value="<?php echo $row["CLI_CEDULA"]; ?>">
        <input type="text"      name="CLI_NOMBRE"            value="<?php echo $row["CLI_NOMBRE"]; ?>">
        <input type="text"      name="CLI_APELLIDO"          value="<?php echo $row["CLI_APELLIDO"]; ?>">
        <input type="text"      name="CLI_TELEFONO"      value="<?php echo $row["CLI_TELEFONO"]; ?>">
    <?php } mysqli_free_result($resultado); ?> 
    <input type="submit" value="Actualizar">
</form>
<!--Boton regresar home-->
<div class="container">
        <a class='flotante' href='../index.php' ><img src='../images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>