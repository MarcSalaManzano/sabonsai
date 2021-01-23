<form action="index.php?accio=modificantPerfil" method="post" enctype="multipart/form-data">
    <label for="user"> Nombre de usuario: </label>
    <input type="text" name="user" id="user" required value="<?php echo $_SESSION['username'] ?>"><br/>
    <label for="email"> Email: </label>
    <input type="email" name="email" id="email" readonly="readonly" value="<?php echo $_SESSION['mail'] ?>"><br/>
    <label for="address"> Dirección: </label>
    <input type="text" name="address" id="address" required pattern="[A-Za-z0-9\s]+" maxlength="30" value="<?php echo $_SESSION['add'] ?>"><br/>
    <label for="poblation"> Población: </label>
    <input type="text" name="poblation" id="poblation" required pattern="[A-Za-z0-9\s]+" maxlength="30" value="<?php echo $_SESSION['city'] ?>"> <br/>
    <label for="CP"> Codigo Postal: </label>
    <input type="text" name="CP" id="CP" required pattern="[0-9]{5}" value="<?php echo $_SESSION['CP'] ?>"><br/>
    <input type="file" name="profile_image" />
    <input type="submit" value="Guardar" name="submit">
</form>
