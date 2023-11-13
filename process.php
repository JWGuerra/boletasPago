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
	global $mydb;
	$DNI  = $_GET['DNI'];
	$CELULAR  = $_GET['CELULAR'];
	$FECHANACIMIENTO  = $_GET['FECHANACIMIENTO'];
	$ANIO  = $_GET['ANIO'];

	// Validación de Usuarios
	if ($picture == "") {
		# code...
		redirect(web_root . "index.php?q=apply&job=" . $IDTRABAJADOR . "&view=personalinfo");
	} else {

	}
}
