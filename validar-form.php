<?php
if (isset($_POST['submit'])) {
    if (empty($dni)) {
        echo "
        <div class='modal fade' id='mensajeModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <h4 class='modal-title' id='myModalLabel'>Mensaje de Validación</h4>
                </div>
                <div class='modal-body'>
                    Complete los campos antes de enviar el formulario.
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                </div>
                </div>
            </div>
        </div>";
    }
}
