<?php /* Smarty version 2.6.20, created on 2016-01-10 14:41:35
         compiled from formAgregarInventario.html.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'formAgregarInventario.html.tpl', 39, false),)), $this); ?>
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
        <form name="editarProductos" id="editarProductos" action="accionAgregarInventario.php" method="post">
            <center>
                <legend>
                    nombre: <?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['nombre_producto']; ?>
 existencias: <?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['existencias_prod']; ?>

                </legend>
            </center>

            <?php else: ?>
            <center>
                <legend>
                    <!--Nuevo producto-->
                </legend>
            </center>
            <form name="registrarProductos" id="registrarProductos" action="accionAgregarInventario.php" method="post">
                <?php endif; ?>

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">

                        <tr>
                            <td>STOCK: </td>
                            <td class="form-group has-error">
                                <!--<input type="number" name="existencias" min="1" max="100" class="form-control input-sm" required placeholder="existencias" value="<?php echo $this->_tpl_vars['producto'][$this->_sections['listaValores']['index']]['existencias_prod']; ?>
">-->
                                <select name="existencias" class="form-control">
                                    <option value="0"><?php echo $this->_tpl_vars['cust_msj']; ?>
</option>
                                    <option><?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['cust_ids'],'output' => $this->_tpl_vars['cust_ids'],'selected' => $this->_tpl_vars['customer_id']), $this);?>
</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <?php if ($this->_tpl_vars['modo'] == 'editar'): ?>
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_prod" value="editar"><i class="fa fa-check"></i> Guardar cambios</button>
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