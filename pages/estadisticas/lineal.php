<?php
    include("../../conexion.php");
    $sql="SELECT count(servicio.EM_ID) as empleado, empleado.EM_NOMBRE as nombre
    FROM Servicio inner join empleado
    on servicio.EM_ID = empleado.EM_ID
    GROUP BY servicio.EM_ID;";
    $result = mysqli_query($con,$sql);

    $valoresY=array();//Cuantas veces se repite el ID
    $valoresX=array();//Nombre del empleado


    while ($ver=mysqli_fetch_row($result)){
      $valoresY[]=$ver[1];
      $valoresX[]=$ver[0];
    }

    

    $datosX=json_encode($valoresX);
	  $datosY=json_encode($valoresY);


?>
<div id="graficaLineal"></div>

<script type='text/javascript'>
    function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">

datosX=crearCadenaLineal('<?php echo $datosX ?>');
datosY=crearCadenaLineal('<?php echo $datosY ?>');


var data = [{
  values: datosX,
  labels: datosY,
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 500
};

Plotly.newPlot('graficaLineal', data, layout);
</script>
