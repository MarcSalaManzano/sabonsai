<?php

function registraCompra($connexio, $productes) {
    try {
        $sql = 'INSERT INTO Purchase(User_ID, Total_Price, Date) VALUE(:userid, :price, :date)';
        $consulta = $connexio->prepare($sql);
        $consulta->bindParam(":userid", $_SESSION["user_id"], PDO::PARAM_INT);
        $consulta->bindParam(":price", $_SESSION["totalPrice"], PDO::PARAM_STR);
        $date = date('Y-m-d H:i:s', time());
        $consulta->bindParam(":date", $date, PDO::PARAM_STR);

        $consulta->execute();

        $sql = 'SELECT ID FROM Purchase WHERE User_ID = :userid AND Total_Price = :price AND Date = :date';
        $consulta = $connexio->prepare($sql);
        $consulta->bindParam(":userid", $_SESSION["user_id"], PDO::PARAM_INT);
        $consulta->bindParam(":price", $_SESSION["totalPrice"], PDO::PARAM_STR);
        $consulta->bindParam(":date", $date, PDO::PARAM_STR);
        $consulta->execute();
        $id = $consulta->fetch(PDO::FETCH_ASSOC);

        $sql = 'INSERT INTO PurchaseLine(Purchase_ID, Bonsai_ID, Quantity, Total_Price, Unit_Price) VALUE(:purchaseID, :bonsaiID, :quantity, :tPrice, :uPrice)';

        foreach($productes as $producte) {
            $consulta = $connexio->prepare($sql);
            $consulta->bindParam(":purchaseID", $id['ID'], PDO::PARAM_INT);
            $consulta->bindParam(":bonsaiID", $producte['ID'], PDO::PARAM_INT);
            $quantity = $_SESSION['products'][$producte['ID']];
            $consulta->bindParam(":quantity", $quantity, PDO::PARAM_INT);
            $totalPrice = $producte['Price']*$quantity;
            $consulta->bindParam(":tPrice", $totalPrice, PDO::PARAM_INT);
            $consulta->bindParam(":uPrice", $producte['Price'], PDO::PARAM_INT);
            $consulta->execute();
        }


    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

function buidarCarro() {
    $_SESSION['nProductesTotal'] = 0;
    $_SESSION['totalPrice'] = 0;
    $_SESSION['products'] = [];

}

?>