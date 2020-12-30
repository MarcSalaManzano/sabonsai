<div class="profile-container">
    <h1>El meu perfil</h1>
    <img src="media/testImage.png"/>
    <div class="name-profile">
        <h3>Nom:</h3>
        <p> <?php echo $_SESSION['username'] ?> </p>
    </div>
    <div class="mail-profile">
        <h3>Correu:</h3>
        <p> <?php echo $_SESSION['mail'] ?> </p>
    </div>
    <div class="adresa-profile">
        <h3>Correu Postal:</h3>
        <p> <?php echo $_SESSION['CP'] ?> </p>
        <h3>Adreça:</h3>
        <p> <?php echo $_SESSION['add'] ?> </p>
        <h3>Ciutat:</h3>
        <p> <?php echo $_SESSION['city'] ?> </p>
    </div>
</div>