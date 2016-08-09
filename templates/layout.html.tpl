<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>{$t}</title>
</head>

<body>
    <table border="0" align="center">
        <tr>
            <td>{include file="header.html.tpl"}</td>
        </tr>
    </table>

    <div class="col-md-1"></div>
    <div class="col-md-10" align="center">
        {$ajax}{include file="$contenido"}
    </div>
    <div class="col-md-1"></div>

    <table border="0" align="center">
        <tr>
            <td>{include file="footer.html.tpl"}</td>
        </tr>
    </table>
</body>

</html>