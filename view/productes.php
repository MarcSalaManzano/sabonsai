<div class="products-container">
    <?php foreach($productes as $producte) { ?>
    <div class="product-wrapper">
        <img src=" <?php echo $bonsaisPublicPath.$producte['Image'] ?> " alt="<?php echo $producte['Image'] ?>" class="product-image">
        <h2 class="product-name" id="<?php echo "producte".$producte['ID'] ?>"><?php echo $producte['Name'] ?></h2>
        <p class="product-price">Precio: <?php echo $producte['Price'] ?>€</p>
        <button class="product-buy button-style" id="<?php echo "comprarProducte".$producte['ID']?>"  >Comprar</button>
    </div>
    <?php } ?>
</div>

