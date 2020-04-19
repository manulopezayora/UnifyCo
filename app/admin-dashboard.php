<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>UnifyCo | Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

  <!-- Menú de navegación -->
  <?php include_once("./vista/modulos/app_admin_menu.php")?>
  <!-- Menú de navegación -->



  <!-- Sección de notícias -->

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text">Mundo UnifyCo</h1>

      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="https://images.pexels.com/photos/1320684/pexels-photo-1320684.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        </div>
        <div class="card-content">
          <h2 class="card-title grey-text text-darken-4">Noticia 1</h2>
          <p><a href="noticias.php">Leer más...</a></p>
        </div>

      </div>

      <br><br>

    </div>
  </div>




  <!-- Footer -->

  <?php include_once("./vista/modulos/app_footer.php"); ?>

  <!-- Fin Footer -->


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>

</html>