<?php

include_once('../db/db_Parte.php');

if(isset($_POST['btnEnviar'])){

    session_start();

    $Nomina = $_POST['usuario'];
    $contra=$_POST['password'];

    if (strlen($Nomina) == 1) { $Nomina = "0000000".$Nomina; }
    if (strlen($Nomina) == 2) { $Nomina = "000000".$Nomina; }
    if (strlen($Nomina) == 3) { $Nomina = "00000".$Nomina; }
    if (strlen($Nomina) == 4) { $Nomina = "0000".$Nomina; }
    if (strlen($Nomina) == 5) { $Nomina = "000".$Nomina; }
    if (strlen($Nomina) == 6) { $Nomina = "00".$Nomina; }
    if (strlen($Nomina) == 7) { $Nomina = "0".$Nomina; }

    $statusLogin = cliente($Nomina, $contra);

    if($statusLogin !== 0){
        $_SESSION['nomina'] = $Nomina;
        $_SESSION['tag'] = $contra;
        $_SESSION['nombre'] = $statusLogin;
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../../index.php'>";
    }else if($statusLogin == 0){
        echo "<script>alert('Acceso Denegado')</script>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../../login.html'>";
    }
}

if(isset($_POST['btnSalir'])){
    session_start();
    session_destroy();
    echo "<script>alert('Acceso Correcto')</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=../Historico.html'>";
}

if(isset($_POST['btnRegistro'])){
    echo "<script>alert('Acceso Correcto')</script>";
}

function cliente($Nomina, $Tag)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "SELECT * FROM `Empleados` WHERE `IdUser` = '$Nomina' and `IdTag` = '$Tag'";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
    $userData = array();

    if (mysqli_num_rows($rsconsPro) == 1) {
        $userData = mysqli_fetch_assoc($rsconsPro);
        return $userData['NomUser'];
    } else {
        return 0;
    }
}

?>