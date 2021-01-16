<ul id="cabas-container">
    <?php foreach ($_SESSION['products'] as $idItem => $quantityItem ) { ?>
    <li> <?php echo $idItem;?> <?php echo $quantityItem ?> </li>
    <?php } ?>
</ul>