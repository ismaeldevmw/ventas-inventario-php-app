<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$t}</title>
</head>

<body>
    <div class="row-fluid">
        {section name=listaValores} {if $modo eq "editar"}
        <form name="editarProductos" id="editarProductos" action="accionProducto.php" method="post">
            <center>
                <legend>
                    <!--Editar producto: {$id}-->
                </legend>
            </center>

            {else}
            <center>
                <legend>
                    <!--Nuevo producto-->
                </legend>
            </center>
            <form name="registrarProductos" id="registrarProductos" action="accionProducto.php" method="post">
                {/if}

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="{$id}">
                        <tr>
                            <td>CÓDIGO: </td>
                            <td colspan="2" class="form-group has-error">
                                <input pattern="[0-9]{ldelim}{5}{rdelim}" title="inserte los 5 números del UPC" name="codigo" maxlength="5" required class="form-control input-sm" placeholder="UPC" value="{$producto[listaValores].codigo_producto}">
                            </td>
                        </tr>
                        <tr>
                            <td>NOMBRE: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="nombre" maxlength="35" required class="form-control input-sm" placeholder="nombre producto" value="{$producto[listaValores].nombre_producto}">
                            </td>
                        </tr>
                        <tr>
                            <td>$ UNITARIO </td>
                            <td class="form-group has-error">
                                <input pattern="[0-9]+.[0-9]" title="Ejemplo 43.0" name="preciou" maxlength="5" required class="form-control input-sm" placeholder="Precio unitario" value="{$producto[listaValores].precio_u}">
                            </td>
                        </tr>
                        <tr>
                            <td>$ VENTA </td>
                            <td class="form-group has-error">
                                <input pattern="[0-9]+.[0-9]" title="Ejemplo 43.0" name="preciov" maxlength="5" required class="form-control input-sm" placeholder="Precio venta" value="{$producto[listaValores].precio}">
                            </td>
                        </tr>
                        <tr>
                            <td>DESCRIPCIÓN: </td>
                            <td colspan="4" class="form-group has-success">
                                <textarea class="form-control input-sm" rows="3" name="descripcion" maxlength="50" placeholder="">{$producto[listaValores].descripcion}</textarea>
                                <span class="help-block">Otras especificaciones que ayuden a describir el producto</span>
                            </td>
                        </tr>
                        <tr>
                            <td>STOCK: </td>
                            <td class="form-group has-error">
                                <input type="number" name="existencias" min="1" max="100" class="form-control input-sm" required placeholder="existencias" value="{$producto[listaValores].existencias_prod}">
                            </td>
                        </tr>
                        <tr>
                            <td>DEPTO: </td>
                            <td class="form-group has-error">
                                <select class="form-control input-sm" name="departamento" required>
                                    {section name=datosDepartamento loop="$datosdept"}
                                    <option value="{$datosdept[datosDepartamento].id_departamento}" selected>{$datosdept[datosDepartamento].nombre_dept}</option>
                                    {/section} {section name=listaDepartamentos loop="$departamentos"}
                                    <option value="{$departamentos[listaDepartamentos].id_departamento}" required>{$departamentos[listaDepartamentos].nombre_dept}</option>
                                    {/section}
                                </select>
                            </td>
                        </tr>

                    </table>
                    <legend></legend>
                    <table>
                        <tr>
                            {if $modo eq "editar"}
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_prod" value="editar"><i class="fa fa-check"></i> Editar producto</button>
                            </td>
                            {else}
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_prod" value="registrar"><i class="fa fa-check"></i> Registrar producto</button>
                            </td>
                            {/if}
                        </tr>
                    </table>


                </center>
                {/section}

            </form>
        </form>
    </div>


</body>

</html>