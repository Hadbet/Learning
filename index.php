<?php

include_once('dao/db/db_Learning.php');

session_start();

if ($_SESSION["nomina"] == "" && $_SESSION["nomina"]== null && $_SESSION["tag"]== "" && $_SESSION["tag"]== null) {
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=login.html'>";
    session_destroy();
}else{
    session_start();
}

    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT Cursos.id_curso, Cursos.nombre as nombre_curso, Cursos.descripcion as descripcion_curso, Cursos.duracion, Cursos.id_area, Cursos.contacto, Cursos.imagen, 
       Modulos.id_modulos, Modulos.nombre, Modulos.descripcion, Modulos.url, Modulos.manual, Modulos.pagina, 
       Examenes.id_examen, Examenes.urlExamenGoogle
FROM Cursos
JOIN Modulos ON Cursos.id_curso = Modulos.id_curso
JOIN Examenes ON Modulos.id_modulos = Examenes.id_modulo");



?>

<!DOCTYPE html>

<html
        lang="en"
        class="light-style layout-menu-fixed"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="assets/"
        data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>GrammBook Learning</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/icono/iconosup.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <?php
        # Header section
            require_once('estaticos/header.php');
    ?>

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <?php
            # Header section
            require_once('estaticos/nav.php');
            ?>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">

                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Bienvenido <?php echo $_SESSION["nombre"];?>! 🎉</h5>
                                            <p class="mb-4">
                                                Este portal tiene <span class="fw-bold">todo lo que necesitas saber sobre grammer</span>
                                                 como cursos generales, capacitaciones por puesto y por áreas.
                                            </p>

                                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Ver perfil</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img
                                                    src="images/supergramito.png"
                                                    height="190"
                                                    alt="View Badge User"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img
                                                            src="assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success"
                                                            class="rounded"
                                                    />
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Concluidos</span>
                                            <h3 class="card-title mb-2">0</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img
                                                            src="assets/img/icons/unicons/wallet-info.png"
                                                            alt="Credit Card"
                                                            class="rounded"
                                                    />
                                                </div>
                                            </div>
                                            <span>Pendientes</span>
                                            <h3 class="card-title text-nowrap mb-1">0</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">

                        <?php
                        while($row = mysqli_fetch_assoc($datos)) {
                            // Generar el HTML para cada registro
                            echo '<div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left"  src="images/portadas/' . $row['imagen'] . '" alt="Card image"/>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['nombre_curso'] . '</h5>
                            <p class="card-text">' . $row['descripcion_curso'] . '</p>
                            <a href="capacitacion.php?CRlwZgd5Y32MQ='.$row['id_curso'].'" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
                        }

                        mysqli_close($conex);
                        ?>

                    </div>


                    <div class="card-group mb-5">
                        <div class="card">
                            <img class="card-img-top" src="images/logistica.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Logística</h5>
                                <p class="card-text">
                                    Planeación, plan de producción, tráfico, órdenes de producción.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a onclick="aviso()" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="images/calidad.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Calidad</h5>
                                <p class="card-text">
                                    Garantías, especificaciones.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a onclick="aviso()" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="images/it.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">IT</h5>
                                <p class="card-text">
                                    Soporte, Instalaciones, Configuraciones.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a onclick="aviso()" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="images/mantenimiento.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Mantenimiento</h5>
                                <p class="card-text">
                                    TPM, EASE, TOOLCRIP.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a onclick="aviso()" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="images/ingenieria.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Ingeniería</h5>
                                <p class="card-text">
                                    Routings,WC,Procesos,PokaYokes.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a onclick="aviso()" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="images/rh.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">RH</h5>
                                <p class="card-text">
                                    Nóminas, relaciones laborales, entrenamientos y comunicación.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a onclick="aviso()" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="images/gps.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">GPS</h5>
                                <p class="card-text">
                                    Layout,Sugestion System,Kaizen System y Metodologias Lean.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a onclick="aviso()" class="btn btn-sm btn-outline-primary">Ver capacitación</a>
                            </div>
                        </div>
                    </div>
                    <button
                            type="button"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#modalCenter"
                            id="modalAviso"
                            style="display: none"
                    >
                        Launch modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Aviso</h5>
                                    <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3 text-center">
                                            <img src="images/semaforo/amarillo.png" class="img-fluid text-center" style="width: 50%">
                                        </div>
                                        <h2 class="text-center">La página aún está en construcción</h2>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- / Content -->


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<div class="buy-now">
    <a
            href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
            target="_blank"
            class="btn btn-danger btn-buy-now"
    >Cerrar sesion</a
    >
</div>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->
<script src="assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
