<div class="profile-container">
    <h1>Mi perfil</h1>
    <img src=" <?php echo $filesPublicPath.$_SESSION['image'] ?> "/>
    <div class="name-profile">
        <h3>Nombre:</h3>
        <p> <?php echo $_SESSION['username'] ?> </p>
    </div>
    <div class="mail-profile">
        <h3>Correo:</h3>
        <p> <?php echo $_SESSION['mail'] ?> </p>
    </div>
    <div class="adresa-profile">
        <h3>Código Postal:</h3>
        <p> <?php echo $_SESSION['CP'] ?> </p>
        <h3>Dirección:</h3>
        <p> <?php echo $_SESSION['add'] ?> </p>
        <h3>Ciudad:</h3>
        <p> <?php echo $_SESSION['city'] ?> </p>
    </div>
    <div class="button-profile">
        <a href="index.php?accio=modificaPerfil">Modifica perfil</a>
    </div>
</div>