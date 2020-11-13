<?php
require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/productes.php';

if(isset($_GET['producte'])) {
    $producteSeleccionat = $_GET['producte'];
    $connexio = connectaBD();
    $detalls = getProducteDetellat($connexio, $producteSeleccionat);
    require_once __DIR__.'/../view/producteDetallat.php';
} elseif (isset($_GET['categoria'])) {
    $categoriaSeleccionada = $_GET['categoria'];
    $connexio = connectaBD();
    $productes = getProductes($connexio, $categoriaSeleccionada);
    require_once __DIR__.'/../view/productes.php';
}

?>



