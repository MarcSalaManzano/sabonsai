<ul id="nav-container">
    <?php foreach($llistatCategories as $categoria) { ?>
    <li><a href=" <?php echo '?categoria=' . $categoria['ID'] ?> "> <?php echo $categoria['Name'] ?> </a></li>
    <?php } ?>
</ul>