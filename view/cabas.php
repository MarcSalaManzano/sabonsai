

<div id="cabas-container">
    <button type="button" onclick="window.location.replace('http://tdiw-e8.deic-docencia.uab.cat/index.php?accio=buidarCarro')">Buidar cabas</button>
    <ul>
        <?php foreach ($arrayDetalls as $detall) { ?>
            <li> <img src="media/testImage.png" width="100px"> <br />
                Nom: <?php echo $detall['Name'];?> <br/>
                Preu: <?php echo $detall['Price']?> <br />
                Quantitat: <?php echo $_SESSION['products'][$detall['ID']]; ?>
            </li>
        <?php } ?>
    </ul>

</div>