<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UnifyCo | Mi Empresa</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>


    <!-- Menú de navegación -->

    <?php include_once("./vista/modulos/app_menu.php"); ?>

    <!-- Fin Menú de navegación -->


    <!-- Sección de Mi compañia -->

    <div class="container">

        <div class="row">
            <div class="grid-example col s12 company__img">

                <a href="./editcompany.php" class="btn-floating btn-large waves-effect waves-light teal bottom-right"><i class="material-icons">edit</i></a>

            </div>

            <div class=" grid-example col s12 m12">

                <h1 class="teal-text">MiCompañia</h1>

                <div class="divider"></div>

                <div class="section">
                    <h5 class="teal-text">Descripción:</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, recusandae quia molestiae, totam architecto reprehenderit delectus labore saepe omnis praesentium non provident porro accusantium esse minus sapiente eos dolore est?</p>
                </div>

                <div class="divider"></div>

                <div class="section">
                    <h5 class="teal-text">Sector:</h5>
                    <p>Mi Sector al que pertenece</p>
                </div>

                <div class="divider"></div>

                <div class="section">
                    <h5 class="teal-text">Actividad comercial:</h5>
                    <p>La actividad comercial</p>
                </div>

                <div class="divider"></div>

                <div class="section">
                    <h5 class="teal-text">Dirección:</h5>
                    <p>La dirección de la empresa</p>
                </div>

                <div class="divider"></div>

                <div class="section">
                    <h5 class="teal-text">Contacto:</h5>
                    <p>Telefono</p>
                    <p>Email</p>
                </div>
            </div>
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