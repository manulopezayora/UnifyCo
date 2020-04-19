<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UnifyCo | Editar Perfil</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

    <!-- Menú de navegación -->



    <!-- Menú de navegación -->

    <?php include_once("./vista/modulos/app_menu.php"); ?>

    <!-- Fin Menú de navegación -->



    <div class="container">


        <div class="section">
            <h5>Cambiar nombre de usuario:</h5>
            <form action="#" method="post" class="col s6 m6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="username" type="text" class="validate">
                        <label for="username">Usuario</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>


        <div class="section">
            <h5>Cambiar Email:</h5>
            <form action="#" method="post" class="col s6 m6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>


        <div class="section">
            <h5>Cambiar contraseña:</h5>
            <form action="#" method="post" class="col s6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="password2" type="password" class="validate">
                        <label for="password2">Vuelve a escribir la contraseña</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>

        <div class="section">
            <h5>Borrar Cuenta</h5>
            <form action="#" method="post" class="col s6">
                <p><a class="waves-effect waves-light btn red">Borrar</a></p>
            </form>
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