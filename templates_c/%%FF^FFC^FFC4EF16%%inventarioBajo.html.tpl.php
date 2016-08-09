<?php /* Smarty version 2.6.20, created on 2016-01-08 14:35:06
         compiled from inventarioBajo.html.tpl */ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?php echo $this->_tpl_vars['t']; ?>
</title>

</head>

<body>
    <div class="panel panel-info" style="margin-top: 150px; ">
        <div class="panel-heading">
            <h3 align="left" style="color: white;">Inventario bajo</h3>
            <h3 class="panel-title" align="left"></h3>
        </div>
        <br>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <a href="reporteInventarioBajo.php" data-toggle="tooltip" data-placement="top" title="Generar PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x"></i> </a>Generar reporte de inventario bajo
                </div>
            </div>
            <table border="0" align="center" style="margin-left: 45px; margin-right: 30px;">
                <tr>
                    <td>
                        <div id="demo" style="margin-top: 50px">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">

                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Existencias</th>
                                        <th>Departamento</th>
                                        <th> unitario</th>
                                        <th> venta</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php unset($this->_sections['listaProductos']);
$this->_sections['listaProductos']['name'] = 'listaProductos';
$this->_sections['listaProductos']['loop'] = is_array($_loop=($this->_tpl_vars['productos'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['listaProductos']['show'] = true;
$this->_sections['listaProductos']['max'] = $this->_sections['listaProductos']['loop'];
$this->_sections['listaProductos']['step'] = 1;
$this->_sections['listaProductos']['start'] = $this->_sections['listaProductos']['step'] > 0 ? 0 : $this->_sections['listaProductos']['loop']-1;
if ($this->_sections['listaProductos']['show']) {
    $this->_sections['listaProductos']['total'] = $this->_sections['listaProductos']['loop'];
    if ($this->_sections['listaProductos']['total'] == 0)
        $this->_sections['listaProductos']['show'] = false;
} else
    $this->_sections['listaProductos']['total'] = 0;
if ($this->_sections['listaProductos']['show']):

            for ($this->_sections['listaProductos']['index'] = $this->_sections['listaProductos']['start'], $this->_sections['listaProductos']['iteration'] = 1;
                 $this->_sections['listaProductos']['iteration'] <= $this->_sections['listaProductos']['total'];
                 $this->_sections['listaProductos']['index'] += $this->_sections['listaProductos']['step'], $this->_sections['listaProductos']['iteration']++):
$this->_sections['listaProductos']['rownum'] = $this->_sections['listaProductos']['iteration'];
$this->_sections['listaProductos']['index_prev'] = $this->_sections['listaProductos']['index'] - $this->_sections['listaProductos']['step'];
$this->_sections['listaProductos']['index_next'] = $this->_sections['listaProductos']['index'] + $this->_sections['listaProductos']['step'];
$this->_sections['listaProductos']['first']      = ($this->_sections['listaProductos']['iteration'] == 1);
$this->_sections['listaProductos']['last']       = ($this->_sections['listaProductos']['iteration'] == $this->_sections['listaProductos']['total']);
?>
                                    <tr>
                                        <td><?php echo $this->_tpl_vars['productos'][$this->_sections['listaProductos']['index']]['codigo_producto']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['productos'][$this->_sections['listaProductos']['index']]['nombre_producto']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['productos'][$this->_sections['listaProductos']['index']]['descripcion']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['productos'][$this->_sections['listaProductos']['index']]['existencias_prod']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['productos'][$this->_sections['listaProductos']['index']]['id_departamento']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['productos'][$this->_sections['listaProductos']['index']]['precio_u']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['productos'][$this->_sections['listaProductos']['index']]['precio']; ?>
</td>
                                    </tr>
                                    <?php endfor; endif; ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Existencias</th>
                                        <th>Departamento</th>
                                        <th> unitario</th>
                                        <th> venta</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>