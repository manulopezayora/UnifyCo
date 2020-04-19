<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UnifyCo | Editar Empresa</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>


    <!-- Menú de navegación -->

    <?php include_once("./vista/modulos/app_menu.php"); ?>

    <!-- Fin Menú de navegación -->


    <div class="container">


        <div class="section">
            <h5>Cambiar nombre de la Empresa:</h5>
            <form action="#" method="post" class="col s6 m6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="companyName" type="text" class="validate">
                        <label for="companyName">Nombre Empresa</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>

        <div class="section">
            <h5>Cambiar foto de portada:</h5>
            <form action="#" method="post" class="col s6 m6">
                <div class="row">
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
            </form>
        </div>


        <div class="section">
            <h5>Cambiar Dirección:</h5>
            <form action="#" method="post" class="col s6 m6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="companyAddress" type="text" class="validate">
                        <label class="active" for="companyAddress">Dirección</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>


        <div class="section">
            <h5>Cambiar Email:</h5>
            <form action="#" method="post" class="col s6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="companyEmail" type="text" class="validate">
                        <label class="active" for="companyEmail">Email</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>

        <div class="section">
            <h5>Cambiar Teléfono:</h5>
            <form action="#" method="post" class="col s6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="companyPhone" type="text" class="validate">
                        <label class="active" for="companyPhone">Teléfono</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>

        <div class="section">
            <h5>Cambiar Página Web:</h5>
            <form action="#" method="post" class="col s6">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="companyWeb" type="text" class="validate">
                        <label class="active" for="companyWeb">Página Web</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>

        <div class="section">
            <h5>Cambiar Sector:</h5>
            <form action="#" method="post" class="col s6">
                <div class="row">
                    <div class="col s12 m6">
                        <select class="browser-default">
                            <option value="">Elige tu sector</option>
                            <option value="agricultura">Agricultura</option>
                            <option value="alimentacion">Alimentación</option>
                            <option value="carpinteria">Carpinteria: metal o madera</option>
                            <option value="comercio">Comercio</option>
                            <option value="construccion">Construcción</option>
                            <option value="educacion">Educación</option>
                            <option value="hosteleria">Hostelería</option>
                            <option value="industriaQuimica">Industrias Químicas</option>
                            <option value="mecanicoElectricista">Mecánico y Eléctrico</option>
                            <option value="petroleoGas">Petroleo y produccion de gas</option>
                            <option value="mensajeria">Servicios de mensajeria</option>
                            <option value="salud">Salud</option>
                            <option value="textil">Textiles</option>
                            <option value="transporte">Transporte</option>
                        </select>
                        <label>Elige un Sector</label>
                    </div>
                </div>
                <p><a class="waves-effect waves-light btn blue">Cambiar</a></p>
            </form>
        </div>

        <div class="section">
            <h5>Cambiar Actividad:</h5>
            <form action="#" method="post" class="col s6">
                <div class="row">
                    <div class="col s12 m6">
                        <select class="browser-default">
                            <option value="">Elige tu Actividad</option>
                            <option value="fabricacion">Fabricación</option>
                            <option value="distribucion">Distribución</option>
                            <option value="ventas">Ventas</option>
                        </select>
                        <label>Elige una Actividad</label>
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