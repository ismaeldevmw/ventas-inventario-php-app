<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$t}</title>
</head>

<body>
    <div class="row-fluid">
        {section name=listaValores} {if $modo eq "editar"}
        <form name="editarDepartamentos" id="editarDepartamentos" action="accionDepartamento.php" method="post">
            <center>
                <legend>
                    <!--Editar departamento: {$id}-->
                </legend>
            </center>

            {else}
            <center>
                <legend>
                    <!--Nuevo departamento-->
                </legend>
            </center>
            <form name="registrarDepartamentos" id="registrarDepartamentos" action="accionDepartamento.php" method="post">
                {/if}

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="{$id}">
                        <tr>
                            <td>NOMBRE: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="nombre" maxlength="35" required class="form-control input-sm" placeholder="nombre departamento" value="{$departamento[listaValores].nombre_dept}">
                            </td>
                        </tr>
                        <tr>
                            <td>DESCRIPCIÓN: </td>
                            <td colspan="4" class="form-group has-success">
                                <textarea class="form-control input-sm" rows="3" name="descripcion" maxlength="150">{$departamento[listaValores].descripcion_dept}</textarea>
                                <span class="help-block">Otras especificaciones que ayuden a describir el departamento</span>
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

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_depto" value="editar"><i class="fa fa-check"></i> Editar departamento</button>
                            </td>
                            {else}
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_depto" value="registrar"><i class="fa fa-check"></i> Registrar departamento</button>
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