<?php
function connectaBD(){
    $servidor = "localhost";
    $usuari = "tdiw-e8";
    $clau = "yh3FUWZx";
    try{
        $connexio = new PDO("mysql:host=$servidor;dbname=tdiwe8;charset=UTF8",
            $usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return($connexio);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>