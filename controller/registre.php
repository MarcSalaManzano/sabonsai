<?php

if(isset($_POST['submit'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/registre.php';
    $connexio = connectaBD();

    if(comprovaRegistre($connexio))
        registrar($connexio);
    else
        require_once __DIR__ . '/../view/registre.php';
}
else
    require_once __DIR__ . '/../view/registre.php';

?>