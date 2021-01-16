<?php
require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/productes.php';

if(isset($_SESSION['products'])) {
    $connexio = connectaBD();
    $arrayDetalls = [];
    foreach($_SESSION['products'] as $product => $quantity) {
        $detalls = getProducteDetellat($connexio, $product);
        $arrayDetalls[] = $detalls;
    }
}
require_once __DIR__ . '/../view/cabas.php';
?>