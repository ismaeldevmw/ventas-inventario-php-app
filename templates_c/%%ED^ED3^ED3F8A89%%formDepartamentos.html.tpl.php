<?php /* Smarty version 2.6.20, created on 2016-01-08 12:55:12
         compiled from formDepartamentos.html.tpl */ ?>
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
        <form name="editarDepartamentos" id="editarDepartamentos" action="accionDepartamento.php" method="post">
            <center>
                <legend>
                    <!--Editar departamento: <?php echo $this->_tpl_vars['id']; ?>
-->
                </legend>
            </center>

            <?php else: ?>
            <center>
                <legend>
                    <!--Nuevo departamento-->
                </legend>
            </center>
            <form name="registrarDepartamentos" id="registrarDepartamentos" action="accionDepartamento.php" method="post">
                <?php endif; ?>

                <center>
                    <table class="tbl-registro " width="70%">

                        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
                        <tr>
                            <td>NOMBRE: </td>
                            <td colspan="4" class="form-group has-error">
                                <input type="text" name="nombre" maxlength="35" required class="form-control input-sm" placeholder="nombre departamento" value="<?php echo $this->_tpl_vars['departamento'][$this->_sections['listaValores']['index']]['nombre_dept']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <td>DESCRIPCIÓN: </td>
                            <td colspan="4" class="form-group has-success">
                                <textarea class="form-control input-sm" rows="3" name="descripcion" maxlength="150"><?php echo $this->_tpl_vars['departamento'][$this->_sections['listaValores']['index']]['descripcion_dept']; ?>
</textarea>
                                <span class="help-block">Otras especificaciones que ayuden a describir el departamento</span>
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

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="edit_depto" value="editar"><i class="fa fa-check"></i> Editar departamento</button>
                            </td>
                            <?php else: ?>
                            <td class="col-md-4 col-md-offset-2">
                                <button type="button" class="btn btn-default btn-block btn-sm" colspan="12" data-dismiss="modal" onclick="recargar()"><i class="fa fa-times"></i> Cancelar</button>

                            </td>
                            <td class="col-md-4">

                                <button type="submit" class="btn btn-danger btn-block btn-sm" name="reg_depto" value="registrar"><i class="fa fa-check"></i> Registrar departamento</button>
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