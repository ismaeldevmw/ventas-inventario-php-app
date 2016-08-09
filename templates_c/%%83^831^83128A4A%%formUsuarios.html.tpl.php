<?php /* Smarty version 2.6.20, created on 2016-01-12 00:47:50
         compiled from formUsuarios.html.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $this->_tpl_vars['t']; ?>
</title>
</head>

<body>
    <div class="row-fluid">
        <?php unset($this->_sections['listaValores']);
$this->_sections['listaValores']['name'] = 'listaValores';
$this->_sections['listaValores']['show'] = true;
$this->_sections['listaValores']['loop'] = 1;
$this->_sections['listaValores']['max'] = $this->_sections['listaValores']['loop'];
$this->_sections['listaValores']['step'] = 1;
$this->_sections['listaValores']['start'] = $this->_sections['listaValores']['step'] > 0 ? 0 : $this->_sections['listaValores']['loop']-1;
if ($this->_sections['listaValores']['show']) {
    $this->_sections['listaValores']['total'] = $this->_sections['listaValores']['loop'];
    if ($this->_sections['listaValores']['total'] == 0)
        $this->_sections['listaValores']['show'] = false;
} else
    $this->_sections['listaValores']['total'] = 0;
if ($this->_sections['listaValores']['show']):

            for ($this->_sections['listaValores']['index'] = $this->_sections['listaValores']['start'], $this->_sections['listaValores']['iteration'] = 1;
                 $this->_sections['listaValores']['iteration'] <= $this->_sections['listaValores']['total'];
                 $this->_sections['listaValores']['index'] += $this->_sections['listaValores']['step'], $this->_sections['listaValores']['iteration']++):
$this->_sections['listaValores']['rownum'] = $this->_sections['listaValores']['iteration'];
$this->_sections['listaValores']['index_prev'] = $this->_sections['listaValores']['index'] - $this->_sections['listaValores']['step'];
$this->_sections['listaValores']['index_next'] = $this->_sections['listaValores']['index'] + $this->_sections['listaValores']['step'];
$this->_sections['listaValores']['first']      = ($this->_sections['listaValores']['iteration'] == 1);
$this->_sections['listaValores']['last']       = ($this->_sections['listaValores']['iteration'] == $this->_sections['listaValores']['total']);
?> <?php if ($this->_tpl_vars['modo'] == 'editar'): ?>
        <form name="editarUsuarios" id="editarUsuarios" action="accionUsuario.php" method="post">
            <center>
                <legend>
                    <!--Editar usuario: <?php echo $this->_tpl_vars['id']; ?>
-->
                </legend>
            </center>

            <?php else: ?>
            <center>
                <legend>
                    <!--Nuevo usuario-->
                </legend>
            </center>
            <form name="registrarUsuarios" id="registrarUsuarios" action="accionUsuario.php" method="post">
                <?php endif; ?>

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">

                        <tr>
                            <td>NOMBRE: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="nombre" maxlength="30" required class="form-control input-sm" placeholder="nombre" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['nombre_usuario']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>PATERNO: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="apaterno" maxlength="30" required class="form-control input-sm" placeholder="apellido paterno" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['apaterno']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>MATERNO: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="amaterno" maxlength="30" required class="form-control input-sm" placeholder="apellido materno" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['amaterno']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>F. NACIMIENTO: </td>
                            <td class="form-group has-error">
                                <input type="date" name="fnacimiento" required class="form-control input-sm" placeholder="fecha de nacimiento" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['fnacimiento']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>TELEFONO: </td>
                            <td class="form-group has-error">
                                <input type="tel" name="telefono" maxlength="15" required class="form-control input-sm" placeholder="telefono" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['telefono']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <tr>
                                <td>CORREO: </td>
                                <td class="form-group has-error">
                                    <input type="email" name="correo" maxlength="35" required class="form-control input-sm" placeholder="correo electrónico" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['correo']; ?>
">
                                </td>
                            </tr>
                            <tr>
                                <td>USUARIO: </td>
                                <td class="form-group has-error">
                                    <input type="text" name="usuario" maxlength="30" required class="form-control input-sm" placeholder="nombre de usuario" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['usuario']; ?>
">
                                </td>
                            </tr>
                            <tr>
                                <td>CONTRASEÑA: </td>
                                <td class="form-group has-error">
                                    <input type="password" name="password" maxlength="30" required class="form-control input-sm" placeholder="contraseña de usuario" value="<?php echo $this->_tpl_vars['usuario'][$this->_sections['listaValores']['index']]['password']; ?>
">
                                </td>
                            </tr>
                            <tr>
                                <td>TIPO: </td>
                                <td class="form-group has-error">
                                    <select class="form-control input-sm" name="tipo" required placeholder="tipo de usuario">
                                        <?php unset($this->_sections['datosT']);
$this->_sections['datosT']['name'] = 'datosT';
$this->_sections['datosT']['loop'] = is_array($_loop=($this->_tpl_vars['datostipo'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['datosT']['show'] = true;
$this->_sections['datosT']['max'] = $this->_sections['datosT']['loop'];
$this->_sections['datosT']['step'] = 1;
$this->_sections['datosT']['start'] = $this->_sections['datosT']['step'] > 0 ? 0 : $this->_sections['datosT']['loop']-1;
if ($this->_sections['datosT']['show']) {
    $this->_sections['datosT']['total'] = $this->_sections['datosT']['loop'];
    if ($this->_sections['datosT']['total'] == 0)
        $this->_sections['datosT']['show'] = false;
} else
    $this->_sections['datosT']['total'] = 0;
if ($this->_sections['datosT']['show']):

            for ($this->_sections['datosT']['index'] = $this->_sections['datosT']['start'], $this->_sections['datosT']['iteration'] = 1;
                 $this->_sections['datosT']['iteration'] <= $this->_sections['datosT']['total'];
                 $this->_sections['datosT']['index'] += $this->_sections['datosT']['step'], $this->_sections['datosT']['iteration']++):
$this->_sections['datosT']['rownum'] = $this->_sections['datosT']['iteration'];
$this->_sections['datosT']['index_prev'] = $this->_sections['datosT']['index'] - $this->_sections['datosT']['step'];
$this->_sections['datosT']['index_next'] = $this->_sections['datosT']['index'] + $this->_sections['datosT']['step'];
$this->_sections['datosT']['first']      = ($this->_sections['datosT']['iteration'] == 1);
$this->_sections['datosT']['last']       = ($this->_sections['datosT']['iteration'] == $this->_sections['datosT']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['datostipo'][$this->_sections['datosT']['index']]['id_tipo_usuario']; ?>
" selected><?php echo $this->_tpl_vars['datostipo'][$this->_sections['datosT']['index']]['rol']; ?>
</option>
                                        <?php endfor; endif; ?> <?php unset($this->_sections['listaTipos']);
$this->_sections['listaTipos']['name'] = 'listaTipos';
$this->_sections['listaTipos']['loop'] = is_array($_loop=($this->_tpl_vars['tipos'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['listaTipos']['show'] = true;
$this->_sections['listaTipos']['max'] = $this->_sections['listaTipos']['loop'];
$this->_sections['listaTipos']['step'] = 1;
$this->_sections['listaTipos']['start'] = $this->_sections['listaTipos']['step'] > 0 ? 0 : $this->_sections['listaTipos']['loop']-1;
if ($this->_sections['listaTipos']['show']) {
    $this->_sections['listaTipos']['total'] = $this->_sections['listaTipos']['loop'];
    if ($this->_sections['listaTipos']['total'] == 0)
        $this->_sections['listaTipos']['show'] = false;
} else
    $this->_sections['listaTipos']['total'] = 0;
if ($this->_sections['listaTipos']['show']):

            for ($this->_sections['listaTipos']['index'] = $this->_sections['listaTipos']['start'], $this->_sections['listaTipos']['iteration'] = 1;
                 $this->_sections['listaTipos']['iteration'] <= $this->_sections['listaTipos']['total'];
                 $this->_sections['listaTipos']['index'] += $this->_sections['listaTipos']['step'], $this->_sections['listaTipos']['iteration']++):
$this->_sections['listaTipos']['rownum'] = $this->_sections['listaTipos']['iteration'];
$this->_sections['listaTipos']['index_prev'] = $this->_sections['listaTipos']['index'] - $this->_sections['listaTipos']['step'];
$this->_sections['listaTipos']['index_next'] = $this->_sections['listaTipos']['index'] + $this->_sections['listaTipos']['step'];
$this->_sections['listaTipos']['first']      = ($this->_sections['listaTipos']['iteration'] == 1);
$this->_sections['listaTipos']['last']       = ($this->_sections['listaTipos']['iteration'] == $this->_sections['listaTipos']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['tipos'][$this->_sections['listaTipos']['index']]['id_tipo_usuario']; ?>
" required><?php echo $this->_tpl_vars['tipos'][$this->_sections['listaTipos']['index']]['rol']; ?>
</option>
                                        <?php endfor; endif; ?>
                                    </select>
                                </td>
                            </tr>
                    </table>
                    <legend></legend>
                    <table>
                        <tr>
                            <?php if ($this->_tpl_vars['modo'] == 'editar'): ?>
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_usuario" value="editar"><i class="fa fa-check"></i> Editar usuario</button>
                            </td>
                            <?php else: ?>
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_usuario" value="registrar"><i class="fa fa-check"></i> Registrar usuario</button>
                            </td>
                            <?php endif; ?>
                        </tr>
                    </table>


                </center>
                <?php endfor; endif; ?>

            </form>
        </form>
    </div>


</body>

</html>