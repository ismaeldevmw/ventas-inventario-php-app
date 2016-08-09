<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inicio de sesion || TESCHA </title>
    <meta name="description" content="Simple ideas for enhancing text input interactions" />
    <meta name="keywords" content="input, text, effect, focus, transition, interaction, inspiration, web design" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="inicio_de_sesion/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="inicio_de_sesion/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="inicio_de_sesion/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="inicio_de_sesion/css/set2.css" />
    <script src="js/jquery-1.3.1.min.js" type="text/javascript"></script>
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <script>
        function validarForm() {
            $(document).ready(function () {
                if ($("#usuario").val() == "" && $("#password").val() == "") {
                    alert("Formulario Vacio");
                } else {
                    if ($("#usuario").val() == "") {
                        alert("Introduce Usuario");
                        $("#usuario").focus()
                    }
                    if ($("#password").val() == "") {
                        alert("Introduce Password");
                        $("#password").focus()
                    }
                }
            });
            return false;
        }
    </script>



</head>

<body>
    <div class="container">
        <header class="codrops-header">

            <h1>inicio  <span> Control de venta e invetario  </span></h1>
            <nav class="codrops-demos">

            </nav>
        </header>
        <form method="post" action="autentificar.php">
            <section class="content bgcolor-3">

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text"  id="usuario" name="usuario" />
                    <label class="input__label input__label--nao" for="input-2">
                        <span class="input__label-content input__label-content--nao">Usuario  </span>
                </label>
                <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0" />
                </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="password"  id="password" name="password" />
                    <label class="input__label input__label--nao" for="input-3">
                        <span class="input__label-content input__label-content--nao">C o n t r a s e ñ a  </span>
                </label>
                <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0" />
                </svg>
                </span>
                <br>
                <td>
                    <input type="submit" name="ingresar" id="ingresar" value="Ingresar" onClick="validarForm()" />
                </td>

            </section>


        </form>
        <script src="js/classie.js"></script>
        <script>
            (function () {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function () {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function () {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
                    // in case the input is already filled..
                    if (inputEl.value.trim() !== '') {
                        classie.add(inputEl.parentNode, 'input--filled');
                    }

                    // events:
                    inputEl.addEventListener('focus', onInputFocus);
                    inputEl.addEventListener('blur', onInputBlur);
                });

                function onInputFocus(ev) {
                    classie.add(ev.target.parentNode, 'input--filled');
                }

                function onInputBlur(ev) {
                    if (ev.target.value.trim() === '') {
                        classie.remove(ev.target.parentNode, 'input--filled');
                    }
                }
            })();
        </script>
    </div>
</body>

</html>