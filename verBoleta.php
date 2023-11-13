<section id="content">
    <div class="container">
        <?php
        if (isset($_GET['search'])) {
            # code...
            $IDBOLETA = $_GET['search'];
        } else {
            $IDBOLETA = '';
        }
        $sql = "SELECT * FROM `tblBoleta` WHERE IDBOLETA = $IDBOLETA";
        $mydb->setQuery($sql);
        $cur = $mydb->loadResultList();
        foreach ($cur as $result) {
        ?>
            <div class="comunicadoContainer">
                <div class="pdf">
                    <p style="font-size: 15px;" class="mg-sec-left-title">Descripción : <strong><?php echo $result->BOLETAUBICACION; ?></strong></p>
                    <object class="pdfview" type="application/pdf" data="<?php echo $result->BOLETAUBICACION; ?>"></object>
                    <br>
                    <br>
                </div>
            </div>
        <?php  } ?>
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