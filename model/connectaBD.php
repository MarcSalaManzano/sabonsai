<?php
function connectaBD(){
    $servidor = "https://deic-docencia.uab.cat/phpmyadmin/";
    $usuari = "tdiw-e8";
    $clau = "yh3FUWZx";
    try{
        $connexio = new PDO("mysql:host=$servidor;dbname=tdiwe8;charset=UTF8",
            $usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($connexio);
}
?>