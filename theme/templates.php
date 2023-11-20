<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>PLAN MERISS - Boletas de Pago</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="http://www.meriss.gob.pe/plan/" />

  <!-- CSS -->
  <link href="<?php echo web_root; ?>plugins/home-plugins/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo web_root; ?>plugins/home-plugins/css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>plugins/home-plugins/css/flexslider.css" rel="stylesheet" />
  <link href="<?php echo web_root; ?>plugins/home-plugins/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo web_root; ?>plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo web_root; ?>plugins/dataTables/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo web_root; ?>plugins/dataTables/jquery.dataTables_themeroller.css">
  <link href="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo web_root; ?>plugins/datepicker/datepicker3.css" rel="stylesheet" media="screen">
  <link href="<?php echo web_root; ?>plugins/home-plugins/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo web_root; ?>dist/css/skins/myStyles.css">
  <link rel="stylesheet" href="<?php echo web_root; ?>dist/css/templateStyle.css">
</head>

<!--####################    BODY    ################################-->

<body>
  <div id="wrapper" class="home-page">
    <header>
      <div class="topbar navbar-fixed-top" style="background:white; height:80px;">
        <div class="container" style="display: flex;justify-content: center;">
          <div class="navbar-header">
            <div style="margin: 0 auto;">
              <a style="color: black;" class="navbar-brand" href="<?php echo web_root; ?>index.php">Plan MERISS<img src="<?php echo web_root; ?>plugins/home-plugins/img/Logo_plan_meriss.png" alt="logo" height="40px" /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-default navbar-static-top">
      </div>
    </header>

    <!--BARRA SOCIAL FIJA-->
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com/planmerissgorecusco" data-placement="right" title="Facebook" target="_blank" class="icon-facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
        <li><a href="https://twitter.com/merisscusco" data-placement="right" title="Twitter" target="_blank" class="icon-twitter"><i class="fa fa-twitter fa-xs"></i></a></li>
        <li><a href="https://www.instagram.com/planmerisscusco/" data-placement="right" title="Instagram" target="_blank" class="icon-instagram"><i class="fa fa-instagram fa-xs"></i></a></li>
        <li><a href="https://m.youtube.com/channel/UC2t1z8uNAHOuqgEDa7kM8-A" data-placement="right" title="You Tube" target="_blank" class="icon-youtube"><i class="fa fa-youtube fa-xs"></i></a></li>
      </ul>
    </div>
    <!-- end header -->

    <?php
    if (isset($_GET['q'])) {
      # code...
      echo '<section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">' . $title . '</h2>
                    </div>
                </div>
            </div>
            </section>';
    }
    require_once $content;
    ?>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="widget">
              <h5 class="widgetheading">CONTACTANOS</h5>
              <ul class="link-list">
                <li>Central telefónica: 084-232639</li>
                <li>Correo: pmeriss@meriss.gob.pe</li>
                <li>Página Web: <a href="http://www.meriss.gob.pe/plan/" target="_blank">http://www.meriss.gob.pe/plan/</a> </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="widget">
              <h5 class="widgetheading">LINK DIRECTOS</h5>
              <ul class="link-list">
                <li><a href="<?php echo web_root; ?>index.php">Inicio</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget">
              <h5 class="widgetheading">DIRECCION</h5>
              <div id="map"></div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.1838372037846!2d-71.96506842520111!3d-13.5243069868442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5fd1923e0bf%3A0x3075ead0f33c8c76!2sPedro%20Vilca%20Apaza%20332%2C%20Cusco%2008002!5e0!3m2!1ses-419!2spe!4v1688740845383!5m2!1ses-419!2spe" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="copyright">
                <p>
                  <span>&copy; Plan MERISS 2023 todos los derechos reservados
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="social-network">
                <li><a href="https://www.facebook.com/planmerissgorecusco" target="_blank" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/merisscusco" target="_blank" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/planmerisscusco/" target="_blank" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://m.youtube.com/channel/UC2t1z8uNAHOuqgEDa7kM8-A" target="_blank" data-placement="top" title="You Tube"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  <!-- ====================     JavaScript    ==================== -->
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>plugins/dataTables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/datatables/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.fancybox.pack.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.fancybox-media.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.flexslider.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/animate.js"></script>


  <!-- Vendor Scripts -->
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/modernizr.custom.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.isotope.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/animate.js"></script>
  <script src="<?php echo web_root; ?>plugins/home-plugins/js/custom.js"></script>

  <script type="text/javascript">
    $(function() {
      $("#dash-table").DataTable();
      $('#dash-table2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });

    $("#btnlogin").click(function() {
      var username = document.getElementById("user_email");
      var pass = document.getElementById("user_pass");

      $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });
      $('#BIRTHDATE').inputmask({
        mask: "2/1/y",
        placeholder: "mm/dd/yyyy",
        alias: "date",
        hourFormat: "24"
      });
      $('#HIREDDATE').inputmask({
        mask: "2/1/y",
        placeholder: "mm/dd/yyyy",
        alias: "date",
        hourFormat: "24"
      });
    });
  </script>
</body>

</html>