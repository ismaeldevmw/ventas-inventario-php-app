<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{$t}</title>

</head>

<body>
    <div class="panel panel-primary" style="margin-top: 150px; ">
        <div class="panel-heading">
            <h3 align="left" style="color: white;">Catalogo de productos</h3>
            <h3 class="panel-title" align="left">Edita, elimina y agrega nuevos productos.</h3>
        </div>
        <br>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <a href="formProductosController.php" data-target="#myModal" data-toggle="modal" class="btn  btn-primary btn-block"><i class="fa fa-plus"></i> Nuevo producto</a>
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
                                        <th>P. unitario</th>
                                        <th>P. venta</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
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
                                        <td><a href="formProductosController.php?id={$productos[listaProductos].idproducto}" data-target="#myModal" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                        </td>
                                        <td>
                                            <a href="accionProducto.php?id={$productos[listaProductos].idproducto}" onclick="return confirm('Seguro que desea eliminar este producto')" class="btn btn-danger">
                                                <i class="fa fa-trash-o fa-lg"></i> Eliminar</a>
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
                                        <th>Editar</th>
                                        <th>Eliminar</th>
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
                            <h4 class="modal-title"><b></b>Productos</h4>
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