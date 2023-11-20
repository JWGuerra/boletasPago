<section id="content">
    <div class="container">
        <?php
        if (isset($_GET['DNI_Trabajador'])) {
            # code...
            $DNI_Trabajador = $_GET['DNI_Trabajador'];
        } else {
            $DNI_Trabajador = '';
        }
        if (isset($_GET['Anio_Proceso'])) {
            # code...
            $Anio_Proceso    = $_GET['Anio_Proceso'];
        } else {
            $Anio_Proceso = '';
        }
        if (isset($_GET['Mes_Proceso'])) {
            # code...
            $Mes_Proceso    = $_GET['Mes_Proceso'];
        } else {
            $Mes_Proceso = '';
        }

        // Buscar Documento
        function buscarArchivoPorFecha($directorioBase, $anio, $mes, $archivoBuscado)
        {
            $rutaAnio = $directorioBase . '/'. $anio;
            // Verificar si el directorio del año existe
            if (is_dir($rutaAnio)) {
                $rutaMes = $rutaAnio . '/' . $mes;

                // Verificar si el directorio del mes existe
                if (is_dir($rutaMes)) {
                    // Construir la ruta completa del archivo buscado
                    $rutaArchivo = $rutaMes . $archivoBuscado;

                    // Verificar si el archivo existe
                    if (file_exists($rutaArchivo)) {
                        return $rutaArchivo;
                        
                    } else {
                        return false; // El archivo no se encontró en el mes especificado
                    }
                } else {
                    return false; // El mes no existe
                }
            } else {
                return false; // El año no existe
            }
        }

        // Uso de la función
        $directorioBase = './boletas'; // Reemplaza esto con la ruta de tu directorio base
        $anioBuscado = $Anio_Proceso; // Reemplaza esto con el año que estás buscando
        $mesBuscado = $Mes_Proceso; // Reemplaza esto con el mes que estás buscando (puede ser '01', '02', ..., '12')
        $archivoBuscado = '/Firmados/BPMI'.$DNI_Trabajador.'F.PDF'; // Reemplaza esto con el nombre del archivo que estás buscando

        $rutaArchivo = buscarArchivoPorFecha($directorioBase, $anioBuscado, $mesBuscado, $archivoBuscado);

        if ($rutaArchivo) {
            echo "";
        } else {
            echo "<p style = 'color:red;' > <strong>NO SE ENCONTRÓ LA BOLETA!!</strong></p>";
        }

        ?>
        <div class="boletacontainer">
            <div class="pdf">
                <p style="font-size: 15px;" class="mg-sec-left-title">Boleta correspondiente al periodo : <strong><?php echo $Mes_Proceso; ?></strong></p>
                <object class="pdfview" type="application/pdf" data=<?php echo $rutaArchivo?>>
                    <p>El navegador no puede mostrar el PDF. Puedes descargarlo <a href=<?php echo $rutaArchivo?>>aquí</a>.</p>
                </object>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>

<!--        ESTILOS DE LA VISTA DE COMUNICADOS      -->
<style>
    /* Ordenar los contenedores cadno el tamaño del dispositivo se reduzca */
    @media only screen and (max-width: 1200px) {
        .pdf {
            /* Centrado */
            margin: auto;
            position: relative;
            display: block;
            /* Tamaño */
            width: 100%;
        }
    }

    .pdfview {
        /* Centrado */
        margin: auto;
        display: block;
        /* Tamaño */
        width: 90%;
        height: 100vh;
        /* Mejorar aspecto */
        border-radius: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>