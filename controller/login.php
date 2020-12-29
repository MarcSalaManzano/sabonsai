<?php
session_start();
if(isset($_POST['submit'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/login.php';
    $connexio = connectaBD();

    if(comprovaLogin($connexio)) {
        echo "<script type='text/javascript'> alert('Login acceptat');</script>";
        logear($connexio);
        header('location: http://tdiw-e8.deic-docencia.uab.cat/index.php');
    }
    else {
        echo "<script type='text/javascript'> alert('Login no vàlid'); window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=login'); </script>";
    }
}
else
    require __DIR__ . '/../view/login.php';

?>