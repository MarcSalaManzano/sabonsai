


<ul id="cabas-container">
    <?php foreach ($arrayDetalls as $detall) { ?>
    <li> <img src="media/testImage.png" width="100px"> <br />
        Nom: <?php echo $detall['Name'];?> <br/>
        Preu: <?php echo $detall['Price']?> <br />
        Quantitat: <?php echo $_SESSION['products'][$detall['ID']]; ?>
    </li>
    <?php } ?>
</ul>