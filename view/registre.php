<header>
    <h3> Registra una nova compte</h3>
</header>

<form action="/controller/registre.php" method="post">

    <label for="user"> Nom d'usuari: </label> <input type="text" name="user" id="user"
                                                     required>
    <br/>
    <label for="emailReg"> Email: </label> <input type="email" name="emailReg" id="emailReg"
                                                  required>
    <br/>
    <label for="passReg"> Password: </label> <input type="password" name="passReg" id="passReg"
                                                    required
                                                    pattern="[A-Za-z0-9]+" >
    <br/>
    <label for="adress"> Adreça: </label> <input type="text" name="adress" id="adress"
                                                 required
                                                 pattern="[A-Za-z0-9\s]+" maxlength="30">
    <br/>
    <label for="poblation"> Població: </label> <input type="text" name="poblation" id="poblation"
                                                      required
                                                      pattern="[A-Za-z0-9\s]+" maxlength="30">
    <br/>
    <label for="CP"> Codi Postal: </label> <input type="text" name="CP" id="CP"
                                                  required
                                                  pattern="[0-9]{5}">
    <br/>

    <input type="submit" value="Registrar-se" name="submit">


</form>
