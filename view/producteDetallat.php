<div class="detall-producte">
    <img src="media/testImage.png" alt="<?php echo $detalls['Image'] ?>" class="product-image">
    <h2 class="product-name" id="<?php echo "producte".$detalls['ID'] ?>"><?php echo $detalls['Name'] ?></h2>
    <div class="product-price">
        <p><?php echo $detalls['Description'] ?></p>
        <h3>Detalls:</h3>
        <ul>
            <li>Edat: <?php echo $detalls['Age'] ?></li>
            <li>Altura: <?php echo $detalls['Tall'] ?></li>
            <li>Altura del recipient: <?php echo $detalls['PotTall'] ?></li>
        </ul>
    </div>
    <p class="product-price"><?php echo $detalls['Price'] ?>€</p>
    <button class="product-buy">Buy now</button>
</div>