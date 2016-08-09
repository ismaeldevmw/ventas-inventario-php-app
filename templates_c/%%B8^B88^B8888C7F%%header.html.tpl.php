<?php /* Smarty version 2.6.20, created on 2016-01-12 01:12:24
         compiled from header.html.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/demo_table.css" />

    <script src="libs/js/jquery-1.8.3.min.js"></script>
    <!--    <script type="text/javascript" language="javascript" src="js/jquery-1.11.3.min.js"></script>-->
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" language="javascript" src="js/funcion.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
</head>
<?php echo '
<style>
    body {
        background-color: #424242;
    }
</style>
'; ?>


<body>
    <?php if (isset ( $_SESSION['user'] )): ?>
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
                        <a href="formConfiguracionController.php?id=1"><i class="fa fa-cog fa-2x"></i> Configuración</a>
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
                    <li><a href="graficasEstadisticas.php"><i class="fa fa-bar-chart fa-2x"></i> Estadísticas</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <?php else: ?>
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
                    <!--                    <li><a href="#"><i class="fa fa-usd fa-2x"></i> Corte de caja</a></li>-->
                    <li><a href="formCorreoController.php"><i class="fa fa-envelope fa-2x"></i> Contacto</a></li>
                    <li class="active"><a href="#"><i class="fa fa-sign-out fa-2x"></i> Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif; ?>
    <!--<?php if (isset ( $_SESSION['user'] )): ?>
                    <li><a href="#"><?php echo $_SESSION['user']; ?>
</a>HOLA</li>
                    <?php else: ?>
                    <li><a href="formCorreoController.php"><i class="fa fa-envelope fa-2x"></i> NUEVO CORREO</a></li>
                    <?php endif; ?>
-->

</body>

</html>