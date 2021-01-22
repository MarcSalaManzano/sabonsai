<?php foreach ($compres as $compra) { ?>
<article class="container-compra">
    <header class="header-compra">
        <p>Compra realitzada al: <?php echo $compra['Date'] ?></p>
        <p>Preu total: <?php echo $compra['Total_Price'] ?></p>
        <img src="/../media/dropdown.png">
    </header>
    <section class="section-compra">
        <?php foreach ($compra['linies'] as $linia) { ?>
            <div class="info-compra">
                <img src=" <?php echo $bonsaisPublicPath.$linia['Image'] ?> ">
                <h1> <?php echo $linia['Name'] ?> </h1>
                <p class="quantitat"> Quantitat total: <?php echo $linia['Quantity'] ?> </p>
                <p class="unitari"> Preu unitari: <?php echo $linia['Unit_Price'] ?> </p>
                <p class="total"> Preu total: <?php echo $linia['Total_Price'] ?> </p>
            </div>
            <hr/>
        <?php } ?>
    </section>
</article>
<?php } ?>