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

	if ($_POST['DNI'] == "" || $_POST['CELULAR'] == "" || $_POST['FECHANACIMIENTO'] == "" || $_POST['ANIO'] == "") {
		redirect(web_root . "index.php?q=error");
	} else {
		// Consulta SQL a DB
		global $mydb;
		$sql = "SELECT * FROM `tblTrabajador` INNER JOIN `tblBoleta` on `tblTrabajador`.IDTRABAJADOR = `tblBoleta`.IDTRABAJADOR;";
		$mydb->setQuery($sql);
		$result = $mydb->loadSingleResult();

		// Validación de Usuarios
		if ($DNI == $result->DNI && $CELULAR == $result->CELULAR) {
			redirect(web_root . "index.php?q=hiring&idTrabajador=" . $result->IDTRABAJADOR . "&Nombre=" . $result->NOMBRES . "&anio=" . $result->ANIO);
		} else {
			redirect(web_root . "index.php?q=error");
		}
	}
}