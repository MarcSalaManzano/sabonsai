<?php foreach($productes as $producte) { ?>
<div class="product-wrapper">
    <img src="media/testImage.png" alt="<?php echo $producte['Image'] ?>" class="product-image">
    <h2 class="product-name" id="<?php echo "producte".$producte['ID'] ?>"><?php echo $producte['Name'] ?></h2>
    <p class="product-price"><?php echo $producte['Price'] ?>€</p>
    <button class="product-buy">Buy now</button>
</div>
<?php } ?>
<script>
    $(document).ready(function() {
        $('.product-name').click(function() {
            var id = $(this).attr('id');
            var realId = id.replace('producte', '');
            $.ajax({url: "controller/llista_productes.php?producte=" + realId, success:function(result) {
                    $("#productes").html(result);
                }});
        });
    });
</script>
