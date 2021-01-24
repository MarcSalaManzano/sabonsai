<a href="index.php" class="logo"><img class="logo" src="/../media/logo.png" alt="Bonsai Tree Vectors by Vecteezy"></a>
<ul>
    <?php if(!isset($_SESSION['user_id'])) { ?>
    <li><a href="?accio=login">Log in/Registro</a></li>
    <?php } else { ?>
    <li class="dropdown-trigger"><a><?php echo $_SESSION['username'] ?></a>
        <ul class="dropdown">
            <li><a href="?accio=perfil">Mi cuenta</a></li>
            <li><a href="?accio=compres">Mis compras</a></li>
            <li><a href="?accio=logout">Cerrar sesión</a></li>
        </ul>
    </li>
    <?php } ?>
    <li><a href="?accio=carro" class="icon"> <img src="media/cart-59-64.png" heigh> Número de productos: <?php echo $_SESSION['nProductesTotal']; ?>
                                                                                    Importe Total: <?php echo $_SESSION['totalPrice']; ?> </a> </li>
</ul>
