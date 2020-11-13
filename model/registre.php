<?php

function comprovaRegistre($connexio) {

    $SQL = "SELECT * FROM User WHERE Email = ':email' OR User = ':user'";
    $consulta = $connexio->prepare($SQL);
    $consulta->bindPararm(":email", $_POST['emailReg'], PDO::PARAM_STR);
    $consulta->bindPararm(":user", $_POST['user'], PDO::PARAM_STR);
    $consulta->execute();

    $result = $consulta->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)) return true;

    return false;
}


function registrar($connexio) {
    $SQL = "INSERT INTO User(Name, Email, Password, Postal_code, Address, City) VALUES (:user, :email, :pass, :cp, :address, :city)";

    $consulta = $connexio->prepare($SQL);

    $hashPass = password_hash($_POST['passReg']);

    $consulta->bindParam(":user", $_POST["user"], PDO::PARAM_STR);
    $consulta->bindParam(":email", $_POST["emailReg"], PDO::PARAM_STR);
    $consulta->bindParam(":pass", $hashPass, PDO::PARAM_STR);
    $consulta->bindParam(":cp", $_POST["adress"], PDO::PARAM_INT);
    $consulta->bindParam(":address", $_POST["CP"], PDO::PARAM_STR);
    $consulta->bindParam(":city", $_POST["poblation"], PDO::PARAM_STR);

    $consulta->execute();
}

?>