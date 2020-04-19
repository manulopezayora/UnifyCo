<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>¿Olvidaste algo?</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- Hoja de estilos propia -->
    <link rel="stylesheet" href="./css/forms.css">


</head>

<body>





    <!-- inicio del menú -->
    <?php include_once("./vista/modulos/app_white_menu.php") ?>
    <!-- Fin del menú -->




    <div class="row box__form">
        <form action="./app/index.html" method="post" class="col s12">
            <h5 class="teal-text text-lighten-1">¿Olvidaste algo?</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <p class="center-align"><a class="waves-effect waves-light btn center-align">Verificar</a></p>
            <p class="center-align"><a class="blue-text center-align">Se enviara un email a la cuenta asociada con el nombre de usuario y la nueva contraseña</a></p>

        </form>
    </div>




    <!-- inicio del footer -->
    <?php include_once("./vista/modulos/app_white.footer.php"); ?>
    <!-- Fin del footer -->


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>