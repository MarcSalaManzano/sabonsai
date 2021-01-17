<?php

@$accio = $_GET['accio'];

session_start();

switch($accio) {
    case 'login':
        if(!isset($_SESSION['user_id'])) {
            include __DIR__ . '/resource_login.php';
        } else {
            header('location: http://tdiw-e8.deic-docencia.uab.cat/index.php');
        }
        break;
    case 'perfil':
        include __DIR__.'/resource_perfil.php';
        break;
    case 'carro':
        include __DIR__.'/resource_carro.php';
        break;
    case 'logear':
        include __DIR__.'/controller/login.php'; //TODO: A lo mejor se tiene que cambiar a recurso
        break;
    case 'logout':
        include __DIR__.'/resource_logout.php';
        break;
    case 'registre':
        include __DIR__.'/resource_registre.php';
        break;
    case 'modificaPerfil':
        include __DIR__.'/resource_modificaPerfil.php';
        break;
    case 'modificantPerfil':
        include __DIR__.'/resource_modificantPerfil.php';
        break;
    case 'buidarCarro':
        include __DIR__ . '/resource_buidarCarro.php';
        break;
    default:
        include __DIR__.'/resource_portada.php';
        break;
} ?>