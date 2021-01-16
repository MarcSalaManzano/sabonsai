<?php
if(isset($_POST['submit'])) {
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/login.php';
    $connexio = connectaBD();
    actualitzaParametresNormals($connexio);
    header('location: http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=perfil');

} else {
    include __DIR__ . '/../view/modificaPerfil.php';
}
?>