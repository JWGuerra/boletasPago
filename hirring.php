<section id="content">
    <div class="container content">
        <table id="dash-table" class="table table-hover">
            <thead>
                <th>Año</th>
                <th>Periodo</th>
                <th>Documento</th>
                <th>Fecha Emitida</th>
            </thead>
            <tbody>
                <?php
                // Recuperamos ID Trabajador
                $IDTRABAJADOR = $_GET['idTrabajador'];
                $ANIO = $_GET['anio'];
                //$PERIODO = $_GET['periodo'];

                //$sql = "SELECT * FROM `tblConvocatoria` c,`tblVacante` j WHERE c.`IDCONVOCATORIA`=j.`IDCONVOCATORIA` AND NOMBRECONVOCATORIA LIKE '%" . $NOMBRECONVOCATORIA . "%' ORDER BY FECHAPUBLICACION DESC";
                $sql = "SELECT * FROM `tblboleta` WHERE IDTRABAJADOR = $IDTRABAJADOR AND ANIO = $ANIO";
                $mydb->setQuery($sql);
                $cur = $mydb->loadResultList();
                foreach ($cur as $result) {
                    echo '<tr>';
                    echo '<td>' . $result->ANIO . '</td>';
                    echo '<td>' . $result->IDTRABAJADOR . '</td>';
                    echo '<td>' . $result->BOLETAUBICACION . '</td>';
                    //echo '<td>' . date_format(date_create($result->FECHAPUBLICACION), 'm/d/Y') . '</td>';
                    echo '<td align="center"><a style = "border-radius:15%; padding: 4px 10px;" href="'. web_root.'index.php?q=verBoleta&search=' . $result->IDBOLETA . '" class="btn btn-primary btn-xs  ">  <span style="color:#FFFF;" class="fa fa-eye fa-lg"></a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div>
</section>