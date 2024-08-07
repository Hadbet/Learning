<?php
header('Content-Type: application/json');
include_once('../db/db_Learning.php');

$response = array('status' => 'success','message' => 'true');

$nombreCurso = $_POST['txtNombreCurso'];
$areaCurso = $_POST['txtAreaCurso'];
$duracionCurso = $_POST['txtDuracionCurso'];
$descripcionCurso = $_POST['txtDescripcionCurso'];
$contacto = $_POST['txtContacto'];
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

$con = new LocalConector();
$conex = $con->conectar();

// Iniciar transacción
$conex->begin_transaction();

$insertSolicitud = $conex->prepare("INSERT INTO `Cursos`( `nombre`, `descripcion`, `duracion`, `id_area`, `contacto`, `imagen`)
                                              VALUES (?, ?, ?, ?, ?, ?)");
$insertSolicitud->bind_param("sssiss", $nombreCurso, $descripcionCurso, $duracionCurso, $areaCurso, $contacto, $nombreImagen);
$rInsertSolicitud = $insertSolicitud->execute();

// Obtener el último ID insertado
$id_curso = $conex->insert_id;

if(!$rInsertSolicitud) {
    $conex->rollback();
    if(!$rInsertSolicitud){
        $response = array('status' => 'error', 'message' => 'Error en Registrar Solicitud');
    }
} else {
    $conex->commit();
    $response = array('status' => 'success', 'message' => 'Datos guardados correctamente');
}

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

    $nombreModulo = $_POST['txtNombreModulo'.$i];
    $descripcionModulo = $_POST['txtDescripcionModulo'.$i];
    $urlModulo = $_POST['txtUrlModulo'.$i];
    $paginaModulo = $_POST['txtPaginaModulo'.$i];

    $formularioModulo = $_POST['txtFormulario'.$i];

// Iniciar transacción
    $conex->begin_transaction();

    $insertModulo = $conex->prepare("INSERT INTO `Modulos`(`id_curso`, `nombre`, `descripcion`, `url`, `manual`, `pagina`)
                                              VALUES (?, ?, ?, ?, ?, ?)");
    $insertModulo->bind_param("isssss", $id_curso, $nombreModulo, $descripcionModulo, $urlModulo, $nombreManual, $paginaModulo);
    $rInsertModulo = $insertModulo->execute();
    /*
    // Obtener el último ID insertado
    $id_modulo = $conex->insert_id;

    $insertExamen = $conex->prepare("INSERT INTO `Examenes`(`id_modulo`, `urlExamenGoogle`)
                                              VALUES (?, ?)");
    $insertExamen->bind_param("is", $id_modulo, $formularioModulo);
    $rInsertExamen = $insertExamen->execute();
    */

    if(!$rInsertModulo) {
        $conex->rollback();
        if(!$rInsertModulo){
            $response = array('status' => 'error', 'message' => 'Error en Registrar Solicitud');
        }
    } else {
        $conex->commit();
        $response = array('status' => 'success', 'message' => 'Datos guardados correctamente');
    }
    $conex->close();
}

echo json_encode($response);
?>