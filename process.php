<?php
require_once("include/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
switch ($action) {
	case 'solicitar':
		doSolicitud();
		break;
}

function doSolicitud()
{
	$DNI  				= $_POST['DNI'];
	$CELULAR  			= $_POST['CELULAR'];
	$FECHANACIMIENTO  	= $_POST['FECHANACIMIENTO'];
	$ANIO  				= $_POST['ANIO'];

	// Se verifica que los valores ingresados en el formulario no esten vacios
	if ($_POST['DNI'] == "" || $_POST['CELULAR'] == "" || $_POST['FECHANACIMIENTO'] == "" || $_POST['ANIO'] == "") {
		redirect(web_root . "index.php?q=error");
	} else {

		// Consulta SQL a DB
		$conexion = new Cconexion();
        $sentencia = $conexion->ConexionBD()->query("EXEC sp_BoletaTrabajadorDNI $ANIO, $DNI");
        $result = $sentencia->fetchAll(PDO::FETCH_OBJ);

		// Validación de Usuarios
		if ($DNI == $result[0]->DNI_Trabajador && $CELULAR == $result[0]->Telefono) {
			redirect(web_root . "index.php?q=hiring&DNI_Trabajador=" . $result[0]->DNI_Trabajador . "&Nombre=" . $result[0]->Apellidos_Nombres . "&anio=" . $result[0]->Año_Proceso);
		} else {
			redirect(web_root . "index.php?q=error");
		}
	}
}