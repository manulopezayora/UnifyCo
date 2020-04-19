<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UnifyCo | Usiarios Registrados</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>


    <!-- Menú de navegación -->

    <?php include_once("./vista/modulos/app_admin_menu.php"); ?>

    <!-- Fin Menú de navegación -->


    <!-- Lista de Usuarios -->

    <div class="container">

        <table class="striped margin-bottom">
            <thead>
                <tr>
                    <th>Nombre de Usuario</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#">Username 1</a></td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">Username 2</a></td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">Username 3</a></td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">Username 4</a></td>
                    <td>
                        <a href="#"><i class="material-icons">edit</i></a>
                        <a href="#"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Fin lista de Usuarios -->



    <!-- Footer -->

    <?php include_once("./vista/modulos/app_footer.php"); ?>

    <!-- Fin Footer -->


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>