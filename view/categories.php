<ul id="nav-container">
    <?php foreach($llistatCategories as $categoria) { ?>
        <li> <button class="navigation-button" id='<?php echo $categoria["ID"] ?>'> <?php echo htmlentities($categoria['Name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> </button></li>
    <?php } ?>
</ul>
