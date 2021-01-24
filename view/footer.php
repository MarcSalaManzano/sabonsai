<div>
    <h2>Contactanos</h2>
    <p>sabonsai@email.com</p>
    <p>+34 111.111.111</p>
</div>
<div>
    <a href="../index.php">Inicio</a>
    <?php if(!isset($_SESSION['user_id'])) { ?>
        <a href="?accio=login">Log In/Registro</a>
    <?php } else { ?>
        <a href="?accio=perfil">Mi cuenta</a>
        <a href="?accio=compres">Mis compras</a>
        <a href="?accio=logout">Cerrar sesión</a>
    <?php } ?>
</div>
