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
		//global $mydb;
		//$sql = "SELECT * FROM `tblTrabajador` INNER JOIN `tblBoleta` on `tblTrabajador`.IDTRABAJADOR = `tblBoleta`.IDTRABAJADOR;";
		//$mydb->setQuery($sql);
		//$result = $mydb->loadSingleResult();
		$conexion = new Cconexion();
        $sentencia = $conexion->ConexionBD()->query("SELECT * FROM tTrabajador WHERE DNI_Trabajador = $DNI");
        $result = $sentencia->fetchAll(PDO::FETCH_OBJ);

		// Validación de Usuarios
		if ($DNI == $result[0]->DNI_Trabajador && $CELULAR == $result[0]->Telefono) {
			redirect(web_root . "index.php?q=hiring&idTrabajador=" . $result[0]->IdTrabajador . "&Nombre=" . $result[0]->Apellido_Paterno . $result[0]->Apellido_Materno .$result[0]->Nombres . "&anio=" . $result[0]->Sexo);
		} else {
			redirect(web_root . "index.php?q=error");
		}
	}
}