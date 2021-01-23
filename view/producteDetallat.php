<div class="detall-producte">
    <img src=" <?php echo $bonsaisPublicPath.$detalls['Image'] ?> " alt="<?php echo $detalls['Image'] ?>" class="product-image" style="grid-area:image">
    <div class="product-detail" style="grid-area:descripcio">
        <h2 class="product-name" id="<?php echo "producte".$detalls['ID'] ?>"><?php echo $detalls['Name'] ?></h2>
        <p><?php echo $detalls['Description'] ?></p>
        <h3>Detalles:</h3>
        <ul>
            <li>Edad: <?php echo $detalls['Age'] ?></li>
            <li>Altura: <?php echo $detalls['Tall'] ?></li>
            <li>Altura del recipiente: <?php echo $detalls['PotTall'] ?></li>
        </ul>
        <p>Precio: <?php echo $detalls['Price'] ?>€</p>
        <button class="product-buy button-style" id="<?php echo "comprarProducte".$detalls['ID']?>">Comprar</button>
    </div>

</div>