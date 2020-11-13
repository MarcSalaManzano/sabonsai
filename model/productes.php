<?php
function getProuctes($connexio, $categoria) {
    try {
        $consulta = $connexio->prepare("SELECT ID, Name, Price, Image FROM Bonsai WHERE category_ID = :category");
        $consulta->bindParam(':category', $categoria, PDO::PARAM_INT);
        $consulta->execute();
        $llistatProductes = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $llistatProductes;
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
}
?>