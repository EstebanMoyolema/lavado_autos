
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" >
        <title>Lavados ABC</title>
        <link rel="stylesheet" type="text/css" href="../lavado_autos/css/style.css" />
        <link rel="stylesheet" type="text/css" href="../lavado_autos/js/bootstrap/css/bootstrap.css"/>
        <script src="../lavado_autos/js/jquery-3.6.0.min.js"></script>
        <script src="../lavado_autos/js/plotly-2.0.0.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                            Graficas Lavados ABC
                        </div>
                        <!--Empleado que mas-->
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    Empleado que mas trabaja
                                    <div id="cargaLineal">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    Clientes
                                    <div id="cargaPastel">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    Producto mas vendido
                                    <div id="cargaPastelProductos">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Boton regresar home-->
        <div class="container">
        <a class='flotante' href='index.php' ><img src='images/home.png' style="height:50px; width:50px; position: fixed; right: 8px; top: 80%; z-index: 20;"/></a>
        </div>
        </div>
    </body>
    <footer class="footer">
        <p class="p_footer">© 2021 por DevCorp</p>
</footer>
</html>

<script type ="text/javascript">
    $(document).ready(function(){
        $('#cargaLineal').load('../lavado_autos/pages/estadisticas/lineal.php')
        $('#cargaPastel').load('../lavado_autos/pages/estadisticas/clienteFrecuente.php')
        $('#cargaPastelProductos').load('../lavado_autos/pages/estadisticas/productosVendidos.php')
    });
</script>