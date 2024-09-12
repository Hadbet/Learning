
<?php

include_once('dao/db/db_Learning.php');

$con = new LocalConector();
$conex = $con->conectar();
$id_curso = $_GET['CRlwZgd5Y32MQ'];

$datos = mysqli_query($conex, "SELECT Cursos.id_curso, Cursos.nombre as nombre_curso, Cursos.descripcion as descripcion_curso, Cursos.duracion, Cursos.id_area, Cursos.contacto, Cursos.imagen, 
       Modulos.id_modulos, Modulos.nombre, Modulos.descripcion, Modulos.url, Modulos.manual, Modulos.pagina, 
       Examenes.id_examen, Examenes.urlExamenGoogle
FROM Cursos
JOIN Modulos ON Cursos.id_curso = Modulos.id_curso
JOIN Examenes ON Modulos.id_modulos = Examenes.id_modulo
WHERE Cursos.id_curso = '$id_curso'");

while ($row = mysqli_fetch_assoc($datos)) {
    $id_cursoDos = $row['id_curso'];
    $url = $row['url'];
    $nombreCurso = $row['nombre_curso'];
    $nombre = $row['nombre'];
    $descripcion = $row['descripcion_curso'];
    $contacto = $row['contacto'];

    $parts = explode("@", $contacto);
    $nameParts = explode(".", $parts[0]);
    $name = ucfirst($nameParts[0]) . ' ' . ucfirst($nameParts[1]);

    $embedUrl = str_replace("watch?v=", "embed/", $url);
}

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
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Hugo Learning</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/icono/iconosup.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

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

              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-9 col-lg-9 col-xl-9 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-4">
                        <h5 class="m-0 me-2"><?php echo $nombreCurso;?></h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center gap-1" style="height: 50vh;">
                        <iframe style="width: 100%; height: 100%;" src="<?php echo $embedUrl;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                      <h5 class="card-title mt-4"><?php echo $nombre;?></h5>
                      <p class="card-text">
                          <?php echo $descripcion;?>
                      </p>
                      <h5 class="card-title mt-4">Contacto para dudas</h5>
                      <ul class="p-0 m-0">
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"
                              ><i class="bx bx-user"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0"><?php echo $name;?></h6>
                              <small class="text-muted"><?php echo $contacto;?></small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Transactions -->
                <div class="col-md-3 col-lg-3 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Modulos</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">

                          <?php
                          $datosDos = mysqli_query($conex, "SELECT * from Modulos where id_curso='$id_cursoDos'");

                          while ($rowDos = mysqli_fetch_assoc($datosDos)) {

                              $nombreModulo = $rowDos['nombre'];
                              $descripcionModulo = $rowDos['descripcion'];

                              echo '<li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
                <img src="images/semaforo/verde.png" alt="User" class="rounded" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <small class="text-muted d-block mb-1">' . $nombreModulo . '</small>
                    <h6 class="mb-0">' . $descripcionModulo . '</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0 text-success">Aprobado</h6>
                </div>
            </div>
          </li>';
                          }

                          mysqli_close($conex);
                          ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
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
