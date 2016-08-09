<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{$t}</title>

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
                    <a href="formUsuariosController.php" data-target="#myModal" data-toggle="modal" class="btn  btn-primary btn-block"><i class="fa fa-plus"></i> {$n}</a>
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
                                    {section name=listaUsuarios loop="$usuarios"}
                                    <tr>
                                        <td>{$usuarios[listaUsuarios].id_usuario}</td>
                                        <td>{$usuarios[listaUsuarios].nombre_usuario}</td>
                                        <td>{$usuarios[listaUsuarios].apaterno}</td>
                                        <td>{$usuarios[listaUsuarios].amaterno}</td>
                                        <td>{$usuarios[listaUsuarios].fnacimiento}</td>
                                        <td>{$usuarios[listaUsuarios].telefono}</td>
                                        <td>{$usuarios[listaUsuarios].correo}</td>
                                        <td>{$usuarios[listaUsuarios].usuario}</td>
                                        <td>{$usuarios[listaUsuarios].password}</td>
                                        <td>{$usuarios[listaUsuarios].id_tipo_usuario}</td>
                                        <td><a href="formUsuariosController.php?id={$usuarios[listaUsuarios].id_usuario}" data-target="#myModal" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil"></i> {$update}</a>
                                        </td>
                                        <td>
                                            <a href="accionUsuario.php?id={$usuarios[listaUsuarios].id_usuario}" onclick="return confirm('Seguro que desea eliminar este usuario')" class="btn btn-danger">
                                                <i class="fa fa-trash-o fa-lg"></i> {$delete}</a>
                                        </td>
                                    </tr>
                                    {/section}
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
                            <h4 class="modal-title"><b></b>{$t}</h4>
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