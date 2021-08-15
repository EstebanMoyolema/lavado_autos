<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "lavado_autos";

    $con = mysqli_connect($host,$user,$pass,$db);
    $sql="SELECT count(servicio.CLI_CEDULA) as cliente, cliente.CLI_NOMBRE as nombre
    FROM Servicio join cliente
    on servicio.CLI_CEDULA = cliente.CLI_CEDULA
    GROUP BY servicio.CLI_CEDULA;";
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
<div id="graficaPastel"></div>

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

Plotly.newPlot('graficaPastel', data, layout);
</script>
