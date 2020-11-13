<?php foreach($productes as $producte) { ?>
<div class="product-wrapper">
    <img src="media/testImage.png" alt="<?php echo $producte['Image'] ?>" class="product-image">
    <h2 class="product-name"><?php echo $producte['Name'] ?></h2>
    <p class="product-price"><?php echo $producte['Price'] ?>€</p>
    <button class="product-buy">Buy now</button>
</div>
<?php } ?>