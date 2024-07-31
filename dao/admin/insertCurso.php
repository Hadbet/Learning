<?php
$nombreCurso = $_POST['txtNombreCurso'];
$areaCurso = $_POST['txtAreaCurso'];
$duracionCurso = $_POST['txtDuracionCurso'];
$descripcionCurso = $_POST['txtDescripcionCurso'];
$imagenCurso = $_FILES['txtImagen'];

if (isset($_FILES['txtImagen']) && $_FILES['txtImagen']['error'] == 0) {
    $imagenCurso = $_FILES['txtImagen'];
    $nombreImagen = uniqid() . '.' . pathinfo($imagenCurso['name'], PATHINFO_EXTENSION);
    $rutaDestino = '/home/u909553968/domains/grammermx.com/public_html/RH/Learning/images/portadas/' . $nombreImagen;

    if (move_uploaded_file($imagenCurso['tmp_name'], $rutaDestino)) {
        echo "La imagen se ha subido correctamente.";
    } else {
        echo "Hubo un error al subir la imagen.";
        print_r(error_get_last());
    }
} else {
    echo "No se subió ningún archivo, o hubo un error al subirlo.";
}


// Para los módulos y exámenes, como tienes varios, puedes recorrerlos en un bucle
$nombreModulo = array();
$descripcionModulo = array();
$urlModulo = array();
$manualModulo = array();
$paginaModulo = array();
$examenModulo = array();

echo $_POST['contador'];

for ($i = 1; $i <= $_POST['contador']; $i++) {
    $nombreModulo[] = $_POST['txtNombreModulo' . $i];
    $descripcionModulo[] = $_POST['txtDescripcionModulo' . $i];
    $urlModulo[] = $_POST['txtUrlModulo' . $i];
    $manualModulo[] = $_POST['txtManualModulo' . $i];
    $paginaModulo[] = $_POST['txtPaginaModulo' . $i];
    $examenModulo[] = $_POST['basic-default-fullname' . $i];

    echo 'txtManualModulo' . $i;

    if (isset($_FILES['txtManualModulo' . $i]) && $_FILES['txtManualModulo' . $i]['error'] == 0) {
        $manualCurso = $_FILES['txtManualModulo' . $i];
        $nombreManual = uniqid() . '.' . pathinfo($manualCurso['name'], PATHINFO_EXTENSION);
        $rutaDestinoManual = '/home/u909553968/domains/grammermx.com/public_html/RH/Learning/manuales/' . $nombreManual;

        if (move_uploaded_file($manualCurso['tmp_name'], $rutaDestinoManual)) {
            echo "El manual se ha subido correctamente.";
        } else {
            echo "Hubo un error al subir el manual.";
            print_r(error_get_last());
        }
    } else {
        echo "No se subió ningún manual, o hubo un error al subirlo.";
    }
}

// Ahora tienes todos los valores del formulario en variables PHP
?>