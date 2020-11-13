<ul id="nav-container">
    <?php foreach($llistatCategories as $categoria) { ?>
        <li> <button class="navigation-button" id='<?php echo $categoria["ID"] ?>'> <?php echo $categoria['Name'] ?> </button></li>
    <?php } ?>
</ul>