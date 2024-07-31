<?php
$nombreCurso = $_POST['txtNombreCurso'];
$areaCurso = $_POST['txtAreaCurso'];
$duracionCurso = $_POST['txtDuracionCurso'];
$descripcionCurso = $_POST['txtDescripcionCurso'];
$imagenCurso = $_FILES['txtImagen'];
$nombreImagen = uniqid() . '.' . pathinfo($imagenCurso['name'], PATHINFO_EXTENSION); // Genera un nombre único para la imagen
$rutaDestino = '../../learning/images/portadas/' . $nombreImagen;
echo $rutaDestino;

if (move_uploaded_file($imagenCurso['tmp_name'], $rutaDestino)) {
    echo "La imagen se ha subido correctamente.";
} else {
    echo "Hubo un error al subir la imagen.";
}
// Para los módulos y exámenes, como tienes varios, puedes recorrerlos en un bucle
$nombreModulo = array();
$descripcionModulo = array();
$urlModulo = array();
$manualModulo = array();
$paginaModulo = array();
$examenModulo = array();

for ($i = 1; $i <= count($_POST['txtNombreModulo']); $i++) {
    $nombreModulo[] = $_POST['txtNombreModulo' . $i];
    $descripcionModulo[] = $_POST['txtDescripcionModulo' . $i];
    $urlModulo[] = $_POST['txtUrlModulo' . $i];
    $manualModulo[] = $_POST['txtManualModulo' . $i];
    $paginaModulo[] = $_POST['txtPaginaModulo' . $i];
    $examenModulo[] = $_POST['basic-default-fullname' . $i];
}

// Ahora tienes todos los valores del formulario en variables PHP
?>