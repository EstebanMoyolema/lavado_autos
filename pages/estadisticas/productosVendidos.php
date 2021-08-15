<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "lavado_autos";

    $con = mysqli_connect($host,$user,$pass,$db);
    $sql="SELECT count(SER_NOMBRE) as numero, SER_NOMBRE as nombre
    FROM Servicio 
    GROUP BY SER_NOMBRE
    order by SER_NOMBRE asc;";
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
<div id="graficaProductos"></div>

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

Plotly.newPlot('graficaProductos', data, layout);
</script>
