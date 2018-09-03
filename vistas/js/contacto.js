$(".enviarContacto").on("click", function(){

  var nombre = $(".nombre").val(),
      apellidos = $(".apellidos").val(),
      email = $(".email").val(),
      titulo = $(".titulo").val(),
      mensaje = $(".mensaje").val();

      var datos = new FormData();

      datos.append("nombre", nombre);
      datos.append("apellidos", apellidos);
      datos.append("email", email);
      datos.append("titulo", titulo);
      datos.append("mensaje", mensaje);

  if(nombre == ""){
    $(".ajaxContacto").html('<div class="alert alert-warning alert-dismissible" >' +
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
    '<h4><i class="icon fa fa-info"></i>No puedes dejar el nombre vacio.</h4> </div>');


  }else if(apellidos == ""){
    $(".ajaxContacto").html('<div class="alert alert-warning alert-dismissible" >' +
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
    '<h4><i class="icon fa fa-info"></i>Faltan tus apellidos.</h4> </div>');

  }else if (email == "") {
    $(".ajaxContacto").html('<div class="alert alert-warning alert-dismissible" >' +
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
    '<h4><i class="icon fa fa-info"></i>Por favor dejanos tu correo.</h4> </div>');

  }else if (mensaje == "") {
    $(".ajaxContacto").html('<div class="alert alert-warning alert-dismissible" >' +
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
    '<h4><i class="icon fa fa-info"></i>Te falto deja el mensaje.</h4> </div>');

  }else{
    $(".ajaxContacto").html('<div class="alert alert-success alert-dismissible" >' +
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
    '<h4><i class="icon fa fa-info"></i>Tu mensaje ha sido enviado, en poco tiempo nos pondremos en contacto.</h4> </div>');

      $.ajax({

  		url: "../../ajax/contacto.ajax.php",
  		method: "POST",
  		data: datos,
  		cache: false,
  		contentType: false,
  		processData: false,
  		success: function(respuesta){


            swal({
              type: "success",
              title: "Se ha mandado el mensaje correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then((result) => {
              if (result.value) {



              }
            })

      }
     })
  }

});
