<?php
$accio = $_GET['accio'];

switch($accio) {
    case 'portada':
        include __DIR__.'/resource_portada';
        break;
    case 'login':
        include __DIR__.'/resource_login';
        break;
    case 'perfil':
        include __DIR__.'/resource_perfil';
        break;
    case 'carro':
        include __DIR__.'/resource_carro';
        break;
    default:
        include __DIR__.'/resource_portada';
        break;
} ?>