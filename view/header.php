<a href="index.php" class="logo"><img class="logo" src="/../media/logo.png" alt="Bonsai Tree Vectors by Vecteezy"></a>
<ul>
    <?php if(!isset($_SESSION['user_id'])) { ?>
    <li><a href="?accio=login">Log in</a></li>
    <?php } else { ?>
    <li class="dropdown-trigger"><a><?php echo $_SESSION['username'] ?></a>
        <ul class="dropdown">
            <li><a href="?accio=perfil">El meu compte</a></li>
            <li><a href="?accio=compres">Les meves compres</a></li>
            <li><a href="?accio=logout">Tanca sessió</li></a>
        </ul>
    </li>
    <?php } ?>
    <li><a href="?accio=carro" class="icon"><img src="media/cart-59-64.png"></a></li>
    <?php if(isset($_SESSION['user_id'])) { ?>
        <li>  <p> Número de productes: <?php echo $_SESSION['nProductesTotal']; ?> <br /> Import Total: <?php echo $_SESSION['totalPrice']; ?> </p> </li>
    <?php } ?>
</ul>
<script>
$(document).ready(function(){
    $(".dropdown-trigger").hover(function(){
        $(".dropdown", this).slideDown(100);
    }, function() {
        $(".dropdown", this).stop().slideUp(100);
    });
});
</script>