<?php
require_once("include/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
switch ($action) {
	case 'solicitar':
		doSolicitud();
		break;
}

// Validar Solicitud
function doSolicitud()
{

	// Recibimos parámetros
	$DNI  				= $_POST['DNI'];
	$CELULAR  			= $_POST['CELULAR'];
	$FECHANACIMIENTO  	= $_POST['FECHANACIMIENTO'];
	$ANIO  				= $_POST['ANIO'];

	// Consulta SQL a DB
	$conexion = new Cconexion();
	$sentencia = $conexion->ConexionBD()->query("EXEC sp_BoletaTrabajadorDNI $ANIO, $DNI");
	$result = $sentencia->fetchAll(PDO::FETCH_OBJ);

	// Validación de datos

	// El usuario no existe
	if ($result == NULL) {
		echo "EL TRABAJADOR NO EXISTE";
	} else {
		// Extraemos la fecha
		$fecha = new DateTime($result[0]->Fecha_Nacimiento);

		// Validamos el n° Celular
		if ($CELULAR != $result[0]->Telefono && $FECHANACIMIENTO == $fecha->format('Y-m-d')) {
			echo "EL NUMERO DE CELULAR INGRESADO ES INCORRECTO";
		} else {

			// Verificamos la fecha de Nacimiento
			if ($CELULAR == $result[0]->Telefono && $FECHANACIMIENTO != $fecha->format('Y-m-d')) {
				echo "LA FECHA DE NACIMIENTO ES INCORRECTA";
			} else {
				if ($DNI == $result[0]->DNI_Trabajador && $CELULAR == $result[0]->Telefono && $FECHANACIMIENTO == $fecha->format('Y-m-d')) {
					redirect(web_root . "index.php?q=hiring&DNI_Trabajador=" . $result[0]->DNI_Trabajador . "&Nombre=" . $result[0]->Apellidos_Nombres . "&anio=" . $result[0]->Año_Proceso);
				} else {
					echo "VERIFICAR LOS DATOS INGRESADOS";
				}
			}
		}
	}
}
