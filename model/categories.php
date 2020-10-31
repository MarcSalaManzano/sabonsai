<?php
function getCategories($connexio) {
    try {
        $consulta = $connexio->prepare("SELECT Name, ID FROM Category");
        $consulta->execute();
        $llistatCategories = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return($llistatCategories);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}