 $(document).ready(function () {
     $('#example').dataTable({
         "oLanguage": {
             "sUrl": "js/datatable.spanish.txt"
         }
     });
 });

 function recargar() {
     location.reload(true);
 }

 $().onclick(function () {
     $("#myModal").modal({
         backdrop: true,
         keyboard: true,
         show: true,
         remote: "formProductosController.php"
     });

 });

 $(document).ready(function () {
     $("#enlaceajax").click(function (evento) {
         evento.preventDefault();
         $("#destino").load("contenido-ajax.html")
     });
 });

 $(function () {
     $("[data-toggle = 'tooltip']").tooltip();
 });