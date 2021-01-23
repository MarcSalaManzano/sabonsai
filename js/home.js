$(document).ready(function() {
    $('.navigation-button').click(function() {
        var id = $(this).attr('id');
        $.ajax({url: "?accio=productes&categoria=" + id, success:function(result) {
                $("#productes").html(result);
            }});
    });
});

$(document).ready(function() {
    $('.product-name').click(function() {
        var id = $(this).attr('id');
        var realId = id.replace('producte', '');
        $.ajax({url: "?accio=producteDetallat&producte=" + realId, success:function(result) {
                $("#productes").html(result);
            }});
    });
});

$(document).ready(function() {
    $('.product-buy').click(function() {
        var id = $(this).attr('id');
        $.ajax({url: "?accio=afegirProducte&producte=" + id, success:function(result) {
                $("#header-container").html(result);
            }});
    });
});