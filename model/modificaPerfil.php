<?php
function actualitzaParametresNormals($connexio) {
    $name = $_POST["user"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $poblation = $_POST["poblation"];
    $CP = $_POST["CP"];

    $SQL = "UPDATE User SET Name=?, Address=?, City=?, Postal_Code=? WHERE Email=?";
    $connexio->prepare($SQL)->execute([$name, $address, $poblation, $CP, $email]);

    $_SESSION['username'] = $name;
    $_SESSION['mail'] = $email;
    $_SESSION['CP'] = $CP;
    $_SESSION['add'] = $address;
    $_SESSION['city'] = $poblation;
}

function actualitzaImatge($connexio, $fotosUsuarisAbsolutePath) {
    $email = $_POST["email"];
    $file_name = $fotosUsuarisAbsolutePath.$_SESSION['user_id'];
    move_uploaded_file($_FILES['profile_image']['tmp_name'], $file_name);

    $SQL = "UPDATE User SET Image=? WHERE Email=?";
    $connexio->prepare($SQL)->execute([$_SESSION['user_id'], $email]);
}
?>