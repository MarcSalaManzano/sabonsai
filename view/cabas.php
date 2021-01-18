

<div id="cabas-container">
    <?php if(!empty($_SESSION['products'])) { ?>
    <button type="button" onclick="window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=buidarCarro')" style="grid-area: buidaButton">Buidar cabas</button>
    <ul>
        <?php foreach ($arrayDetalls as $detall) { ?>
            <li> <img src="media/testImage.png" width="300px" style="grid-area: img"> <br />
                <div style="grid-area: text">
                Nom: <?php echo $detall['Name'];?>  <br/>
                Preu: <?php echo $detall['Price']?>  <br />
                Quantitat: <?php echo $_SESSION['products'][$detall['ID']]; ?>
                </div>
            </li>
        <?php } ?>
    </ul>
    <?php if(!isset($_SESSION['user_id'])) { ?>
        <button type="button" onclick="window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=login')" style="grid-area: compraButton">Compra</button>
    <?php } else { ?>
        <button type="button" onclick="window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=procesaCompra')" style="grid-area: compraButton">Compra</button>
    <?php } ?>
    <?php } else { ?>
    <p>El cabàs està buit, compra algún bonsai i torna aquí.</p>
    <?php } ?>
</div>