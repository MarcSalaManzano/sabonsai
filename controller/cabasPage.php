<?php
require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/productes.php';

if(isset($_SESSION['products'])) {
    $connexio = connectaBD();
    $arrayDetalls = getDetallsCabas($connexio);
}
require_once __DIR__ . '/../view/cabas.php';
?>