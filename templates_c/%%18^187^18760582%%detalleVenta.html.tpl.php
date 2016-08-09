<?php /* Smarty version 2.6.20, created on 2016-01-10 08:22:20
         compiled from detalleVenta.html.tpl */ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?php echo $this->_tpl_vars['t']; ?>
</title>
    <?php echo '
    <style>
        body {
            background-color: #ffffff;
        }
    </style>
    '; ?>


</head>

<body>
    <div class="row-fluid" style=" margin-top: 150px;">
        <form name="detalle" id="detalle" class="form-horizontal" action="reporteDetalleVenta.php" method="post" accept-charset="UTF-8" autocomplete="off">


            <legend>Generar ticket de venta</legend>

            <fieldset>

                <div class="col-md-6">
                    <div>Seleccione el numero de venta:
                        <select class="col-md-2 form-control" autocomplete="off" name="id" required>
                            <?php unset($this->_sections['datosDetalle']);
$this->_sections['datosDetalle']['name'] = 'datosDetalle';
$this->_sections['datosDetalle']['loop'] = is_array($_loop=($this->_tpl_vars['ventas'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['datosDetalle']['show'] = true;
$this->_sections['datosDetalle']['max'] = $this->_sections['datosDetalle']['loop'];
$this->_sections['datosDetalle']['step'] = 1;
$this->_sections['datosDetalle']['start'] = $this->_sections['datosDetalle']['step'] > 0 ? 0 : $this->_sections['datosDetalle']['loop']-1;
if ($this->_sections['datosDetalle']['show']) {
    $this->_sections['datosDetalle']['total'] = $this->_sections['datosDetalle']['loop'];
    if ($this->_sections['datosDetalle']['total'] == 0)
        $this->_sections['datosDetalle']['show'] = false;
} else
    $this->_sections['datosDetalle']['total'] = 0;
if ($this->_sections['datosDetalle']['show']):

            for ($this->_sections['datosDetalle']['index'] = $this->_sections['datosDetalle']['start'], $this->_sections['datosDetalle']['iteration'] = 1;
                 $this->_sections['datosDetalle']['iteration'] <= $this->_sections['datosDetalle']['total'];
                 $this->_sections['datosDetalle']['index'] += $this->_sections['datosDetalle']['step'], $this->_sections['datosDetalle']['iteration']++):
$this->_sections['datosDetalle']['rownum'] = $this->_sections['datosDetalle']['iteration'];
$this->_sections['datosDetalle']['index_prev'] = $this->_sections['datosDetalle']['index'] - $this->_sections['datosDetalle']['step'];
$this->_sections['datosDetalle']['index_next'] = $this->_sections['datosDetalle']['index'] + $this->_sections['datosDetalle']['step'];
$this->_sections['datosDetalle']['first']      = ($this->_sections['datosDetalle']['iteration'] == 1);
$this->_sections['datosDetalle']['last']       = ($this->_sections['datosDetalle']['iteration'] == $this->_sections['datosDetalle']['total']);
?>
                            <option value="<?php echo $this->_tpl_vars['ventas'][$this->_sections['datosDetalle']['index']]['idventa']; ?>
" required><?php echo $this->_tpl_vars['ventas'][$this->_sections['datosDetalle']['index']]['idventa']; ?>
 </option>
                            <?php endfor; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-top: 19px;">
                        <input type="submit" class="btn btn-lg btn-success btn-block" name="generar" value="Generar ticket" formtarget="_blank">
                    </div>
                </div>



            </fieldset>
        </form>
        <div class="panel panel-info" style="margin-top: 50px">
            <div class="panel-heading">
                <h3 class="panel-title" align="left">Resumen ventas</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                    </div>
                </div>
                <table border="0" align="center" style="margin-left: 45px; margin-right: 30px;">
                    <tr>
                        <td>
                            <div id="demo" style="margin-top: 50px">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No. venta</th>
                                            <th>Cantidad de productos</th>
                                            <th>$ Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php unset($this->_sections['datosDetalleVentas']);
$this->_sections['datosDetalleVentas']['name'] = 'datosDetalleVentas';
$this->_sections['datosDetalleVentas']['loop'] = is_array($_loop=($this->_tpl_vars['ventas'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['datosDetalleVentas']['show'] = true;
$this->_sections['datosDetalleVentas']['max'] = $this->_sections['datosDetalleVentas']['loop'];
$this->_sections['datosDetalleVentas']['step'] = 1;
$this->_sections['datosDetalleVentas']['start'] = $this->_sections['datosDetalleVentas']['step'] > 0 ? 0 : $this->_sections['datosDetalleVentas']['loop']-1;
if ($this->_sections['datosDetalleVentas']['show']) {
    $this->_sections['datosDetalleVentas']['total'] = $this->_sections['datosDetalleVentas']['loop'];
    if ($this->_sections['datosDetalleVentas']['total'] == 0)
        $this->_sections['datosDetalleVentas']['show'] = false;
} else
    $this->_sections['datosDetalleVentas']['total'] = 0;
if ($this->_sections['datosDetalleVentas']['show']):

            for ($this->_sections['datosDetalleVentas']['index'] = $this->_sections['datosDetalleVentas']['start'], $this->_sections['datosDetalleVentas']['iteration'] = 1;
                 $this->_sections['datosDetalleVentas']['iteration'] <= $this->_sections['datosDetalleVentas']['total'];
                 $this->_sections['datosDetalleVentas']['index'] += $this->_sections['datosDetalleVentas']['step'], $this->_sections['datosDetalleVentas']['iteration']++):
$this->_sections['datosDetalleVentas']['rownum'] = $this->_sections['datosDetalleVentas']['iteration'];
$this->_sections['datosDetalleVentas']['index_prev'] = $this->_sections['datosDetalleVentas']['index'] - $this->_sections['datosDetalleVentas']['step'];
$this->_sections['datosDetalleVentas']['index_next'] = $this->_sections['datosDetalleVentas']['index'] + $this->_sections['datosDetalleVentas']['step'];
$this->_sections['datosDetalleVentas']['first']      = ($this->_sections['datosDetalleVentas']['iteration'] == 1);
$this->_sections['datosDetalleVentas']['last']       = ($this->_sections['datosDetalleVentas']['iteration'] == $this->_sections['datosDetalleVentas']['total']);
?>
                                        <tr>
                                            <td><?php echo $this->_tpl_vars['ventas'][$this->_sections['datosDetalleVentas']['index']]['idventa']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['ventas'][$this->_sections['datosDetalleVentas']['index']]['productos']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['ventas'][$this->_sections['datosDetalleVentas']['index']]['total']; ?>
</td>
                                        </tr>
                                        <?php endfor; endif; ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>No. venta</th>
                                            <th>Cantidad de productos</th>
                                            <th>$ Total</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>