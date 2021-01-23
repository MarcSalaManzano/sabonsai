<header>
    <h3> Registra una nueva cuenta</h3>
</header>

<form action="index.php?accio=registre" method="post">

    <label for="user"> Nombre de usuario: </label> <input type="text" name="user" id="user"
                                                     required>
    <br/>
    <span> <?php echo $userErr;?> </span>
    <br/>
    <label for="emailReg"> Email: </label> <input type="email" name="emailReg" id="emailReg"
                                                  required>
    <br/>
    <span> <?php echo $emailErr;?> </span>
    <br/>
    <label for="passReg"> Contraseña: </label> <input type="password" name="passReg" id="passReg"
                                                    required
                                                    pattern="[A-Za-z0-9]+" >
    <br/>
    <span> <?php echo $passErr;?> </span>
    <br/>
    <label for="adress"> Dirección: </label> <input type="text" name="adress" id="adress"
                                                 required
                                                 pattern="[A-Za-z0-9\s]+" maxlength="30">
    <br/>
    <span> <?php echo $addErr;?> </span>
    <br/>
    <label for="poblation"> Población: </label> <input type="text" name="poblation" id="poblation"
                                                      required
                                                      pattern="[A-Za-z0-9\s]+" maxlength="30">
    <br/>
    <span> <?php echo $poblationErr;?> </span>
    <br/>
    <label for="CP"> Codigo Postal: </label> <input type="text" name="CP" id="CP"
                                                  required
                                                  pattern="[0-9]{5}">
    <br/>
    <span> <?php echo $cpErr;?> </span>
    <br/>
    <span> <?php echo $alredyErr;?> </span>
    <br/>
    <input class="button-style" type="submit" value="Registrarse" name="submitRegistre">


</form>
