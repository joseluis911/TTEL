<?php

require_once "../controladores/contacto.controlador.php";

define('PHPMAILER_HOST','smtp.1and1.mx');
define('PHPMAILER_USER','contacto@tutiendaenlinea.online');
define('PHPMAILER_PASS','contacto123');
define('PHPMAILER_PORT',587);
require_once "../extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "../extensiones/vendor/autoload.php";

class AjaxContacto{


  public function ajaxGuardarContacto(){

    $datos = array("nombre" => $this->nombre,
                   "apellidos" => $this->apellidos,
                   "email" => $this->email,
                   "titulo" => $this->titulo,
                   "mensaje" => $this->mensaje);

   $respuesta = ControladorContactos::ctrGuardarContacto($datos);

   /*=============================================
         ENVÍO CORREO ELECTRÓNICO
    =============================================*/
	  
				$para  = "contacto@tutiendaenlinea.online";

				// título
				$titulo = 'Ha recibido una nueva consulta';

				// mensaje
				$mensaje = '<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">

						<center><img style="padding:20px; width:10%" src="http://localhost/ecommerceV1/backend/vistas/img/plantilla/logo.png"></center>

						<div style="position:relative; margin:auto; width:600px; background:white; padding-bottom:20px">

							<center>

							<img style="padding-top:20px; width:15%" src="http://www.tutorialesatualcance.com/tienda/icon-email.png">


							<h3 style="font-weight:100; color:#999;">HA RECIBIDO UNA CONSULTA</h3>

							<hr style="width:80%; border:1px solid #ccc">

							<h4 style="font-weight:100; color:#999; padding:0px 20px; text-transform:uppercase">'.$datos["nombre"].'</h4>

							<h4 style="font-weight:100; color:#999; padding:0px 20px;">De: '.$datos["email"].'</h4>
                            
                            <h4 style="font-weight:100; color:#999; padding:0px 20px;">Titulo: '.$datos["titulo"].'</h4>

							<h4 style="font-weight:100; color:#999; padding:0px 20px">'.$datos["mensaje"].'</h4>

							<hr style="width:80%; border:1px solid #ccc">

							</center>

						</div>

					</div>';



				// Para enviar un correo HTML, debe establecerse la cabecera Content-type
				$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$cabeceras .= 'From: Contacto <contacto@tutiendaenlinea.online>' . "\r\n";


				// Enviarlo
				$envio = mail($para, $titulo, $mensaje, $cabeceras);

    
    

           if(!$envio){

             echo '<script>

               swal({
                   title: "¡ERROR!",
                   text: "¡Ha ocurrido un problema enviando el mensaje!",
                   type:"error",
                   confirmButtonText: "Cerrar",
                   closeOnConfirm: false
                 },

                 function(isConfirm){

                   if(isConfirm){
                     history.back();
                   }
               });

             </script>';

           }else{

             echo '<script>

               swal({
                 title: "¡OK!",
                 text: "¡Su mensaje ha sido enviado, muy pronto le responderemos!",
                 type: "success",
                 confirmButtonText: "Cerrar",
                 closeOnConfirm: false
               },

               function(isConfirm){
                    if (isConfirm) {
                       history.back();
                     }
               });

             </script>';

           }

    
  }

}



/*=============================================
         GUARDAR CONTACTO
=============================================*/

if (isset($_POST["nombre"])) {

  $contacto = new AjaxContacto();
  $contacto -> nombre = $_POST["nombre"];
  $contacto -> apellidos = $_POST["apellidos"];
  $contacto -> email = $_POST["email"];
  $contacto -> titulo = $_POST["titulo"];
  $contacto -> mensaje = $_POST["mensaje"];
  $contacto -> ajaxGuardarContacto();

}


 ?>
