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
    $SQL = "SELECT * FROM User WHERE Email = :email";

    $consulta = $connexio->prepare($SQL);

    $consulta->bindParam(':email', $_POST['emailLogin'], PDO::PARAM_STR);
    $consulta->execute();

    $result = $consulta->fetch(PDO::FETCH_ASSOC);

    $_SESSION['user_id'] = $result['ID'];
    $_SESSION['username'] = $result['Name'];
    $_SESSION['mail'] = $result['Email'];
    $_SESSION['CP'] = $result['Posta_Code'];
    $_SESSION['add'] = $result['Address'];
    $_SESSION['city'] = $result['City'];
    if(!isset($_SESSION['products']))
        $_SESSION['products'] = [];
    if(!isset($_SESSION['prices']))
        $_SESSION['prices'] = [];
    echo '<script>';
    echo 'console.log('. json_encode( $_SESSION['user_id'] ) .')';
    echo '</script>';
}
?>