<?php /* Smarty version 2.6.20, created on 2015-12-08 00:04:39
         compiled from mail/formPHPMailer.html.tpl */ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario de contacto con PHP + HTML y SMTP de Google</title>
</head>


<body>
   <center>
    <table border="0" align="center">
        <tr>
            <td>
                <div class="container" style="margin-top: 100px;">
                    
                        <div class="row-fluid">
                            <form action="formCorreoController.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    

                                    <div class="form-group">
                                       <div class="col-lg-6 col-md-offset-4">
                                       <legend>Formulario de Contacto</legend>
                                        <label for="ContactName">E-mail</label>
                                        <input name="email" id="email" type="email" maxlength="255" value="" required class="form-control" />
                                        <label for="ContactRecipient">Asunto</label>
                                        <input name="asunto" id="asunto" type="text" value="" required class="form-control" />
                                        <br>
                                        <label for="ContactMessage">Mensaje</label>
                                        <textarea name="mensaje" id="mensaje" cols="1" rows="4" required class="form-control"></textarea>
                                        <label for="adjunto">Adjuntar archivo</label>
                                        <input type="file" name="archivo" id="archivo">
                                        <br>
                                        <div class="col-lg-2 col-md-offset-8">
                                        <input class="btn btn-primary align-right" type="submit" name="envia_correo" value="Enviar correo" />
                                           </div>
                                        </div>
                                    </div>                                    
                                </fieldset>
                            </form>
                        </div>                    
                </div>
            </td>
        </tr>
    </table>
    </center>

</body>

</html>