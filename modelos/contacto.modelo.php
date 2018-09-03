<?php

require "conexion.modelo.php";

class ModeloContactos {


static public function mdlGuardarContacto($datos, $tabla){

  $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, apellidos, email, titulo, mensaje) VALUES
                                          (:nombre, :apellidos, :email, :titulo, :mensaje)");

  $stmt ->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
  $stmt ->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
  $stmt ->bindParam(":email", $datos["email"], PDO::PARAM_STR);
  $stmt ->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
  $stmt ->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);

  if ($stmt -> execute()){

    return "ok";

  }else{

    return "error";
  }

}

}





 ?>
