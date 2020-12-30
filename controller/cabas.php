<?php

session_start();

require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/productes.php';


if(isset($_GET['producte'])) {
    $producteSeleccionat = $_GET['producte'];
    $connexio = connectaBD();
    $detalls = getProducteDetellat($connexio, $producteSeleccionat);

    array_push($_SESSION['products'], $producteSeleccionat);
    array_push($_SESSION['prices'], $detalls['Price']);
    print_r($_SESSION);
    require __DIR__ . '/../view/header.php';
}
?>