<!DOCTYPE html>
<!-- beautify ignore:start -->
<html
        lang="en"
        class="light-style layout-menu-fixed"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="../assets/"
        data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Vertical Layouts - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/>

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
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                    type="text"
                                    class="form-control border-0 shadow-none"
                                    placeholder="Search..."
                                    aria-label="Search..."
                            />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="images/00030292.png" alt class="w-px-40 h-auto rounded-circle"/>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="images/00030292.png" alt
                                                         class="w-px-40 h-auto rounded-circle"/>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">Señor Hugo</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">Mi perfil</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Configuraciones</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="auth-login-basic.html">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Cerrar sesion</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Cursos/</span> <span id="nombreLabel">Nombre</span></h4>
                    <form enctype="multipart/form-data" action="dao/admin/insertCurso.php" onsubmit="return validarInputs()" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="txtNombreCurso">Nombre</label>
                        <input type="text" class="form-control" name="txtNombreCurso" id="txtNombreCurso"
                               placeholder="John Doe" onchange="rellenarTitulo()"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtAreaCurso">Área</label>
                        <input type="text" class="form-control" name="txtAreaCurso" id="txtAreaCurso"
                               placeholder="ACME Inc."/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtDuracionCurso">Duración</label>
                        <input type="text" class="form-control" name="txtDuracionCurso" id="txtDuracionCurso"
                               placeholder="ACME Inc."/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtDescripcionCurso">Descripción</label>
                        <textarea
                                id="txtDescripcionCurso"
                                name="txtDescripcionCurso"
                                class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                        ></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtDuracionCurso">Imagen de curso</label>
                        <input type="file" class="form-control" name="txtImagen" id="txtImagen"
                               placeholder="ACME Inc."/>
                    </div>

                    <!-- Basic Layout -->
                    <div class="row" id="contenidoModulos">

                        <div class="col-6">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Modulo 1</h5>
                                </div>
                                <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="txtNombreModulo1">Nombre</label>
                                            <input type="text" class="form-control" name="txtNombreModulo[]" id="txtNombreModulo1"
                                                   placeholder="John Doe"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtDescripcionModulo1">Descripción</label>
                                            <textarea
                                                    id="txtDescripcionModulo1"
                                                    name="txtDescripcionModulo[]"
                                                    class="form-control"
                                                    placeholder="Bla bla bla"
                                            ></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtUrlModulo1">url</label>
                                            <input type="text" class="form-control" name="txtUrlModulo[]" id="txtUrlModulo1"
                                                   placeholder="www.grammer.com"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtManualModulo1">Manual</label>
                                            <input type="file" class="form-control" name="txtManualModulo[]" id="txtManualModulo1"
                                                   />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtPaginaModulo1">Página</label>
                                            <input type="text" class="form-control" name="txtPaginaModulo[]" id="txtPaginaModulo1"
                                                   placeholder="www.grammer.com"/>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Examen del Modulo 1</h5>
                                </div>
                                <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="txtFormulario1">Formulario de google</label>
                                            <input type="text" class="form-control" name="txtFormulario[]" id="txtFormulario1"
                                                   placeholder="forms google.com"/>
                                        </div>

                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button onclick="agregarModulo()" class="btn btn-primary">Agregar modulo</button>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Enviar</button>
                    </div>

                    </form>
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

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>

    var bandera = 1;

    function agregarModulo() {
        bandera = bandera + 1;

        var modulo = document.createElement('div');
        modulo.className = "col-6";
        modulo.innerHTML = `
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Modulo ${bandera}</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="txtNombreModulo${bandera}">Nombre</label>
                        <input type="text" class="form-control" name="txtNombreModulo[]" id="txtNombreModulo${bandera}" placeholder="John Doe"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtDescripcionModulo${bandera}">Descripción</label>
                        <textarea  name="txtDescripcionModulo[]" id="txtDescripcionModulo${bandera}" class="form-control" placeholder="Bla bla bla" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtUrlModulo${bandera}">url</label>
                        <input type="text" class="form-control" name="txtUrlModulo[]" id="txtUrlModulo${bandera}" placeholder="www.grammer.com"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtManualModulo${bandera}">Manual</label>
                        <input type="file" class="form-control" name="txtManualModulo[]" id="txtManualModulo${bandera}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtPaginaModulo${bandera}">Página</label>
                        <input type="text" class="form-control" name="txtPaginaModulo[]" id="txtPaginaModulo${bandera}" placeholder="www.grammer.com"/>
                    </div>
                </form>
            </div>
        </div>`;

        var examen = document.createElement('div');
        examen.className = "col-6";
        examen.innerHTML = `
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Examen del Modulo ${bandera}</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="txtFormulario${bandera}">Formulario de google</label>
                        <input type="text" class="form-control" name="txtFormulario[]" id="txtFormulario${bandera}"
                               placeholder="forms google.com"/>
                    </div>
                </form>
            </div>
        </div>`;

        var contenidoModulos = document.getElementById("contenidoModulos");
        contenidoModulos.appendChild(modulo);
        contenidoModulos.appendChild(examen);
    }

    function validarInputs() {
        var inputs = document.getElementById("contenidoModulos").getElementsByTagName("input");
        var textareas = document.getElementById("contenidoModulos").getElementsByTagName("textarea");

        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value.trim() === "" && !inputs[i].id.includes("txtManual")) {
                alert("Por favor, rellene todos los campos de entrada.");
                return false;
            }
        }

        for (var i = 0; i < textareas.length; i++) {
            if (textareas[i].value.trim() === "") {
                alert("Por favor, rellene todos los campos de entrada.");
                return false;
            }
        }

        alert("Todos los campos de entrada están llenos.");
        return true;
    }

    function rellenarTitulo(){
        document.getElementById("nombreLabel").innerText = document.getElementById("txtNombreCurso").value;
    }
</script>
</body>
</html>
