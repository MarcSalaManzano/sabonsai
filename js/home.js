$(document).ready(function() {
    $('.navigation-button').click(function() {
        var id = $(this).attr('id');
        $.ajax({url: "?accio=productes&categoria=" + id, success:function(result) {
                $("#productes").html(result);
                detallarProductesListener();
                afegirProducteACabasListener();
            }});
    });
});

function afegirProducteACabasListener() {
    $('.product-buy').click(function() {
        var id = $(this).attr('id');
        var realId = id.replace('comprarProducte', '');
        $.ajax({url: "?accio=afegirProducte&producte=" + realId, success:function(result) {
                $("#header-container").html(result);
            }});
    });
}


function detallarProductesListener() {
    $('.product-name').click(function() {
        var id = $(this).attr('id');
        var realId = id.replace('producte', '');
        $.ajax({url: "?accio=producteDetallat&producte=" + realId, success:function(result) {
                $("#productes").html(result);
                afegirProducteACabasListener();
            }});
    });
}
