<?php foreach ($compres as $compra) { ?>
<article class="container-compra">
    <header class="header-compra">
        <p>Compra realitzada el: <?php echo $compra['Date'] ?></p>
        <p>Precio total: <?php echo $compra['Total_Price'] ?></p>
        <p>Cantidad total: <?php echo $compra['Total_Quantity'] ?></p>
    </header>
    <section class="section-compra">
        <?php foreach ($compra['linies'] as $linia) { ?>
            <div class="info-compra">
                <img src=" <?php echo $bonsaisPublicPath.$linia['Image'] ?> ">
                <h1> <?php echo $linia['Name'] ?> </h1>
                <p class="quantitat"> Cantidad total: <?php echo $linia['Quantity'] ?> </p>
                <p class="unitari"> Precio unitario: <?php echo $linia['Unit_Price'] ?> </p>
                <p class="total"> Precio total: <?php echo $linia['Total_Price'] ?> </p>
            </div>
            <hr/>
        <?php } ?>
    </section>
</article>
<?php } ?>