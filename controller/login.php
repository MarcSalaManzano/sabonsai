<?php
if(isset($_POST['submit'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/login.php';
    $connexio = connectaBD();

    if(comprovaLogin($connexio))
        logear($connexio);
    else
        require __DIR__ . '/../view/login.php';
}
else
    require __DIR__ . '/../view/login.php.php';

?>