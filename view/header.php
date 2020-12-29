<a href="index.php" class="logo"><img class="logo" src="/../media/logo.png" alt="Bonsai Tree Vectors by Vecteezy"></a>
<ul>
    <?php if(!isset($_SESSION['user_id'])) { ?>
    <li><a href="?accio=login">Log in</a></li>
    <?php } else { ?>

    <?php } ?>
    <li><a href="?accio=carro" class="icon"><img src="media/cart-59-64.png"></a></li>
    <?php if(isset($_SESSION['user_id'])) { ?>
    <li> #Productes: <?php echo count($_SESSION['products']); ?> Import Total: <?php array_sum($_SESSION['prices']); ?> </li>
    <?php } ?>
</ul>