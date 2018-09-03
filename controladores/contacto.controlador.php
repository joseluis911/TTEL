<?php



require_once "../modelos/contacto.modelo.php";

class ControladorContactos {

  /*=============================================
  	GUARDAR CONTACTOS
  =============================================*/
  static public function ctrGuardarContacto($datos){

    $tabla = "contacto";

    $respuesta = ModeloContactos::mdlGuardarContacto($datos, $tabla);

    return $respuesta;

  }

}


 ?>
