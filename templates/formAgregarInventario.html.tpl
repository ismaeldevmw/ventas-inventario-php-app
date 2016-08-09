<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$t}</title>
</head>

<body>
    <div class="row-fluid">
        {section name=listaValores} {if $modo eq "editar"}
        <form name="editarProductos" id="editarProductos" action="accionAgregarInventario.php" method="post">
            <center>
                <legend>
                    nombre: {$producto[listaValores].nombre_producto} existencias: {$producto[listaValores].existencias_prod}
                </legend>
            </center>

            {else}
            <center>
                <legend>
                    <!--Nuevo producto-->
                </legend>
            </center>
            <form name="registrarProductos" id="registrarProductos" action="accionAgregarInventario.php" method="post">
                {/if}

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="{$id}">

                        <tr>
                            <td>STOCK: </td>
                            <td class="form-group has-error">
                                <!--<input type="number" name="existencias" min="1" max="100" class="form-control input-sm" required placeholder="existencias" value="{$producto[listaValores].existencias_prod}">-->
                                <select name="existencias" class="form-control">
                                    <option value="0">{$cust_msj}</option>
                                    <option>{html_options values=$cust_ids output=$cust_ids selected=$customer_id}</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            {if $modo eq "editar"}
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_prod" value="editar"><i class="fa fa-check"></i> Guardar cambios</button>
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