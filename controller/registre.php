<?php

if(isset($_POST['submit'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/registre.php';

    if(!filter_var($_POST['emailReg'], FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'> alert('Registre no vàlid, correu mal formatat'); window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=login'); </script>";
    }

    $connexio = connectaBD();
    $noExisteix = comprovaRegistre($connexio);
    if($noExisteix) {
        registrar($connexio);
        echo "<script type='text/javascript'> alert('Registre acceptat'); window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php'); </script>";

    } else {
        echo "<script type='text/javascript'> alert('Registre no vàlid'); window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=login'); </script>";
    }
}
else
    require_once __DIR__ . '/../view/registre.php';

?>