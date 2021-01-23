<?php
$loginErr = "";
if(isset($_POST['submitLogin'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/login.php';

    $connexio = connectaBD();
    if(comprovaLogin($connexio)) {
        logear($connexio);
        header('location: http://tdiw-e8.deic-docencia.uab.cat/index.php');
    }
    else {
        $loginErr = "Correo o contraseña incorrecta.";
        require __DIR__ . '/../view/login.php';
    }
}
else
    require __DIR__ . '/../view/login.php';

?>