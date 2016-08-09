<?php /* Smarty version 2.6.20, created on 2016-01-11 23:37:49
         compiled from listaDepartamentos.html.tpl */ ?>
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
            <h3 align="left" style="color: white;">Listado de departamentos</h3>
            <h3 class="panel-title" align="left">Edita, elimina y agrega nuevos departamentos.</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <a href="formDepartamentosController.php" data-target="#myModal" data-toggle="modal" class="btn  btn-primary btn-block"><i class="fa fa-plus"></i> Nuevo departamento</a>
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
                                        <th>Descripción</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php unset($this->_sections['listaDepartamentos']);
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
                                    <tr>
                                        <td><?php echo $this->_tpl_vars['departamentos'][$this->_sections['listaDepartamentos']['index']]['id_departamento']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['departamentos'][$this->_sections['listaDepartamentos']['index']]['nombre_dept']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['departamentos'][$this->_sections['listaDepartamentos']['index']]['descripcion_dept']; ?>
</td>
                                        <td><a href="formDepartamentosController.php?id=<?php echo $this->_tpl_vars['departamentos'][$this->_sections['listaDepartamentos']['index']]['id_departamento']; ?>
" data-target="#myModal" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                        </td>
                                        <td>
                                            <a href="accionDepartamento.php?id=<?php echo $this->_tpl_vars['departamentos'][$this->_sections['listaDepartamentos']['index']]['id_departamento']; ?>
" onclick="return confirm('Seguro que desea eliminar este departamento')" class="btn btn-danger">
                                                <i class="fa fa-trash-o fa-lg"></i>Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php endfor; endif; ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
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
                            <h4 class="modal-title"><b></b>Departamentos</h4>
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