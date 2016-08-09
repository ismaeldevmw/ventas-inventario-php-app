<!DOCTYPE HTML>
<?php include_once 'config.inc.php'; ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
#container {
    height: 400px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Estadísticas de ventas por mes'
        },
        subtitle: {
            text: 'Tienda 24'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [<?php $db=new Conect_Mysql();
                $sql="SELECT MonthName(venta.fecha) as mes FROM venta GROUP BY MONTH(venta.fecha) ASC";
                $query= $db->execute($sql);                
                while ($row=$db->fetch_row($query)) {?>
                    
                 ['<?php echo $row['mes'] ?>'],
            
                <?php } ?>
                        ]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Ventas',
            data: [<?php $db=new Conect_Mysql();
                $sql="SELECT COUNT('fecha') as total FROM `venta` GROUP BY MONTH(venta.fecha) ASC";
                $query= $db->execute($sql);                
                while ($row=$db->fetch_row($query)) {?>
                    
                 <?php echo $row['total'] ?>,
            
                <?php } ?>
                  ]
                  //CONSULTA PARA ORACLE OBTENER EL NOMBRE DE LOS MESES EN ESPAÑOL
                  //select to_char(to_date(to_char(extract(month from ventas.fecha_venta)),'mm'),'Month','NLS_DATE_LANGUAGE = SPANISH') from ventas group by extract(month from ventas.fecha_venta) ORDER BY extract(month from ventas.fecha_venta) ASC;
        }]
    });
});
		</script>
	</head>
	<body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<nav class="navbar navbar-default navbar-fixed-top" style="margin-top: 68px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-md-12">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="listaProductosController.php"><i class="fa fa-barcode fa-2x"></i> Productos</a></li>
                        <li><a href="listaDepartamentosController.php"><i class="fa fa-shopping-bag fa-2x"></i> Departamentos</a></li>
                        <li><a href="listaUsuariosController.php"><i class="fa fa-user fa-2x"></i> Usuarios</a></li>
                        <li>
                            <a href="formConfiguracionController.php?id=1"><i class="fa fa-cog fa-2x"></i> Configuraci&oacute;n</a>
                        </li>
                        <li><a href="inventarioController.php"><i class="fa fa-shopping-basket fa-2x"></i> Inventario</a></li>
                        <li><a href="libs/Highcharts-4.2.1/reporte3dcolumn.php"><i class="fa fa-bar-chart fa-2x"></i> Estad&iacute;sticas</a></li>                        
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-inverse navbar-fixed-top " style="background-color: #01579B;">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="color: white;"><i class="fa fa-shopping-cart fa-2x"></i> Sellsoft <em>"Control de Ventas e Inventario"</em></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="listaProductosController.php"><i class="fa fa-cart-plus fa-2x"></i> Generar venta<span class="sr-only">(current)</span></a></li>
                        <li><a href="listaProductosController.php"><i class="fa fa-file-text fa-2x"></i> Detalle venta<span class="sr-only">(current)</span></a></li>
                        <li><a href="listaUsuariosController.php"><i class="fa fa-usd fa-2x"></i> Corte de caja</a></li>
                        <li><a href="formCorreoController.php"><i class="fa fa-envelope fa-2x"></i> Contacto</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-secret fa-2x"></i> Bienvenido:</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Mi perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<div id="container" style="height: 400px"></div>
	</body>
</html>
