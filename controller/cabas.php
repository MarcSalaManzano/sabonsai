<?php

session_start();

require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/productes.php';


if(isset($_GET['producte'])) {
    $producteSeleccionat = $_GET['producte'];
    $connexio = connectaBD();
    $detalls = getProducteDetellat($connexio, $producteSeleccionat);

    $_SESSION['nProductesTotal']++;
    $_SESSION['totalPrice'] += $detalls['Price'];

    if(isset($_SESSION['products'][$producteSeleccionat]))
        $_SESSION['products'][$producteSeleccionat]++;
    else
        $_SESSION['products'][$producteSeleccionat] = 1;


    print_r($_SESSION);
    require __DIR__ . '/../view/header.php';
}
?>