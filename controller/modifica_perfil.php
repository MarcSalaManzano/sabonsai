<?php

if(isset($_POST['submit'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/modificaPerfil.php';
    $connexio = connectaBD();
    actualitzaParametresNormals($connexio);

    if (isset($_FILES['profile_image']) && ($_FILES['profile_image']['error'] != 4)) {
        actualitzaImatge($connexio, $fotosUsuarisAbsolutePath);
    }
    header('location: http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=perfil');

} else {
    include __DIR__ . '/../view/modificaPerfil.php';
}
?>