<?php
    include("../conexion.php");
    
    $id = $_GET["id"];
    $usuarios = "select * from empleado where em_id = '$id'";
    mysqli_query($con,$usuarios);
?>
<form action="../pages/EditarEliminarReg/procesarEmp.php" method="POST">

    <?php $resultado = mysqli_query($con,$usuarios);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
        <input type="hidden"    name="id"             value="<?php echo $row["EM_ID"]; ?>">
        <input type="text"      name="EM_NOMBRE"      value="<?php echo $row["EM_NOMBRE"]; ?>">
        <input type="text"      name="EM_APELLIDO"    value="<?php echo $row["EM_APELLIDO"]; ?>">
    <?php } mysqli_free_result($resultado); ?> 
    <input type="submit" value="Actualizar">
    
</form>
<!--Boton regresar home-->
<div class="container">
        <a class='flotante' href='../index.php' ><img src='../images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>