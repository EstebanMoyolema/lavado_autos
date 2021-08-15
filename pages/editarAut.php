<?php
    include("../conexion.php");

    //create con
    $id = $_GET["id"];
    $usuarios = "select AU_PLACA,CLI_CEDULA,AU_MARCA,AU_MODELO,AU_ESTADO from autos where AU_PLACA = '$id'";
    mysqli_query($con,$usuarios);
?>
<form action="../pages/EditarEliminarReg/procesarAut.php" method="POST">

    <?php $resultado = mysqli_query($con,$usuarios);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
        <input type="text"      name="id"             value="<?php echo $row["AU_PLACA"]; ?>">
        <input type="text"      name="CLI_CEDULA"     value="<?php echo $row["CLI_CEDULA"]; ?>">
        <input type="text"      name="AU_MARCA"       value="<?php echo $row["AU_MARCA"]; ?>">
        <input type="text"      name="AU_MODELO"      value="<?php echo $row["AU_MODELO"]; ?>">
        <input type="text"      name="AU_ESTADO"      value="<?php echo $row["AU_ESTADO"]; ?>">
    <?php } mysqli_free_result($resultado); ?> 
    <input type="submit" value="Actualizar">
    
</form>
<!--Boton regresar home-->
<div class="container">
        <a class='flotante' href='../index.php' ><img src='../images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>