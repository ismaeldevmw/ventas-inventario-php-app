<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$t}</title>
</head>

<body>
    <div class="row-fluid">
        {section name=listaValores} {if $modo eq "editar"}
        <form name="editarUsuarios" id="editarUsuarios" action="accionUsuario.php" method="post">
            <center>
                <legend>
                    <!--Editar usuario: {$id}-->
                </legend>
            </center>

            {else}
            <center>
                <legend>
                    <!--Nuevo usuario-->
                </legend>
            </center>
            <form name="registrarUsuarios" id="registrarUsuarios" action="accionUsuario.php" method="post">
                {/if}

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="{$id}">

                        <tr>
                            <td>NOMBRE: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="nombre" maxlength="30" required class="form-control input-sm" placeholder="nombre" value="{$usuario[listaValores].nombre_usuario}">
                            </td>
                        </tr>
                        <tr>
                            <td>PATERNO: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="apaterno" maxlength="30" required class="form-control input-sm" placeholder="apellido paterno" value="{$usuario[listaValores].apaterno}">
                            </td>
                        </tr>
                        <tr>
                            <td>MATERNO: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="amaterno" maxlength="30" required class="form-control input-sm" placeholder="apellido materno" value="{$usuario[listaValores].amaterno}">
                            </td>
                        </tr>
                        <tr>
                            <td>F. NACIMIENTO: </td>
                            <td class="form-group has-error">
                                <input type="date" name="fnacimiento" required class="form-control input-sm" placeholder="fecha de nacimiento" value="{$usuario[listaValores].fnacimiento}">
                            </td>
                        </tr>
                        <tr>
                            <td>TELEFONO: </td>
                            <td class="form-group has-error">
                                <input type="tel" name="telefono" maxlength="15" required class="form-control input-sm" placeholder="telefono" value="{$usuario[listaValores].telefono}">
                            </td>
                        </tr>
                        <tr>
                            <tr>
                                <td>CORREO: </td>
                                <td class="form-group has-error">
                                    <input type="email" name="correo" maxlength="35" required class="form-control input-sm" placeholder="correo electrónico" value="{$usuario[listaValores].correo}">
                                </td>
                            </tr>
                            <tr>
                                <td>USUARIO: </td>
                                <td class="form-group has-error">
                                    <input type="text" name="usuario" maxlength="30" required class="form-control input-sm" placeholder="nombre de usuario" value="{$usuario[listaValores].usuario}">
                                </td>
                            </tr>
                            <tr>
                                <td>CONTRASEÑA: </td>
                                <td class="form-group has-error">
                                    <input type="password" name="password" maxlength="30" required class="form-control input-sm" placeholder="contraseña de usuario" value="{$usuario[listaValores].password}">
                                </td>
                            </tr>
                            <tr>
                                <td>TIPO: </td>
                                <td class="form-group has-error">
                                    <select class="form-control input-sm" name="tipo" required placeholder="tipo de usuario">
                                        {section name=datosT loop="$datostipo"}
                                        <option value="{$datostipo[datosT].id_tipo_usuario}" selected>{$datostipo[datosT].rol}</option>
                                        {/section} {section name=listaTipos loop="$tipos"}
                                        <option value="{$tipos[listaTipos].id_tipo_usuario}" required>{$tipos[listaTipos].rol}</option>
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

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_usuario" value="editar"><i class="fa fa-check"></i> Editar usuario</button>
                            </td>
                            {else}
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_usuario" value="registrar"><i class="fa fa-check"></i> Registrar usuario</button>
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