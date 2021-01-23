<?php
$userErr = $emailErr = $passErr = $addErr = $poblationErr = $cpErr = $alredyErr = "";
$errorInForm = false;
if(isset($_POST['submitRegistre'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/registre.php';
    require_once __DIR__ . '/../model/login.php';

    if(empty($_POST['user'])) {
        $userErr = "Rellene el campo por favor";
        $errorInForm = true;
    }
    if(empty($_POST['emailReg'])) {
        $emailErr = "Rellene el campo por favor";
        $errorInForm = true;
    } else if(!filter_var($_POST['emailReg'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email mal formatado, recuerde user@email.abc";
        $errorInForm = true;
    }
    if(empty($_POST['passReg'])) {
        $passErr = "Rellene el campo por favor";
        $errorInForm = true;
    }
    if(empty($_POST['adress'])) {
        $addErr = "Rellene el campo por favor";
        $errorInForm = true;
    }
    if(empty($_POST['poblation'])) {
        $poblationErr = "Rellene el campo por favor";
        $errorInForm = true;
    }
    if(empty($_POST['CP'])) {
        $cpErr = "Rellene el campo por favor";
        $errorInForm = true;
    } else if(!filter_var($_POST['CP'], FILTER_VALIDATE_INT)) {
        $cpErr = "Codigo postal mal formatado, se requieren 5 valores enteros";
        $errorInForm = true;
    }
    if(!$errorInForm) {
        $connexio = connectaBD();
        $noExisteix = comprovaRegistre($connexio);
        if ($noExisteix) {
            registrar($connexio);
            require_once __DIR__ . '/../view/registreCorrecte.php';
        } else {
            $alredyErr = "El email utilizado ya esta registrado";
            require_once __DIR__ . '/../view/registre.php';
        }
    } else {
        require_once __DIR__ . '/../view/registre.php';
    }
}
else
    require_once __DIR__ . '/../view/registre.php';

?>