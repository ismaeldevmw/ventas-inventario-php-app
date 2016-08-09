<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{$t}</title>
    {literal}
    <style>
        body {
            background-color: #ffffff;
        }
    </style>
    {/literal}

</head>

<body>
    <div class="row-fluid" style=" margin-top: 150px;">
        <form name="detalle" id="detalle" class="form-horizontal" action="reporteDetalleVenta.php" method="post" accept-charset="UTF-8" autocomplete="off">


            <legend>Generar ticket de venta</legend>

            <fieldset>

                <div class="col-md-6">
                    <div>Seleccione el numero de venta:
                        <select class="col-md-2 form-control" autocomplete="off" name="id" required>
                            {section name=datosDetalle loop="$ventas"}
                            <option value="{$ventas[datosDetalle].idventa}" required>{$ventas[datosDetalle].idventa} </option>
                            {/section}
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
                                        {section name=datosDetalleVentas loop="$ventas"}
                                        <tr>
                                            <td>{$ventas[datosDetalleVentas].idventa}</td>
                                            <td>{$ventas[datosDetalleVentas].productos}</td>
                                            <td>{$ventas[datosDetalleVentas].total}</td>
                                        </tr>
                                        {/section}
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