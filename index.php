<?php

@$accio = $_GET['accio'];

switch($accio) {
    case 'login':
        include __DIR__.'/resource_login.php';
        break;
    case 'perfil':
        include __DIR__.'/resource_perfil.php';
        break;
    case 'carro':
        include __DIR__.'/resource_carro.php';
        break;
    default:
        include __DIR__.'/resource_portada.php';
        break;
} ?>