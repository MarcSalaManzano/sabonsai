<?php

require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/llistatCompres.php';
$connexio = connectaBD();
$compres = carregaCompres($connexio);
for ($i = 0; $i < count($compres); ++$i) {
    $linies = carregaLinias($connexio, $compres[$i]['ID']);
    $compres[$i]['linies'] = $linies;
}
if(empty($compres)) {
    include __DIR__ . '/../view/llistatCompresBuida.php';
} else {
    include __DIR__ . '/../view/llistatCompres.php';
}
?>