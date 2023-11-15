<section id="content">
    <div class="container content">
        <table id="dash-table" class="table table-hover">
            <thead>
                <th>Año</th>
                <th>Periodo</th>
                <th>Monto</th>
                <th>Documento</th>
            </thead>
            <tbody>
                <?php
                // Recuperamos ID Trabajador
                $DNI_Trabajador =   $_GET['DNI_Trabajador'];
                $ANIO           =   $_GET['anio'];
            
                //$sql = "SELECT * FROM `tblConvocatoria` c,`tblVacante` j WHERE c.`IDCONVOCATORIA`=j.`IDCONVOCATORIA` AND NOMBRECONVOCATORIA LIKE '%" . $NOMBRECONVOCATORIA . "%' ORDER BY FECHAPUBLICACION DESC";
                //$sql = "SELECT * FROM `tblboleta` WHERE IDTRABAJADOR = $IDTRABAJADOR AND ANIO = $ANIO";
                //$mydb->setQuery($sql);
                //$cur = $mydb->loadResultList();

                $conexion = new Cconexion();
                $sentencia = $conexion->ConexionBD()->query("EXEC sp_BoletaTrabajadorDNI $ANIO, $DNI_Trabajador");
                $cur = $sentencia->fetchAll(PDO::FETCH_OBJ);

                foreach ($cur as $result) {
                    echo '<tr>';
                    echo '<td>' . $result->Año_Proceso . '</td>';
                    echo '<td>' . $result->Mes_Proceso . '</td>';
                    echo '<td>' . $result->Neto . '</td>';
                    //echo '<td>' . date_format(date_create($result->FECHAPUBLICACION), 'm/d/Y') . '</td>';
                    echo '<td align="center"><a style = "border-radius:15%; padding: 4px 10px;" href="'. web_root.'index.php?q=verBoleta&DNI_Trabajador=' . $result->DNI_Trabajador . '&Anio_Proceso='. $result->Año_Proceso . '&Mes_Proceso='. $result->Mes_Proceso .'" class="btn btn-primary btn-xs  ">  <span style="color:#FFFF;" class="fa fa-eye fa-lg"></a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div>
</section>