<?php
function comprovaRegistre($connexio) {
    try {

        $consulta = $connexio->prepare("SELECT count(*) as num FROM User WHERE Email = :email");
        $consulta->bindParam(':email', $_POST['emailReg'], PDO::PARAM_STR);
        $consulta->execute();

        $result = $consulta->fetch(PDO::FETCH_ASSOC);
        if ($result['num'] == 0) {
            return TRUE;
        }
        return FALSE;
    } catch (PDOException $e) {
        echo "Error".$e->getMessage();
    }
}


function registrar($connexio) {
    $SQL = 'INSERT INTO User(Name, Email, Password, Postal_code, Address, City, Image) VALUES (:user, :email, :pass, :cp, :address, :city, "default.png")';

    $consulta = $connexio->prepare($SQL);

    $hashPass = password_hash($_POST['passReg'], PASSWORD_DEFAULT);

    $consulta->bindParam(":user", $_POST["user"], PDO::PARAM_STR);
    $consulta->bindParam(":email", $_POST["emailReg"], PDO::PARAM_STR);
    $consulta->bindParam(":pass", $hashPass, PDO::PARAM_STR);
    $consulta->bindParam(":cp", $_POST["CP"], PDO::PARAM_INT);
    $consulta->bindParam(":address", $_POST["adress"], PDO::PARAM_STR);
    $consulta->bindParam(":city", $_POST["poblation"], PDO::PARAM_STR);

    $consulta->execute();
}



?>