<header>
    <h3> Ya tienes cuenta? Conectate</h3>
</header>

<form action="index.php?accio=logear" method="post">
    <label for="emailLogin"> Correo electrónico: </label> <input type="text" name="emailLogin" id="emailLogin" required> <br />
    <label for="passLogin"> Contraseña: </label>  <input type="password" name="passLogin" id="passLogin" required> <br />
    <span> <?php echo $loginErr;?> </span>
    <br/>
    <input class="button-style" type="submit" value="Login" name="submitLogin"/>
</form>