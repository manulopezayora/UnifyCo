<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UnifyCo | Registrar Empresa</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>


    <!-- Menú de navegación -->

    <?php include_once("./vista/modulos/app_admin_menu.php"); ?>

    <!-- Fin Menú de navegación -->


    <!-- Sección de Redactar Notícia -->

    <div class="container">

        <h2 class="teal-text">Redactar Notícias de interés</h2>
        <p class="red-text">No olvides rellenar todos los campos y asegurarte que la fecha de caducidad esta modificada.</p>

        <form action="#" method="post" class="margin-bottom">
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="news-title" type="text" class="validate">
                    <label class="active" for="news-title">Titular</label>
                </div>

                <div class="input-field col s12 m6">
                    <input id="sector" type="text" class="validate">
                    <label class="active" for="sector">Sector</label>
                </div>

                <div class="input-field col s12 m6">
                    <input id="expiration-date" type="date" class="validate">
                    <label class="active" for="expiration-date">Fecha de caducidad</label>
                </div>

                <div class="input-field file-field col s12 m6">
                    <div class="btn">
                        <span>Foto</span>
                        <input type="file" name="photoCompany" id="photoCompany">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Selecciona una foto">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="news" class="materialize-textarea" data-length="1000"></textarea>
                    <label for="news">Notícia:</label>
                </div>
            </div>



            <button class="btn waves-effect waves-light" type="submit" name="action">Crear Notícia
                <i class="material-icons right">send</i>
            </button>

            <button class="red btn waves-effect waves-light" type="reset" name="action">Borrar todo
                <i class="material-icons right">delete</i>
            </button>

        </form>

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