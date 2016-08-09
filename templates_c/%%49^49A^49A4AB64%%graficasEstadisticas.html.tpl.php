<?php /* Smarty version 2.6.20, created on 2016-01-07 17:59:24
         compiled from graficasEstadisticas.html.tpl */ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario de contacto con PHP + HTML y SMTP de Google</title>
    <?php echo '
    <script>
        $(document).ready(function () {
            $("#enlaceajax").click(function (evento) {
                evento.preventDefault();
                $("#destino").load(".\\libs\\Highcharts-4.2.1\\contenido-ajax.html")
            });
        })
    </script>
    '; ?>

</head>

<body>


    <center>
        <div class="panel panel-primary" style="margin-top: 150px">
            <div class="panel-heading">
                <h3 class="panel-title" align="left">Formulario de contacto</h3>
            </div>
            <div class="panel-body">
                <a href="#" id="enlaceajax">Haz clic!</a>
                <br>
                <div id="destino"></div>
            </div>
        </div>
    </center>

</body>

</html>