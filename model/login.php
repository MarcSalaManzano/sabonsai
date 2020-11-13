<?php


function comprovaLogin($connexio)
{
    $SQL = "SELECT * FROM User WHERE Email = ':email' AND Password = ':pass'";

    $consulta = $connexio->prepare($SQL);

    $hashPass = password_hash($_POST['passLogin']);

    $consulta->bindPararm(":email", $_POST['emailLogin'], PDO::PARAM_STR);
    $consulta->bindPararm(":pass", $hashPass, PDO::PARAM_STR);
    $consulta->execute();

    $result = $consulta->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) return false;

    return true;
}

function logear($connexio) {

}
?>