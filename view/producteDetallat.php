<div class="detall-producte">
    <img src=" <?php echo $bonsaisPublicPath.$detalls['Image'] ?> " alt="<?php echo $detalls['Image'] ?>" class="product-image" style="grid-area:image">
    <div class="product-detail" style="grid-area:descripcio">
        <h2 class="product-name" id="<?php echo "producte".$detalls['ID'] ?>"><?php echo $detalls['Name'] ?></h2>
        <p><?php echo $detalls['Description'] ?></p>
        <h3>Detalls:</h3>
        <ul>
            <li>Edat: <?php echo $detalls['Age'] ?></li>kra
            <li>Altura: <?php echo $detalls['Tall'] ?></li>
            <li>Altura del recipient: <?php echo $detalls['PotTall'] ?></li>
        </ul>
        <p>Preu: <?php echo $detalls['Price'] ?>€</p>
        <button class="product-buy button-style">Buy now</button>
    </div>

</div>