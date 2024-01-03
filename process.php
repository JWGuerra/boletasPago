<?php

// Validar Solicitud
function doSolicitud()
{
	if (isset($_POST['submit'])) {
		// Recibimos parámetros
		$DNI  				= $_POST['DNI'];
		$CELULAR  			= $_POST['CELULAR'];
		$FECHANACIMIENTO  	= $_POST['FECHANACIMIENTO'];
		$ANIO  				= $_POST['ANIO'];
		// Consulta SQL a DB
		$conexion = new Cconexion();
		$sentencia = $conexion->ConexionBD()->query("EXEC sp_BoletaTrabajadorDNI $ANIO, $DNI");
		$result = $sentencia->fetchAll(PDO::FETCH_OBJ);

		// El usuario no existe
		if ($result == NULL) {
			echo "<p style='text-align:center;background-color:#B40404; padding:10px; color:white; border-radius:8px;'>EL TRABAJADOR NO EXISTE</p>";
		} else {
			// Extraemos la fecha
			$fecha = new DateTime($result[0]->Fecha_Nacimiento);

			// Validamos el n° Celular
			if ($CELULAR != $result[0]->Telefono && $FECHANACIMIENTO == $fecha->format('Y-m-d')) {
				echo "<p style='text-align:center;background-color:#B40404; padding:10px; color:white; border-radius:8px;'>NÚMERO DE CELULAR INCORRECTO</p>";
			} else {

				// Verificamos la fecha de Nacimiento
				if ($CELULAR == $result[0]->Telefono && $FECHANACIMIENTO != $fecha->format('Y-m-d')) {
					echo "<p style='text-align:center;background-color:#B40404; padding:10px; color:white; border-radius:8px;'>FECHA DE NACIMIENTO INCORRECTO</p>";
				} else {
					if ($DNI == $result[0]->DNI_Trabajador && $CELULAR == $result[0]->Telefono && $FECHANACIMIENTO == $fecha->format('Y-m-d')) {
						redirect(web_root . "index.php?q=hiring&DNI_Trabajador=" . $result[0]->DNI_Trabajador . "&Nombre=" . $result[0]->Apellidos_Nombres . "&anio=" . $result[0]->Año_Proceso);
					} else {
						echo "<p style='text-align:center;background-color:#B40404; padding:10px; color:white; border-radius:8px;'>VERIFICAR LOS DATOS INGRESADOS</p>";
					}
				}
			}
		}
	}
}

doSolicitud();
