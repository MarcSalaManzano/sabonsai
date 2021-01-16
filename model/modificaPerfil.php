<?php
function actualitzaParametresNormals($connexio) {
    $name = $_POST["user"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $poblation = $_POST["poblation"];
    $CP = $_POST["CP"];

    $SQL = "UPDATE User SET Name=?, Address=?, City=?, Postal_Code=? WHERE Email=?";
    $connexio->prepare($SQL)->execute([$name, $address, $poblation, $CP, $email]);
}
?>