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

for ($i = 0; $i < count($_FILES['txtManualModulo']['name']); $i++) {
    if ($_FILES['txtManualModulo']['error'][$i] == 0) {
        $manualCurso = $_FILES['txtManualModulo']['tmp_name'][$i];
        $nombreManual = uniqid() . '.' . pathinfo($_FILES['txtManualModulo']['name'][$i], PATHINFO_EXTENSION);
        $rutaDestinoManual = '/home/u909553968/domains/grammermx.com/public_html/RH/Learning/manuales/' . $nombreManual;

        if (move_uploaded_file($manualCurso, $rutaDestinoManual)) {
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