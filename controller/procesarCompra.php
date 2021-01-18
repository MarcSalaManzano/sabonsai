<?php
require_once __DIR__ . '/../model/connectaBD.php';
require_once __DIR__ . '/../model/productes.php';
require_once __DIR__ . '/../model/pedroPorro.php';

if(isset($_SESSION['products']) && !empty($_SESSION['products'])) {
    $connexio = connectaBD();
    $arrayDetalls = getDetallsCabas($connexio);
    registraCompra($connexio, $arrayDetalls);
    buidarCarro();
    header('location: http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=compraBien');
}

?>