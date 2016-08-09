<?php /* Smarty version 2.6.20, created on 2016-01-08 13:58:41
         compiled from formProductos.html.tpl */ ?>
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
        <form name="editarProductos" id="editarProductos" action="accionProducto.php" method="post">
            <center>
                <legend>
                    <!--Editar producto: <?php echo $this->_tpl_vars['id']; ?>
-->
                </legend>
            </center>

            <?php else: ?>
            <center>
                <legend>
                    <!--Nuevo producto-->
                </legend>
            </center>
            <form name="registrarProductos" id="registrarProductos" action="accionProducto.php" method="post">
                <?php endif; ?>

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
                        <tr>
                            <td>CÓDIGO: </td>
                            <td colspan="2" class="form-group has-error">
                                <input pattern="[0-9]{<?php echo 5; ?>
}" title="inserte los 5 números del UPC" name="codigo" maxlength="5" required class="form-control input-sm" placeholder="UPC" value="<?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['codigo_producto']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>NOMBRE: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="nombre" maxlength="35" required class="form-control input-sm" placeholder="nombre producto" value="<?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['nombre_producto']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>$ UNITARIO </td>
                            <td class="form-group has-error">
                                <input pattern="[0-9]+.[0-9]" title="Ejemplo 43.0" name="preciou" maxlength="5" required class="form-control input-sm" placeholder="Precio unitario" value="<?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['precio_u']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>$ VENTA </td>
                            <td class="form-group has-error">
                                <input pattern="[0-9]+.[0-9]" title="Ejemplo 43.0" name="preciov" maxlength="5" required class="form-control input-sm" placeholder="Precio venta" value="<?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['precio']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>DESCRIPCIÓN: </td>
                            <td colspan="4" class="form-group has-success">
                                <textarea class="form-control input-sm" rows="3" name="descripcion" maxlength="50" placeholder=""><?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['descripcion']; ?>
</textarea>
                                <span class="help-block">Otras especificaciones que ayuden a describir el producto</span>
                            </td>
                        </tr>
                        <tr>
                            <td>STOCK: </td>
                            <td class="form-group has-error">
                                <input type="number" name="existencias" min="1" max="100" class="form-control input-sm" required placeholder="existencias" value="<?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['existencias_prod']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>DEPTO: </td>
                            <td class="form-group has-error">
                                <select class="form-control input-sm" name="departamento" required>
                                    <?php unset($this->_sections['datosDepartamento']);
$this->_sections['datosDepartamento']['name'] = 'datosDepartamento';
$this->_sections['datosDepartamento']['loop'] = is_array($_loop=($this->_tpl_vars['datosdept'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['datosDepartamento']['show'] = true;
$this->_sections['datosDepartamento']['max'] = $this->_sections['datosDepartamento']['loop'];
$this->_sections['datosDepartamento']['step'] = 1;
$this->_sections['datosDepartamento']['start'] = $this->_sections['datosDepartamento']['step'] > 0 ? 0 : $this->_sections['datosDepartamento']['loop']-1;
if ($this->_sections['datosDepartamento']['show']) {
    $this->_sections['datosDepartamento']['total'] = $this->_sections['datosDepartamento']['loop'];
    if ($this->_sections['datosDepartamento']['total'] == 0)
        $this->_sections['datosDepartamento']['show'] = false;
} else
    $this->_sections['datosDepartamento']['total'] = 0;
if ($this->_sections['datosDepartamento']['show']):

            for ($this->_sections['datosDepartamento']['index'] = $this->_sections['datosDepartamento']['start'], $this->_sections['datosDepartamento']['iteration'] = 1;
                 $this->_sections['datosDepartamento']['iteration'] <= $this->_sections['datosDepartamento']['total'];
                 $this->_sections['datosDepartamento']['index'] += $this->_sections['datosDepartamento']['step'], $this->_sections['datosDepartamento']['iteration']++):
$this->_sections['datosDepartamento']['rownum'] = $this->_sections['datosDepartamento']['iteration'];
$this->_sections['datosDepartamento']['index_prev'] = $this->_sections['datosDepartamento']['index'] - $this->_sections['datosDepartamento']['step'];
$this->_sections['datosDepartamento']['index_next'] = $this->_sections['datosDepartamento']['index'] + $this->_sections['datosDepartamento']['step'];
$this->_sections['datosDepartamento']['first']      = ($this->_sections['datosDepartamento']['iteration'] == 1);
$this->_sections['datosDepartamento']['last']       = ($this->_sections['datosDepartamento']['iteration'] == $this->_sections['datosDepartamento']['total']);
?>
                                    <option value="<?php echo $this->_tpl_vars['datosdept'][$this->_sections['datosDepartamento']['index']]['id_departamento']; ?>
" selected><?php echo $this->_tpl_vars['datosdept'][$this->_sections['datosDepartamento']['index']]['nombre_dept']; ?>
</option>
                                    <?php endfor; endif; ?> <?php unset($this->_sections['listaDepartamentos']);
$this->_sections['listaDepartamentos']['name'] = 'listaDepartamentos';
$this->_sections['listaDepartamentos']['loop'] = is_array($_loop=($this->_tpl_vars['departamentos'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['listaDepartamentos']['show'] = true;
$this->_sections['listaDepartamentos']['max'] = $this->_sections['listaDepartamentos']['loop'];
$this->_sections['listaDepartamentos']['step'] = 1;
$this->_sections['listaDepartamentos']['start'] = $this->_sections['listaDepartamentos']['step'] > 0 ? 0 : $this->_sections['listaDepartamentos']['loop']-1;
if ($this->_sections['listaDepartamentos']['show']) {
    $this->_sections['listaDepartamentos']['total'] = $this->_sections['listaDepartamentos']['loop'];
    if ($this->_sections['listaDepartamentos']['total'] == 0)
        $this->_sections['listaDepartamentos']['show'] = false;
} else
    $this->_sections['listaDepartamentos']['total'] = 0;
if ($this->_sections['listaDepartamentos']['show']):

            for ($this->_sections['listaDepartamentos']['index'] = $this->_sections['listaDepartamentos']['start'], $this->_sections['listaDepartamentos']['iteration'] = 1;
                 $this->_sections['listaDepartamentos']['iteration'] <= $this->_sections['listaDepartamentos']['total'];
                 $this->_sections['listaDepartamentos']['index'] += $this->_sections['listaDepartamentos']['step'], $this->_sections['listaDepartamentos']['iteration']++):
$this->_sections['listaDepartamentos']['rownum'] = $this->_sections['listaDepartamentos']['iteration'];
$this->_sections['listaDepartamentos']['index_prev'] = $this->_sections['listaDepartamentos']['index'] - $this->_sections['listaDepartamentos']['step'];
$this->_sections['listaDepartamentos']['index_next'] = $this->_sections['listaDepartamentos']['index'] + $this->_sections['listaDepartamentos']['step'];
$this->_sections['listaDepartamentos']['first']      = ($this->_sections['listaDepartamentos']['iteration'] == 1);
$this->_sections['listaDepartamentos']['last']       = ($this->_sections['listaDepartamentos']['iteration'] == $this->_sections['listaDepartamentos']['total']);
?>
                                    <option value="<?php echo $this->_tpl_vars['departamentos'][$this->_sections['listaDepartamentos']['index']]['id_departamento']; ?>
" required><?php echo $this->_tpl_vars['departamentos'][$this->_sections['listaDepartamentos']['index']]['nombre_dept']; ?>
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

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_prod" value="editar"><i class="fa fa-check"></i> Editar producto</button>
                            </td>
                            <?php else: ?>
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_prod" value="registrar"><i class="fa fa-check"></i> Registrar producto</button>
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