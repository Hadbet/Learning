

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

    <script src="libs/sweetalert/sweetalert.js"></script>


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
            <?php
            # Header section
            require_once('estaticos/nav.php');
            ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Cursos/</span> <span id="nombreLabel">Nombre</span></h4>

                    <div class="mb-3">
                        <label class="form-label" for="txtNombreCurso">Nombre</label>
                        <input type="text" class="form-control" name="txtNombreCurso" id="txtNombreCurso"
                               placeholder="John Doe" onchange="rellenarTitulo()"/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Área</label>
                        <select class="form-select" name="txtAreaCurso" id="txtAreaCurso" aria-label="Default select example">
                            <option selected>Seleccione área</option>
                        </select>
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
                    <div class="mb-3">
                        <label class="form-label" for="txtContacto">Contacto para dudas</label>
                        <input type="text" class="form-control" name="txtContacto" id="txtContacto"
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
                                            <input type="text" class="form-control" name="txtNombreModulo1" id="txtNombreModulo1"
                                                   placeholder="John Doe"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtDescripcionModulo1">Descripción</label>
                                            <textarea
                                                    id="txtDescripcionModulo1"
                                                    name="txtDescripcionModulo1"
                                                    class="form-control"
                                                    placeholder="Bla bla bla"
                                            ></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtUrlModulo1">url</label>
                                            <input type="text" class="form-control" name="txtUrlModulo1" id="txtUrlModulo1"
                                                   placeholder="www.grammer.com"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtManualModulo1">Manual</label>
                                            <input type="file" class="form-control" name="txtManualModulo1" id="txtManualModulo1"
                                                   />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="txtPaginaModulo1">Página</label>
                                            <input type="text" class="form-control" name="txtPaginaModulo1" id="txtPaginaModulo1"
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
                                            <input type="text" class="form-control" name="txtFormulario1" id="txtFormulario1"
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

                        <button class="btn btn-primary mt-5" onclick="validarInputs()">Enviar</button>
                    </div>
                        <input style="display: none" type="text" class="form-control" name="contador" id="contador"
                               placeholder="forms google.com"/>
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
                        <input type="text" class="form-control" name="txtNombreModulo${bandera}" id="txtNombreModulo${bandera}" placeholder="John Doe"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtDescripcionModulo${bandera}">Descripción</label>
                        <textarea name="txtDescripcionModulo${bandera}" id="txtDescripcionModulo${bandera}" class="form-control" placeholder="Bla bla bla" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtUrlModulo${bandera}">url</label>
                        <input type="text" class="form-control" name="txtUrlModulo${bandera}" id="txtUrlModulo${bandera}" placeholder="www.grammer.com"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtManualModulo${bandera}">Manual</label>
                        <input type="file" class="form-control" name="txtManualModulo${bandera}" id="txtManualModulo${bandera}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="txtPaginaModulo${bandera}">Página</label>
                        <input type="text" class="form-control" name="txtPaginaModulo${bandera}" id="txtPaginaModulo${bandera}" placeholder="www.grammer.com"/>
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
                        <input type="text" class="form-control" name="txtFormulario${bandera}" id="txtFormulario${bandera}"
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
        document.getElementById("contador").value=bandera;
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
        subirData();
        return true;
    }

    function rellenarTitulo(){
        document.getElementById("nombreLabel").innerText = document.getElementById("txtNombreCurso").value;
    }

    function subirData() {
        let txtNombreCurso = document.getElementById('txtNombreCurso').value;
        let txtAreaCurso = document.getElementById('txtAreaCurso').value;
        let txtDuracionCurso = document.getElementById('txtDuracionCurso').value;
        let txtDescripcionCurso = document.getElementById('txtDescripcionCurso').value;
        let txtContacto = document.getElementById('txtContacto').value;
        let txtImagen = document.getElementById('txtImagen').files[0];
        let contador = document.getElementById('contador').value;

        let txtNombreModulo = [];
        let txtDescripcionModulo = [];
        let txtUrlModulo = [];
        let txtManualModulo = [];
        let txtPaginaModulo = [];
        let txtFormulario = [];

        for (let i = 1; i <= contador; i++) {
            txtNombreModulo[i] = document.getElementById('txtNombreModulo' + i).value;
            txtDescripcionModulo[i] = document.getElementById('txtDescripcionModulo' + i).value;
            txtUrlModulo[i] = document.getElementById('txtUrlModulo' + i).value;
            txtManualModulo[i] = document.getElementById('txtManualModulo' + i).files[0];
            txtPaginaModulo[i] = document.getElementById('txtPaginaModulo' + i).value;
            txtFormulario[i] = document.getElementById('txtFormulario' + i).value;
        }

// Crear un objeto FormData y agregar todos los datos del formulario
        let formData = new FormData();
        formData.append('txtNombreCurso', txtNombreCurso);
        formData.append('txtContacto', txtContacto);
        formData.append('txtAreaCurso', txtAreaCurso);
        formData.append('txtDuracionCurso', txtDuracionCurso);
        formData.append('txtDescripcionCurso', txtDescripcionCurso);
        formData.append('txtImagen', txtImagen);
        formData.append('contador', contador);

        for (let i = 1; i <= contador; i++) {
            formData.append('txtNombreModulo' + i, txtNombreModulo[i]);
            formData.append('txtDescripcionModulo' + i, txtDescripcionModulo[i]);
            formData.append('txtUrlModulo' + i, txtUrlModulo[i]);
            formData.append('txtManualModulo' + i, txtManualModulo[i]);
            formData.append('txtPaginaModulo' + i, txtPaginaModulo[i]);
            formData.append('txtFormulario' + i, txtFormulario[i]);
        }

// Hacer la solicitud POST con Fetch API
        fetch('dao/admin/insertCurso.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        title: "Curso ingresado",
                        text: "Ya lo puedes ver en el inicio",
                        icon: "success"
                    });
                    console.log(data.message);
                } else {
                    // Aquí puedes agregar el código que se ejecutará si algo salió mal
                    console.error(data.message);
                }
            })
            .catch((error) => console.error('Error:', error));
    }
    llenarAPU();
    function llenarAPU() {
        $.getJSON('https://grammermx.com/RH/Learning/dao/admin/daoArea.php', function (data) {
            var select = document.getElementById("txtAreaCurso");
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].descripcion;
                createOption.value = data.data[i].id_area;
                select.appendChild(createOption);
            }
        });
    }
</script>
</body>
</html>
