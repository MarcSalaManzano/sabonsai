<?php
function carregaCompres($connexio) {
    $user_id = $_SESSION['user_id'];

    $consulta = $connexio->prepare("SELECT * FROM Purchase WHERE User_ID = :user_id");
    $consulta->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $consulta->execute();

    $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function carregaLinias($connexio, $compra_ID) {

    $consulta = $connexio->prepare("SELECT Bonsai.Image as Image, PurchaseLine.Quantity as Quantity, PurchaseLine.Total_Price as Total_Price, PurchaseLine.Unit_Price as Unit_Price, Bonsai.Name AS Name
            FROM PurchaseLine JOIN Bonsai ON PurchaseLine.Bonsai_ID = Bonsai.ID WHERE Purchase_ID = :purchase_id");
    $consulta->bindParam(':purchase_id', $compra_ID, PDO::PARAM_INT);
    $consulta->execute();

    $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>