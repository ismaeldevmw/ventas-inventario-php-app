<!DOCTYPE HTML>
<?php include_once 'config.inc.php'; ?>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>
        <!--         Bootstrap -->
        <!--        <link href="libs/css/bootstrap.css" rel="stylesheet">-->
        <!--        <script src="libs/js/jquery.js"></script>-->
        <script src="libs/js/jquery-1.8.3.min.js"></script>
        <!--        <script src="libs/js/bootstrap.min.js"></script>-->

        <script type="text/javascript" src="libs/ajax.js"></script>

        <!-- Alertity -->
        <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
        <link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
        <script src="libs/js/alertify/lib/alertify.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
        <link rel="stylesheet" href="css/demo_table.css" />

        <!--        <script type="text/javascript" language="javascript" src="js/jquery-1.11.3.min.js"></script>-->
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" language="javascript" src="js/funcion.js"></script>
        <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
            #container {
                height: 400px;
                min-width: 310px;
                max-width: 800px;
                margin: 0 auto;
            }
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
            text: 'Ventas mensuales'
        },
        subtitle: {
            text: 'Estadísticas de ventas'
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-basket fa-2x"></i> Inventario <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="inventarioTotalController.php">Inventario general</a></li>
                                <li class="divider"></li>
                                <li><a href="inventarioBajoController.php">Inventario bajo</a></li>
                                <li class="divider"></li>
                                <li><a href="agregarInventarioController.php">Agregar inventario</a></li>
                            </ul>
                        </li>
                        <li><a href="graficasEstadisticas.php"><i class="fa fa-bar-chart fa-2x"></i> Estad&iacute;sticas</a></li>
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
                        <li class="active"><a href="#"><i class="fa fa-user-secret fa-2x"></i> Bienvenido: <span class="sr-only">(current)</span></a></li>
                        <li><a href="venta.php"><i class="fa fa-cart-plus fa-2x"></i> Generar venta<span class="sr-only">(current)</span></a></li>
                        <li><a href="detalleVentaController.php"><i class="fa fa-file-text fa-2x"></i> Detalle venta<span class="sr-only">(current)</span></a></li>
                        <!--                        <li><a href="#"><i class="fa fa-usd fa-2x"></i> Corte de caja</a></li>-->
                        <li><a href="formCorreoController.php"><i class="fa fa-envelope fa-2x"></i> Contacto</a></li>
                        <li class="active"><a href="#"><i class="fa fa-sign-out fa-2x"></i> Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <script src="libs/Highcharts/js/highcharts.js"></script>
        <script src="libs/Highcharts/js/highcharts-3d.js"></script>
        <script src="libs/Highcharts/js/modules/exporting.js"></script>

        <div id="container" style="height: 400px; margin-top: 150px;"></div>
    </body>

    </html>