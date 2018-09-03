<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=db747754930.db.1and1.com;dbname=db747754930",
						"dbo747754930",
						"S@ntiago123",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}
