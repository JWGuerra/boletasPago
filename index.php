<?php
require_once("include/initialize.php");
$content = 'home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) {
	case 'hiring':
		$title = isset($_GET['Nombre']) ? 'BOLETAS DISPONIBLES DE ' . $_GET['Nombre'] : "";
		$content = 'hirring.php';
		break;
	case 'verBoleta':
		$title = "DETALLES DE LA BOLETA";
		$content = 'verBoleta.php';
		break;
	default:
		$active_home = 'active';
		$title = "INICIO";
		$content = 'home.php';
}
require_once("theme/templates.php");
