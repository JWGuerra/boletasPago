<?php
if (isset($_POST['submit'])) {
  $dni              = $_POST['DNI'];
  $celular          = $_POST['CELULAR'];
  $fechaNacimiento  = $_POST['FECHANACIMIENTO'];
  $anio             = $_POST['ANIO'];
}
?>

<form id="miFormulario" action="process.php?action=solicitar" method="POST">
  <section id="content" style="border-radius: 15px;">
    <div class="container content">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="panel" style="background-color:#016644; text-align:center; padding:15px; border-radius:15px;">
          <img src="plugins/home-plugins/img/Logo_plan_meriss.png" height="100px">
        </div>
        <div class="panel" style="background-color:white; text-align:justify; padding:15px; border-radius:15px;">
          <div style="padding: 25px;">
            <h3>MI BOLETA DE PAGOS</h3>
            <p>TÉRMINOS Y CONDICIONES: El Usuario, a través de la aceptación de los actuales Términos y Condiciones, garantiza la autenticidad de todos aquellos datos proporcionados a esta plataforma y de aquella información que vaya actualizando paulatinamente, siendo el único responsable ante los daños y perjuicios generados por cualquier información inexacta que pudieran recaer sobre sí mismo.
              <br><br>El “PLAN MERISS” no se hace responsable por las faltas en que incurra el Usuario respecto de esta condición. El “PLAN MERISS” se reserva el derecho de verificar la información proporcionada por el Usuario.
            </p>
            <h4 style="font-weight: normal;">Aceptar términos y condiciones:</h4>
            <div>
              <input type="radio" id="huey" name="drone" value="huey" />
              <label style="font-weight: normal;" for="huey">Si acepto</label>
            </div>
          </div>
        </div>
        <div class="panel" style="border-radius: 15px;">
          <div class="panel-header"></div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12 search1">
                <label style="font-weight:normal;" class="col-sm-3">DNI:</label>
                <div class="col-sm-9">
                  <input class="form-control" type="" name="DNI" placeholder="DNI" maxlength="8">
                </div>
              </div>
            </div>
            <div style="height: 18px;"></div>
            <div class="row">
              <div class="col-sm-12 search1">
                <label style="font-weight:normal;" class="col-sm-3">Celular:</label>
                <div class="col-sm-9">
                  <input class="form-control" type="" name="CELULAR" placeholder="Celular" maxlength="9">
                </div>
              </div>
            </div>
            <div style="height: 18px;"></div>
            <div class="row">
              <div class="col-sm-12 search1">
                <label style="font-weight:normal;" class="col-sm-3">Fecha de Nacimiento:</label>
                <div class="col-sm-9">
                  <div class="form-group mb-4">
                    <input type='date' class="form-control" name="FECHANACIMIENTO" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 search1">
                <label style="font-weight:normal;" class="col-sm-3">Año:</label>
                <div class="col-sm-9">
                  <select class="form-control" name="ANIO">
                    <option value="">Todos</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
                </div>
              </div>
            </div>
            <div style="height: 15px;">
            </div>
            <div class="row">
              <div class="col-sm-12 search1">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                  <input type="submit" name="submit" class="btn btn-success" value="SOLICITAR" style="border-radius: 10px;" onclick="validarFormulario()">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </section>
  <?php
  require_once('validar-form.php');
  ?>
</form>

<script>
  function validarFormulario() {
    // Validar aquí los campos del formulario
    var dni = document.forms["miFormulario"]["DNI"].value;
    var celular = document.forms["miFormulario"]["CELULAR"].value;
    var fecha = document.forms["miFormulario"]["FECHANACIMIENTO"].value;
    var anio = document.forms["miFormulario"]["ANIO"].value;
    // Agrega más campos según sea necesario

    // Verifica si algún campo está vacío
    if (dni === "" || celular === "" || fecha === "" || anio === "") {
      // Muestra la ventana modal con el mensaje
      $('#mensajeModal').modal('show');
      event.preventDefault();
    } else {
      // Si todos los campos están llenos, envía el formulario
      document.getElementById("miFormulario").submit();
    }
  }
</script>

<div class="modal fade" id="mensajeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mensaje de Validación</h4>
      </div>
      <div class="modal-body">
        Complete todos los campos antes de enviar el formulario.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!--  ESTILOS DE LA PAGINA - HOME  -->
<style type="text/css">
  #content {
    min-height: 400px;
    background-color: #CED1E0;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }

  #content .panel {
    padding: 10px;
  }

  .panel-body label {
    font-size: 20px;
  }

  .panel-body input {
    font-size: 15px;
  }

  .panel-body>.row {
    margin-bottom: 10px;
  }
</style>