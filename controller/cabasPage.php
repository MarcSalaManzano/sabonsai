<?php
require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/productes.php';

if(isset($_SESSION['products'])) {
    foreach($_SESSION['products'] as $product) {
        $connexio = connectaBD();
        $detalls = getProducteDetellat($connexio, $product);

    }
}