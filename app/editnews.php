<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UnifyCo | Editar Notícias</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>


    <!-- Menú de navegación -->

    <?php include_once("./vista/modulos/app_admin_menu.php"); ?>

    <!-- Fin Menú de navegación -->


    <!-- Lista de Notícias -->

    <div class="container">

        <table class="striped margin-bottom">
            <thead>
                <tr>
                    <th>Titular Notícia</th>
                    <th>Publicación</th>
                    <th>Caducidad</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#">Notícia 1</a></td>
                    <td>01-03-2018</td>
                    <td>31-07-2018</td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">Notícia 2</a></td>
                    <td>01-04-2018</td>
                    <td>31-05-2018</td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">Notícia 3</a></td>
                    <td>01-01-2018</td>
                    <td>15-01-2018</td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">Notícia 4</a></td>
                    <td>01-02-2018</td>
                    <td>28-02-2018</td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Fin lista de Notícias -->



    <!-- Footer -->

    <?php include_once("./vista/modulos/app_footer.php"); ?>

    <!-- Fin Footer -->


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>