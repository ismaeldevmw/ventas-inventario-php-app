<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$t}</title>
</head>

<body>
    <div class="panel panel-primary" style="margin-top: 150px">
        <div class="panel-heading">
            <h3 align="left" style="color: white;">Configuración general</h3>
            <h3 class="panel-title" align="left">Editar datos de la tienda.</h3>
        </div>
        <div class="panel-body">

            {section name=listaValores} {if $modo eq "editar"}
            <form name="editarTienda" id="editarTienda" action="accionConfiguracion.php" method="post">
                <center>
                    <legend>

                    </legend>
                </center>

                {else}
                <center>
                    <legend>
                        <!--Nuevo departamento-->
                    </legend>
                </center>
                <form name="registrarTienda" id="registrarTienda" action="accionConfiguracion.php" method="post">
                    {/if}

                    <center>
                        <table class="tbl-registro " width="70%">

                            <input type="hidden" name="id" value="{$id}">
                            <tr>
                                <td>NOMBRE TENDA: </td>
                                <td colspan="4" class="form-group ">
                                    <input type="text" name="nombre" maxlength="35" required class="form-control input-sm" placeholder="nombre departamento" value="{$tienda[listaValores].nombre_tienda}">
                                </td>
                            </tr>
                            <tr>
                                <td>RFC: </td>
                                <td colspan="4" class="form-group">
                                    <input pattern="[A-Za-z0-9]{ldelim}{10}{rdelim}" title="RFC no valido verifique sus datos" name="rfc" maxlength="10" required class="form-control input-sm" placeholder="nombre departamento" value="{$tienda[listaValores].rfc}">
                                </td>
                            </tr>
                            <tr>
                                <td>DIRECCIÓN: </td>
                                <td colspan="4" class="form-group has-success">
                                    <textarea class="form-control input-sm" rows="3" name="direccion" maxlength="300">{$tienda[listaValores].direccion}</textarea>
                                    <span class="help-block">Especifique colonia, municipio etc.</span>
                                </td>
                            </tr>
                            <tr>
                                <td>C.P.: </td>
                                <td colspan="4" class="form-group">
                                    <input pattern="[0-9]{ldelim}{5}{rdelim}" title="Debe insertar un Código Postal valido" name="cp" maxlength="5" required class="form-control input-sm" placeholder="nombre departamento" value="{$tienda[listaValores].cod_postal}">
                                </td>
                            </tr>
                            <tr>
                                <td>TELEFONO: </td>
                                <td colspan="4" class="form-group">
                                    <input type="text" name="telefono" maxlength="30" required class="form-control input-sm" placeholder="nombre departamento" value="{$tienda[listaValores].telefono_tienda}">
                                </td>
                            </tr>
                            <tr>
                                <td>CORREO: </td>
                                <td colspan="4" class="form-group">
                                    <input type="text" name="correo" maxlength="35" required class="form-control input-sm" placeholder="nombre departamento" value="{$tienda[listaValores].correo}">
                                </td>
                            </tr>
                        </table>
                        <legend></legend>
                        <table>
                            <tr>
                                {if $modo eq "editar"}

                                <td class="col-md-4">

                                    <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_tienda" value="editar"><i class="fa fa-check"></i> Guardar cambios</button>
                                </td>
                                {else}
                                <td class="col-md-4">

                                    <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_tienda" value="registrar"><i class="fa fa-check"></i> Registrar datos</button>
                                </td>
                                {/if}
                            </tr>
                        </table>


                    </center>
                    {/section}

                </form>
            </form>
        </div>
    </div>
</body>

</html>