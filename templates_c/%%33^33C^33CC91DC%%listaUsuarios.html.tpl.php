<?php /* Smarty version 2.6.20, created on 2016-01-12 00:02:48
         compiled from listaUsuarios.html.tpl */ ?>
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
            <h3 align="left" style="color: white;">Listado de usuarios</h3>
            <h3 class="panel-title" align="left">Edita, elimina y agrega nuevos usuarios.</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <a href="formUsuariosController.php" data-target="#myModal" data-toggle="modal" class="btn  btn-primary btn-block"><i class="fa fa-plus"></i> <?php echo $this->_tpl_vars['n']; ?>
</a>
                </div>
            </div>
            <table border="0" align="center">
                <tr>
                    <td>
                        <div id="demo" style="margin-top: 50px">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>A. paterno</th>
                                        <th>A. materno</th>
                                        <th>F. nacimiento</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Tipo de usuario</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php unset($this->_sections['listaUsuarios']);
$this->_sections['listaUsuarios']['name'] = 'listaUsuarios';
$this->_sections['listaUsuarios']['loop'] = is_array($_loop=($this->_tpl_vars['usuarios'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['listaUsuarios']['show'] = true;
$this->_sections['listaUsuarios']['max'] = $this->_sections['listaUsuarios']['loop'];
$this->_sections['listaUsuarios']['step'] = 1;
$this->_sections['listaUsuarios']['start'] = $this->_sections['listaUsuarios']['step'] > 0 ? 0 : $this->_sections['listaUsuarios']['loop']-1;
if ($this->_sections['listaUsuarios']['show']) {
    $this->_sections['listaUsuarios']['total'] = $this->_sections['listaUsuarios']['loop'];
    if ($this->_sections['listaUsuarios']['total'] == 0)
        $this->_sections['listaUsuarios']['show'] = false;
} else
    $this->_sections['listaUsuarios']['total'] = 0;
if ($this->_sections['listaUsuarios']['show']):

            for ($this->_sections['listaUsuarios']['index'] = $this->_sections['listaUsuarios']['start'], $this->_sections['listaUsuarios']['iteration'] = 1;
                 $this->_sections['listaUsuarios']['iteration'] <= $this->_sections['listaUsuarios']['total'];
                 $this->_sections['listaUsuarios']['index'] += $this->_sections['listaUsuarios']['step'], $this->_sections['listaUsuarios']['iteration']++):
$this->_sections['listaUsuarios']['rownum'] = $this->_sections['listaUsuarios']['iteration'];
$this->_sections['listaUsuarios']['index_prev'] = $this->_sections['listaUsuarios']['index'] - $this->_sections['listaUsuarios']['step'];
$this->_sections['listaUsuarios']['index_next'] = $this->_sections['listaUsuarios']['index'] + $this->_sections['listaUsuarios']['step'];
$this->_sections['listaUsuarios']['first']      = ($this->_sections['listaUsuarios']['iteration'] == 1);
$this->_sections['listaUsuarios']['last']       = ($this->_sections['listaUsuarios']['iteration'] == $this->_sections['listaUsuarios']['total']);
?>
                                    <tr>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['id_usuario']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['nombre_usuario']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['apaterno']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['amaterno']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['fnacimiento']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['telefono']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['correo']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['usuario']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['password']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['id_tipo_usuario']; ?>
</td>
                                        <td><a href="formUsuariosController.php?id=<?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['id_usuario']; ?>
" data-target="#myModal" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil"></i> <?php echo $this->_tpl_vars['update']; ?>
</a>
                                        </td>
                                        <td>
                                            <a href="accionUsuario.php?id=<?php echo $this->_tpl_vars['usuarios'][$this->_sections['listaUsuarios']['index']]['id_usuario']; ?>
" onclick="return confirm('Seguro que desea eliminar este usuario')" class="btn btn-danger">
                                                <i class="fa fa-trash-o fa-lg"></i> <?php echo $this->_tpl_vars['delete']; ?>
</a>
                                        </td>
                                    </tr>
                                    <?php endfor; endif; ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>A. paterno</th>
                                        <th>A. materno</th>
                                        <th>F. nacimiento</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Tipo de usuario</th>
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
                            <h4 class="modal-title"><b></b><?php echo $this->_tpl_vars['t']; ?>
</h4>
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