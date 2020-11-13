<?php
function getProductes($connexio, $categoria) {
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

function getProducteDetellat($connexio, $producte) {
    try {
        $consulta = $connexio->prepare("SELECT * FROM Bonsai WHERE ID = :producte");
        $consulta->bindParam(':producte', $producte, PDO::PARAM_INT);
        $consulta->execute();
        $producteDetallat = $consulta->fetch(PDO::FETCH_ASSOC);
        return $producteDetallat;
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
}
?>