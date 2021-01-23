

<div id="cabas-container">

    <?php if(!empty($_SESSION['products'])) { ?>

    <article class="container-compra">
        <button type="button" onclick="window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=buidarCarro')">Buidar cabas</button>
        <br />
        <section class="section-compra">

        <?php foreach ($arrayDetalls as $detall) { ?>
            <div class="info-compra">

                <img src=" <?php echo $bonsaisPublicPath.$detall['Image'] ?> " width="300px">
                <h1> Nom: <?php echo $detall['Name'];?> </h1>
                <p class="total"> Preu: <?php echo $detall['Price'] * $_SESSION['products'][$detall['ID']]?> </p>
                <p class="unitari"> Preu unitari: <?php echo $detall['Price'] ?> </p>
                <p class="quantitat"> Quantitat: <?php echo $_SESSION['products'][$detall['ID']]; ?> </p>

            </div>
            <hr>

        <?php } ?>

        </section>
        <?php if(!isset($_SESSION['user_id'])) { ?>
            <button type="button" onclick="window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=login')" >Compra</button>
        <?php } else { ?>
            <button type="button" onclick="window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=procesaCompra')" >Compra</button>
        <?php } ?>
    </article>


    <?php } else { ?>
    <p>El cabàs està buit, compra algún bonsai i torna aquí.</p>
    <?php } ?>
</div>