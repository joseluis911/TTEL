/*=============================================
BOTÓN PAGAR PAYPAL
=============================================*/

$(".btnPagar").click(function(){

	var divisa = "MXN",
			total = $(".valorTotalCompra").html(),
			impuesto = $(".valorTotalImpuesto").html();,
			envio = 0,
			subtotal = 399,
			titulo = "Basico",
			cantidad = 1,
			item = 399,
			idProducto = 1;

			var datos = new FormData();

				datos.append("divisa", divisa);
				datos.append("total", total);
				datos.append("impuesto", impuesto);
				datos.append("envio", envio);
				datos.append("subtotal", subtotal);
				datos.append("titulo", titulo);
				datos.append("cantidad", cantidad);
				datos.append("item", item);
				datos.append("idProducto", idProducto);

				$.ajax({
					url: "ajax/carrito.ajax.php",
					method: "POST",
					data: datos,
					cache: false,
					contentType: false,
					processData: false,
					success: function(respuesta){

						console.log("respuesta", respuesta);
					}

				})
})
