<?php
require_once(LIB_PATH . DS . "config.php");

class Cconexion
{
	function ConexionBD()
	{
		// Credenciales de la Base de Datos
		$host = '200.37.108.58';
		$dbname = 'BdNeoPlanillas';
		$username = 'sa';
		$pasword = 'Mer155';
		$puerto = 1433;

		// Conexión a la Base de Datos
		try {
			$conn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $username, $pasword);
		} catch (PDOException $exp) {
			echo ("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
		}
		return $conn;
	}
}
