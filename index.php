<?php
$fotosUsuarisAbsolutePath = '/home/TDIW/tdiw-e8/public_html/fotos-usuaris/';
$filesPublicPath = '/fotos-usuaris/';
$bonsaisPublicPath = '/media/';
@$accio = $_GET['accio'];

session_start();
if(!isset($_SESSION['nProductesTotal']))
    $_SESSION['nProductesTotal'] = 0;
if(!isset($_SESSION['totalPrice']))
    $_SESSION['totalPrice'] = 0;
if(!isset($_SESSION['products']))
    $_SESSION['products'] = [];

switch($accio) {
    case 'logear':
        include __DIR__.'/resource_logear.php';
        break;
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
    case 'producteDetallat':
        include __DIR__ . '/resource_producteDetallat.php';
        break;
    case 'productes':
        include __DIR__ . '/resource_productes.php';
        break;
    case 'afegirProducte':
        include __DIR__.'/resource_afegirProducte.php';
        break;
    case 'carro':
        include __DIR__.'/resource_carro.php';
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
    case 'procesaCompra':
        include __DIR__ . '/resource_procesaCompra.php';
        break;
    case 'compres':
        include __DIR__ . '/resource_llistatCompres.php';
        break;
    case 'compraBien':
        include __DIR__ . '/resource_compraBien.php';
        break;
    default:
        include __DIR__.'/resource_portada.php';
        break;
} ?>