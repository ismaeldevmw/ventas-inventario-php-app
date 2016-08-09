<?php /* Smarty version 2.6.20, created on 2016-01-08 13:26:26
         compiled from formConfiguracion.html.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $this->_tpl_vars['t']; ?>
</title>
</head>

<body>
    <div class="panel panel-primary" style="margin-top: 150px">
        <div class="panel-heading">
            <h3 align="left" style="color: white;">Configuración general</h3>
            <h3 class="panel-title" align="left">Editar datos de la tienda.</h3>
        </div>
        <div class="panel-body">

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
            <form name="editarTienda" id="editarTienda" action="accionConfiguracion.php" method="post">
                <center>
                    <legend>

                    </legend>
                </center>

                <?php else: ?>
                <center>
                    <legend>
                        <!--Nuevo departamento-->
                    </legend>
                </center>
                <form name="registrarTienda" id="registrarTienda" action="accionConfiguracion.php" method="post">
                    <?php endif; ?>

                    <center>
                        <table class="tbl-registro " width="70%">

                            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
                            <tr>
                                <td>NOMBRE TENDA: </td>
                                <td colspan="4" class="form-group ">
                                    <input type="text" name="nombre" maxlength="35" required class="form-control input-sm" placeholder="nombre departamento" value="<?php echo $this->_tpl_vars['tienda'][$this->_sections['listaValores']['index']]['nombre_tienda']; ?>
">
                                </td>
                            </tr>
                            <tr>
                                <td>RFC: </td>
                                <td colspan="4" class="form-group">
                                    <input pattern="[A-Za-z0-9]{<?php echo 10; ?>
}" title="RFC no valido verifique sus datos" name="rfc" maxlength="10" required class="form-control input-sm" placeholder="nombre departamento" value="<?php echo $this->_tpl_vars['tienda'][$this->_sections['listaValores']['index']]['rfc']; ?>
">
                                </td>
                            </tr>
                            <tr>
                                <td>DIRECCIÓN: </td>
                                <td colspan="4" class="form-group has-success">
                                    <textarea class="form-control input-sm" rows="3" name="direccion" maxlength="300"><?php echo $this->_tpl_vars['tienda'][$this->_sections['listaValores']['index']]['direccion']; ?>
</textarea>
                                    <span class="help-block">Especifique colonia, municipio etc.</span>
                                </td>
                            </tr>
                            <tr>
                                <td>C.P.: </td>
                                <td colspan="4" class="form-group">
                                    <input pattern="[0-9]{<?php echo 5; ?>
}" title="Debe insertar un Código Postal valido" name="cp" maxlength="5" required class="form-control input-sm" placeholder="nombre departamento" value="<?php echo $this->_tpl_vars['tienda'][$this->_sections['listaValores']['index']]['cod_postal']; ?>
">
                                </td>
                            </tr>
                            <tr>
                                <td>TELEFONO: </td>
                                <td colspan="4" class="form-group">
                                    <input type="text" name="telefono" maxlength="30" required class="form-control input-sm" placeholder="nombre departamento" value="<?php echo $this->_tpl_vars['tienda'][$this->_sections['listaValores']['index']]['telefono_tienda']; ?>
">
                                </td>
                            </tr>
                            <tr>
                                <td>CORREO: </td>
                                <td colspan="4" class="form-group">
                                    <input type="text" name="correo" maxlength="35" required class="form-control input-sm" placeholder="nombre departamento" value="<?php echo $this->_tpl_vars['tienda'][$this->_sections['listaValores']['index']]['correo']; ?>
">
                                </td>
                            </tr>
                        </table>
                        <legend></legend>
                        <table>
                            <tr>
                                <?php if ($this->_tpl_vars['modo'] == 'editar'): ?>

                                <td class="col-md-4">

                                    <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_tienda" value="editar"><i class="fa fa-check"></i> Guardar cambios</button>
                                </td>
                                <?php else: ?>
                                <td class="col-md-4">

                                    <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_tienda" value="registrar"><i class="fa fa-check"></i> Registrar datos</button>
                                </td>
                                <?php endif; ?>
                            </tr>
                        </table>


                    </center>
                    <?php endfor; endif; ?>

                </form>
            </form>
        </div>
    </div>
</body>

</html>