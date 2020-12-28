<?php


function comprovaLogin($connexio)
{
    $SQL = "SELECT * FROM User WHERE Email = :email";

    $consulta = $connexio->prepare($SQL);

    $consulta->bindParam(':email', $_POST['emailLogin'], PDO::PARAM_STR);
    $consulta->execute();

    $result = $consulta->fetch(PDO::FETCH_ASSOC);

    if (empty($result)) return false;

    else if(password_verify($_POST['passLogin'], $result['Password']))
        return true;

}

function logear($connexio) {
    echo "<script type='text/javascript'> alert('Has logiado');</script>";
}
?>