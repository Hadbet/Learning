<?php
header('Content-Type: application/json');

$response = array('status' => 'success');

$nombreCurso = $_POST['txtNombreCurso'];
$areaCurso = $_POST['txtAreaCurso'];
$duracionCurso = $_POST['txtDuracionCurso'];
$descripcionCurso = $_POST['txtDescripcionCurso'];
$imagenCurso = $_FILES['txtImagen'];

if (isset($_FILES['txtImagen']) && $_FILES['txtImagen']['error'] == 0) {
    $imagenCurso = $_FILES['txtImagen'];
    $nombreImagen = uniqid() . '.' . pathinfo($imagenCurso['name'], PATHINFO_EXTENSION);
    $rutaDestino = '/home/u909553968/domains/grammermx.com/public_html/RH/Learning/images/portadas/' . $nombreImagen;

    if (!move_uploaded_file($imagenCurso['tmp_name'], $rutaDestino)) {
        $response = array('status' => 'error', 'message' => 'Hubo un error al subir la imagen.');
    }
} else {
    $response = array('status' => 'error', 'message' => 'No se subió ningún archivo, o hubo un error al subirlo.');
}

// Para los módulos y exámenes, como tienes varios, puedes recorrerlos en un bucle
$nombreModulo = array();
$descripcionModulo = array();
$urlModulo = array();
$manualModulo = array();
$paginaModulo = array();
$examenModulo = array();

for ($i = 1; $i <= $_POST['contador']; $i++) {
    if (isset($_FILES['txtManualModulo' . $i])) {
        if ($_FILES['txtManualModulo' . $i]['error'] == 0) {
            $manualCurso = $_FILES['txtManualModulo' . $i];
            $nombreManual = uniqid() . '.' . pathinfo($manualCurso['name'], PATHINFO_EXTENSION);
            $rutaDestinoManual = '/home/u909553968/domains/grammermx.com/public_html/RH/Learning/manuales/' . $nombreManual;

            if (!move_uploaded_file($manualCurso['tmp_name'], $rutaDestinoManual)) {
                $response = array('status' => 'error', 'message' => 'Hubo un error al subir el manual.');
            }
        } else {
            $response = array('status' => 'error', 'message' => 'No se subió ningún manual, o hubo un error al subirlo.');
        }
    }else{
        $response = array('status' => 'error', 'message' => 'No existe el archivo.');
    }
}

echo json_encode($response);
?>