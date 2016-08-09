<?php /* Smarty version 2.6.20, created on 2016-01-04 22:24:46
         compiled from listaTiendas.html.tpl */ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?php echo $this->_tpl_vars['t']; ?>
</title>

</head>

<body>
    <div class="panel panel-primary" style="margin-top: 150px">
        <div class="panel-heading">
            <h3 class="panel-title" align="left">Configuración general tiendas</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <a href="formConfiguracionController.php" data-target="#myModal" data-toggle="modal" class="btn  btn-primary btn-block"><i class="fa fa-plus"></i> Nueva tienda</a>
                </div>
            </div>
            <table border="0" align="center" style="margin-left: 45px; margin-right: 30px;">
                <tr>
                    <td>
                        <div id="demo" style="margin-top: 50px">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>RFC</th>
                                        <th>Dirección</th>
                                        <th>C.P.</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php unset($this->_sections['listaTiendas']);
$this->_sections['listaTiendas']['name'] = 'listaTiendas';
$this->_sections['listaTiendas']['show'] = true;
$this->_sections['listaTiendas']['loop'] = 1;
$this->_sections['listaTiendas']['max'] = $this->_sections['listaTiendas']['loop'];
$this->_sections['listaTiendas']['step'] = 1;
$this->_sections['listaTiendas']['start'] = $this->_sections['listaTiendas']['step'] > 0 ? 0 : $this->_sections['listaTiendas']['loop']-1;
if ($this->_sections['listaTiendas']['show']) {
    $this->_sections['listaTiendas']['total'] = $this->_sections['listaTiendas']['loop'];
    if ($this->_sections['listaTiendas']['total'] == 0)
        $this->_sections['listaTiendas']['show'] = false;
} else
    $this->_sections['listaTiendas']['total'] = 0;
if ($this->_sections['listaTiendas']['show']):

            for ($this->_sections['listaTiendas']['index'] = $this->_sections['listaTiendas']['start'], $this->_sections['listaTiendas']['iteration'] = 1;
                 $this->_sections['listaTiendas']['iteration'] <= $this->_sections['listaTiendas']['total'];
                 $this->_sections['listaTiendas']['index'] += $this->_sections['listaTiendas']['step'], $this->_sections['listaTiendas']['iteration']++):
$this->_sections['listaTiendas']['rownum'] = $this->_sections['listaTiendas']['iteration'];
$this->_sections['listaTiendas']['index_prev'] = $this->_sections['listaTiendas']['index'] - $this->_sections['listaTiendas']['step'];
$this->_sections['listaTiendas']['index_next'] = $this->_sections['listaTiendas']['index'] + $this->_sections['listaTiendas']['step'];
$this->_sections['listaTiendas']['first']      = ($this->_sections['listaTiendas']['iteration'] == 1);
$this->_sections['listaTiendas']['last']       = ($this->_sections['listaTiendas']['iteration'] == $this->_sections['listaTiendas']['total']);
?>
                                    <tr>
                                        <td><?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['ID_DATOS_TIENDA']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['NOMBRE_TIENDA']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['RFC']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['DIRECCION']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['COD_POSTAL']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['TELEFONO_TIENDA']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['CORREO']; ?>
</td>
                                        <td><a href="formConfiguracionController.php?id=<?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['ID_DATOS_TIENDA']; ?>
" data-target="#myModal" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                        </td>
                                        <td>
                                            <a href="listaTiendasController.php?id=<?php echo $this->_tpl_vars['tiendas'][$this->_sections['listaTiendas']['index']]['ID_DATOS_TIENDA']; ?>
" onclick="return confirm('Seguro que desea eliminar esta tienda')" class="btn btn-danger">
                                                <i class="fa fa-trash-o fa-lg"></i>Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php endfor; endif; ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>RFC</th>
                                        <th>Dirección</th>
                                        <th>C.P.</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="recargar()">&times;</button>
                            <h4 class="modal-title"><b></b>Tiendas</h4>
                        </div>
                        <div class="modal-body ">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>