<div>
    <h2>Contacta'ns</h2>
    <p>lorem@ipsum.com</p>
    <p>+34 111.111.111</p>
</div>
<div>
    <a href="../index.php">Home</a>
    <?php if(!isset($_SESSION['user_id'])) { ?>
        <a href="?accio=login">Log In</a>
    <?php } else { ?>
        <a href="?accio=perfil">El meu compte</a>
        <a href="?accio=compres">Les meves compres</a>
        <a href="?accio=logout">Tanca sessió</a>
    <?php } ?>
</div>
