<?php

require_once "../extensiones/paypal.controlador.php";

class AjaxCarrito{

  public $divisa;
  public $total;
  public $impuesto;
  public $envio;
  public $subtotal;
  public $titulo;
  public $cantidad;
  public $item;
  public $idProducto;


      /*=============================================
        MÉTODO PAYPAL
      =============================================*/

  public function ajaxEnviarPaypal(){

          $datos = array(

            "divisa"=>$this->divisa,
            "total"=>$this->total,
            "impuesto"=>$this->impuesto,
            "envio"=>$this->envio,
            "subtotal"=>$this->subtotal,
            "titulo"=>$this->titulo,
            "cantidad"=>$this->cantidad,
            "item"=>$this->item,
            "idProducto"=>$this->idProducto

          );

      $respuesta = Paypal::mdlPagoPaypal($datos);

      echo $respuesta;

  }





}


/*=============================================
  MÉTODO PAYPAL BASICO
=============================================*/
if (isset($_POST["divisa"])) {
  $paypal = new AjaxCarrito();
  $paypal->divisa = $_POST["divisa"];
  $paypal->total = $_POST["total"];
  $paypal->impuesto = $_POST["impuesto"];
  $paypal->envio = $_POST["envio"];
  $paypal->subtotal = $_POST["subtotal"];
  $paypal->titulo = $_POST["titulo"];
  $paypal->cantidad = $_POST["cantidad"];
  $paypal->item = $_POST["item"];
  $paypal->idProducto = $_POST["idProducto"];
  $paypal -> ajaxEnviarPaypal();

}
