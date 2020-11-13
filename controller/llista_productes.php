<?php

$categoriaSeleccionada = $_GET['categoria'];

require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/productes.php';

$connexio = connectaBD();
$productes = getProuctes($connexio, $categoriaSeleccionada);

require_once __DIR__.'/../view/productes.php';
?>



