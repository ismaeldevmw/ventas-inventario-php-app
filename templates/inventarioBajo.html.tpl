<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{$t}</title>

</head>

<body>
    <div class="panel panel-info" style="margin-top: 150px; ">
        <div class="panel-heading">
            <h3 align="left" style="color: white;">Inventario bajo</h3>
            <h3 class="panel-title" align="left"></h3>
        </div>
        <br>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <a href="reporteInventarioBajo.php" data-toggle="tooltip" data-placement="top" title="Generar PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x"></i> </a>Generar reporte de inventario bajo
                </div>
            </div>
            <table border="0" align="center" style="margin-left: 45px; margin-right: 30px;">
                <tr>
                    <td>
                        <div id="demo" style="margin-top: 50px">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">

                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Existencias</th>
                                        <th>Departamento</th>
                                        <th> unitario</th>
                                        <th> venta</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {section name=listaProductos loop="$productos"}
                                    <tr>
                                        <td>{$productos[listaProductos].codigo_producto}</td>
                                        <td>{$productos[listaProductos].nombre_producto}</td>
                                        <td>{$productos[listaProductos].descripcion}</td>
                                        <td>{$productos[listaProductos].existencias_prod}</td>
                                        <td>{$productos[listaProductos].id_departamento}</td>
                                        <td>{$productos[listaProductos].precio_u}</td>
                                        <td>{$productos[listaProductos].precio}</td>
                                    </tr>
                                    {/section}
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Existencias</th>
                                        <th>Departamento</th>
                                        <th> unitario</th>
                                        <th> venta</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>