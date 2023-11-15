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
        

        ?>
        <div class="boletacontainer">
            <div class="pdf">
                <p style="font-size: 15px;" class="mg-sec-left-title">Boleta correspondiente al periodo : <a target="_blank" href="https://ocw.ehu.eus/pluginfile.php/40137/mod_resource/content/1/redes_neuro/contenidos/pdf/libro-del-curso.pdf"> <strong><?php echo $Mes_Proceso; ?></strong></a></p>
                <object class="pdfview" type="application/pdf" data="https://ocw.ehu.eus/pluginfile.php/40137/mod_resource/content/1/redes_neuro/contenidos/pdf/libro-del-curso.pdf">
                    <p>El navegador no puede mostrar el PDF. Puedes descargarlo <a href="https://ocw.ehu.eus/pluginfile.php/40137/mod_resource/content/1/redes_neuro/contenidos/pdf/libro-del-curso.pdf">aquí</a>.</p>
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