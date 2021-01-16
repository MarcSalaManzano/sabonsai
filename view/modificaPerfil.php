<form action="index.php?accio=modificantPerfil" method="post" enctype="multipart/form-data">
    <label for="user"> Nom d'usuari: </label>
    <input type="text" name="user" id="user" required value="<?php echo $_SESSION['username'] ?>"><br/>
    <label for="email"> Email: </label>
    <input type="email" name="email" id="email" disabled value="<?php echo $_SESSION['mail'] ?>"><br/>
    <label for="adress"> Adreça: </label>
    <input type="text" name="adress" id="adress" required pattern="[A-Za-z0-9\s]+" maxlength="30" value="<?php echo $_SESSION['add'] ?>"><br/>
    <label for="poblation"> Població: </label>
    <input type="text" name="poblation" id="poblation" required pattern="[A-Za-z0-9\s]+" maxlength="30" value="<?php echo $_SESSION['city'] ?>"> <br/>
    <label for="CP"> Codi Postal: </label>
    <input type="text" name="CP" id="CP" required pattern="[0-9]{5}" value="<?php echo $_SESSION['CP'] ?>"><br/>
    <input type="file" name="profile_image" />
    <input type="submit" value="Guarda" name="submit">
</form>
