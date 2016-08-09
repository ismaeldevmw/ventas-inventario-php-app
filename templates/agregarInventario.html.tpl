<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{$t}</title>

</head>

<body>
    <div class="panel panel-primary" style="margin-top: 150px; ">
        <div class="panel-heading">
            <h3 align="left" style="color: white;">Agregar inventario</h3>
            <h3 class="panel-title" align="left"></h3>
        </div>
        <br>
        <div class="panel-body">
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
                                        <th>Agregar</th>
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
                                        <td><a href="formAgregarInventarioController.php?id={$productos[listaProductos].idproducto}" data-target="#myModal" data-toggle="modal" class="btn btn-info"><i class="fa fa-plus"></i></a>
                                        </td>
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
                                        <th>Agregar</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="recargar()">&times;</button>
                            <h4 class="modal-title"><b></b></h4>
                        </div>
                        <div class="modal-body ">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>