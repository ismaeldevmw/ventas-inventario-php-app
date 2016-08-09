<?php 
session_start();
$_SESSION['detalle'] = array();

require_once 'Config/conexion.php';
require_once 'Model/Producto.php';

$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Carrito de Compras</title>

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
                        <li class="active"><a href="#"><i class="fa fa-sign-out fa-2x"></i> Cerrar sesi&oacute;n</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 150px;">

            <div class="page-header">
                <h3>Agregue productos a la venta</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div>Producto:
                        <select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                                <option value="<?php echo $producto['idproducto']?>">
                                    <?php echo $producto['descripcion']?>
                                </option>
                                <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div>Cantidad:
                        <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
                    </div>
                </div>
                <div class="col-md-2">
                    <div style="margin-top: 19px;">
                        <button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
                    </div>
                </div>
            </div>

            <br>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Productos</h3>
                </div>
                <div class="panel-body detalle-producto">
                    <?php if(count($_SESSION['detalle'])>0){?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Descripci&oacute;n</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
                                    <tr>
                                        <td>
                                            <?php echo $detalle['productos'];?>
                                        </td>
                                        <td>
                                            <?php echo $detalle['cantidad'];?>
                                        </td>
                                        <td>
                                            <?php echo $detalle['precio'];?>
                                        </td>
                                        <td>
                                            <?php echo $detalle['subtotal'];?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button>
                                        </td>
                                    </tr>
                                    <?php }?>
                            </tbody>
                        </table>
                        <?php }else{?>
                            <div class="panel-body"> No hay productos agregados</div>
                            <?php }?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-sm btn-default guardar-carrito">Finalizar venta</button>
                </div>
            </div>
        </div>
    </body>

    </html>