<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UnifyCo | Buscar Empresas</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>


    <!-- Menú de navegación -->

    <?php include_once("./vista/modulos/app_menu.php"); ?>

    <!-- Fin Menú de navegación -->


    <div class="row">
        <div class="col s12 m12">
            <nav class="white">
                <div class="nav-wrapper">
                    <form action="#" method="post" class="margin-bottom margin-top">
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="black-text material-icons">search</i></label>
                            <i class=" black-text material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>



    <!-- Lista de empresas -->

    <div class="container">

        <table class="striped margin-bottom">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Sector</th>
                    <th>Actividad</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#">Empresa1</a></td>
                    <td>Sector1</td>
                    <td>Actividad1</td>
                </tr>
                <tr>
                    <td><a href="#">Empresa2</a></td>
                    <td>Sector2</td>
                    <td>Actividad2</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Fin lista de empresas -->




    <div class="row">
        <div class="col s12 m6">
            <form action="#" method="post">
                <select class="browser-default">
                    <option value="">Elige tu Actividad</option>
                    <option value="1">Fabricación</option>
                    <option value="2">Distribución</option>
                    <option value="3">Ventas</option>
                </select>
                <label>Elige una Actividad</label>
                <button class="btn block">Buscar</button>
            </form>
        </div>

        <div class="col s12 m6">
            <form action="#" method="post" class="margin-bottom">
                <select class="browser-default">
                    <option value="">Elige tu sector</option>
                    <option value="1">Agricultura</option>
                    <option value="2">Alimentación</option>
                    <option value="3">Carpinteria: metal o madera</option>
                    <option value="4">Comercio</option>
                    <option value="5">Construcción</option>
                    <option value="6">Educación</option>
                    <option value="7">Hostelería</option>
                    <option value="8">Industrias Químicas</option>
                    <option value="9">Mecánico y Eléctrico</option>
                    <option value="10">Petroleo y produccion de gas</option>
                    <option value="11">Servicios de mensajeria</option>
                    <option value="12">Salud</option>
                    <option value="13">Textiles</option>
                    <option value="14">Transporte</option>
                </select>
                <label>Elige una Actividad</label>
                <button class="btn block">Buscar</button>
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