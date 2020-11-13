<?php

if(isset($_POST['submit'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/registre.php';
    $connexio = connectaBD();

    if(comprovaRegistre($connexio)) {
        registrar($connexio);
        require_once __DIR__ . '/../view/registreExit.html';
    }
    else
        require_once __DIR__ . '/../view/registre.php';
}
else
    require_once __DIR__ . '/../view/registre.php';

?>