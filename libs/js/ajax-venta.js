$(function(){
	var ENV_WEBROOT = "../";
	
	function displayResult(item) {
        $("#txt_id_cliente").val(item.value);
    }
	
	function displayResultProducto(item) {
        $("#txt_id_producto").val(item.value);
    }
	
	function displayResultCodigoProducto(item) {
        $("#txt_id_producto").val(item.value);
    }
	
	function displayResultReferenciaProducto(item) {
        $("#txt_id_producto").val(item.value);
    }
	
	function displayResultVendedor(item) {
        $("#txt_id_vendedor").val(item.value);
    }
	
	$("#txt_cliente").typeahead({  
		ajax: {
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=7',
			method: 'post',
			triggerLength: 1
		},
		onSelect: displayResult
    });   
	
	$("#txt_producto").typeahead({  
		ajax: {
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=2',
			method: 'post',
			triggerLength: 1
		},
		onSelect: displayResultProducto
    });  
	
	$("#txt_codigo_producto").typeahead({  
		ajax: {
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=43',
			method: 'post',
			triggerLength: 1
		},
		onSelect: displayResultCodigoProducto
    });
	
	$("#txt_referencia_producto").typeahead({  
		ajax: {
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=51',
			method: 'post',
			triggerLength: 1
		},
		onSelect: displayResultReferenciaProducto
    });
	
	$("#txt_vendedor").typeahead({  
		ajax: {
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=14',
			method: 'post',
			triggerLength: 1
		},
		onSelect: displayResultVendedor
    });
	
	$(".add-carrito-venta").off("click");
	$(".add-carrito-venta").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id = $("#txt_id_producto").val();
		var tipo_doc = $("#cbo-tipo-documento").val();
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=8',
			type: 'post',
			data: {'idproducto':id, 'cantidad':cantidad},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				$("#txt_cantidad").val('');
				$("#txt_id_producto").val('');
				$("#txt_producto").val('');
				$("#txt_codigo_producto").val('');
				$("#txt_referencia_producto").val('');
				alertify.success(data.msj);
				$(".detalle-producto-venta").load(ENV_WEBROOT+'view/Operacion/carrito-venta.php');
				setTimeout(function() {
					if(tipo_doc!=1){
						$(".hide-tipo-doc").hide();
						$("#txt_total").val($("#txt_subtotal").val());
						$("#lbl-total").text($("#txt_subtotal").val());
					}else{
						$(".hide-tipo-doc").show();
						var sub_total = $("#txt_subtotal").val();
						var igv = $("#txt_igv").val();
						var total = parseFloat(sub_total) + parseFloat(igv);
						$("#txt_total").val(total.toFixed(2));
						$("#lbl-total").text(total.toFixed(2));
					}
				}, 1000);
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	$(".delete-carrito-venta").off("click");
	$(".delete-carrito-venta").on("click", function(e) {
		var id = $(this).attr("producto_id");
		var tipo_doc = $("#cbo-tipo-documento").val();
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=9',
			type: 'post',
			data: {'idproducto':id},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				$(".detalle-producto-venta").load(ENV_WEBROOT+'view/Operacion/carrito-venta.php');
				setTimeout(function() {
					if(tipo_doc!=1){
						$(".hide-tipo-doc").hide();
						$("#txt_total").val($("#txt_subtotal").val());
						$("#lbl-total").text($("#txt_subtotal").val());
					}else{
						$(".hide-tipo-doc").show();
						var sub_total = $("#txt_subtotal").val();
						var igv = $("#txt_igv").val();
						var total = parseFloat(sub_total) + parseFloat(igv);
						$("#txt_total").val(total.toFixed(2));
						$("#lbl-total").text(total.toFixed(2));
					}
				}, 1000);
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	$("#cbo-tipo-documento").off("change");
	$("#cbo-tipo-documento").on("change", function(e) {
		var tipo_doc = $(this).val();
		if(tipo_doc!=1){
			$(".hide-tipo-doc").hide();
			$("#txt_total").val($("#txt_subtotal").val());
			$("#lbl-total").text($("#txt_subtotal").val());
		}else{
			$(".hide-tipo-doc").show();
			var sub_total = $("#txt_subtotal").val();
			var igv = $("#txt_igv").val();
			var total = parseFloat(sub_total) + parseFloat(igv);
			$("#txt_total").val(total.toFixed(2));
			$("#lbl-total").text(total.toFixed(2));
		}
	});
	
	$(".txt-precio-producto").off("focusout");
	$(".txt-precio-producto").on("focusout", function(e) {
		var precio = $(this).val();
		var id = $(this).attr('producto_id');
		var tipo_doc = $("#cbo-tipo-documento").val();
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=10',
			type: 'post',
			data: {'idproducto':id,'precio':precio},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				$(".detalle-producto-venta").load(ENV_WEBROOT+'view/Operacion/carrito-venta.php');
				setTimeout(function() {
					if(tipo_doc!=1){
						$(".hide-tipo-doc").hide();
						$("#txt_total").val($("#txt_subtotal").val());
						$("#lbl-total").text($("#txt_subtotal").val());
					}else{
						$(".hide-tipo-doc").show();
						var sub_total = $("#txt_subtotal").val();
						var igv = $("#txt_igv").val();
						var total = parseFloat(sub_total) + parseFloat(igv);
						$("#txt_total").val(total.toFixed(2));
						$("#lbl-total").text(total.toFixed(2));
					}
				}, 1000);
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	$(".btn-grabar-venta").off("click");
	$(".btn-grabar-venta").on("click", function(e) {
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=11',
			type: 'post',
			data: $("#form-venta").serialize(),
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				setTimeout(function() {
					$(".contenido").load(ENV_WEBROOT+'view/Operacion/list_venta.php');
				}, 1000);
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	/*** CLIENTE ***/
	$(".new-cliente-venta").off("click");
	$(".new-cliente-venta").on("click", function(e) {
		$("#txt-nombre").val('');
		$("#txt-id").val('');
		$("#txt-ruc").val('');
		$("#txt-dni").val('');
		$("#txt-direccion").val('');
		$("#txt-telefono").val('');
		$('#editClienteVenta').find('.modal-title').html('Nuevo Cliente');
		$('#editClienteVenta').modal('show');
	});
	
	$(".btn-grabar-cliente-venta").off("click");
	$(".btn-grabar-cliente-venta").on("click", function(e) {
		$.ajax({
			url: ENV_WEBROOT+'Controller/ClienteController.php?page=2',
			type: 'post',
			data: $("#form-cliente-venta").serialize(),
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				$('#editClienteVenta').modal('hide');
				alertify.success(data.msj);
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	$(".search-pedido-venta").off("click");
	$(".search-pedido-venta").on("click", function(e) {
		$('#pedidoVenta').find('.modal-title').html('Buscar Pedido');
		$('#pedidoVenta').find(".modal-body").load('Operacion/search_pedido_venta.php');
		$('#pedidoVenta').modal('show');
		setTimeout(function() {
			$(".nano").nanoScroller({ alwaysVisible: true });
		}, 1000);
	});
	
	$(".btn-buscar-pedido-venta").off("click");
	$(".btn-buscar-pedido-venta").on("click", function(e) {
		var cliente = $("#txt_cliente_pedido").val();
		var fecha_inicio = $("#txt_fecha_inicio_pedido").val();
		var fecha_fin = $("#txt_fecha_fin_pedido").val();
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=23',
			type: 'post',
			data: {'cliente':cliente,'fecha_inicio':fecha_inicio,'fecha_fin':fecha_fin},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				setTimeout(function() {
					$("#content-search-pedido-venta").load(ENV_WEBROOT+'view/Operacion/search_pedido_venta_reload.php', { "data": data.array } );
				}, 1000);		
				setTimeout(function() {
					$(".nano").nanoScroller({ alwaysVisible: true });
				}, 1000);
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	$(".seleccionar-pedido-venta").off("click");
	$(".seleccionar-pedido-venta").on("click", function(e) {
		var id = $(this).attr('movimiento_id');
		var tipo_doc = $("#cbo-tipo-documento").val();
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=21',
			type: 'post',
			data: {'pedido_id':id},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				$(".detalle-producto-venta").load(ENV_WEBROOT+'view/Operacion/carrito-venta.php');
				$("#txt_id_pedido").val(data.Id);
				$("#txt_pedido").val(data.Numero);
				$("#txt_id_cliente").val(data.IdCliente);
				$("#txt_cliente").val(data.NombreCliente);
				$("#txt_id_vendedor").val(data.IdVendedor);
				$("#txt_vendedor").val(data.NombreVendedor);
				setTimeout(function() {
					if(tipo_doc!=1){
						$(".hide-tipo-doc").hide();
						$("#txt_total").val($("#txt_subtotal").val());
						$("#lbl-total").text($("#txt_subtotal").val());
					}else{
						$(".hide-tipo-doc").show();
						var sub_total = $("#txt_subtotal").val();
						var igv = $("#txt_igv").val();
						var total = parseFloat(sub_total) + parseFloat(igv);
						$("#txt_total").val(total.toFixed(2));
						$("#lbl-total").text(total.toFixed(2));
					}
				}, 1000);
				$('#pedidoVenta').modal('hide');
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	$(".limpiar-pedido").off("click");
	$(".limpiar-pedido").on("click", function(e) {
		$("#txt_id_pedido").val('');
		$("#txt_pedido").val('');
		$("#txt_id_cliente").val('');
		$("#txt_cliente").val('');
		$("#txt_id_vendedor").val('');
		$("#txt_vendedor").val('');
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=22',
			type: 'post',
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				$(".detalle-producto-venta").load(ENV_WEBROOT+'view/Operacion/carrito-venta.php');
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
	$(".cbo-tipo-precio").off("change");
	$(".cbo-tipo-precio").on("change", function(e) {
		var tipo_precio_id = $(this).val();
		var id = $(this).attr('producto_id');
		var tipo_doc = $("#cbo-tipo-documento").val();
		$.ajax({
			url: ENV_WEBROOT+'Controller/OperacionController.php?page=39',
			type: 'post',
			data: {'idproducto':id,'tipo_precio_id':tipo_precio_id},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				$(".detalle-producto-venta").load(ENV_WEBROOT+'view/Operacion/carrito-venta.php');
				setTimeout(function() {
					if(tipo_doc!=1){
						$(".hide-tipo-doc").hide();
						$("#txt_total").val($("#txt_subtotal").val());
						$("#lbl-total").text($("#txt_subtotal").val());
					}else{
						$(".hide-tipo-doc").show();
						var sub_total = $("#txt_subtotal").val();
						var igv = $("#txt_igv").val();
						var total = parseFloat(sub_total) + parseFloat(igv);
						$("#txt_total").val(total.toFixed(2));
						$("#lbl-total").text(total.toFixed(2));
					}
				}, 1000);
				alertify.success(data.msj);
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
});