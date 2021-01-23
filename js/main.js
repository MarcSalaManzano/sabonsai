$(document).ready(function(){
    $(".dropdown-trigger").hover(function(){
        $(".dropdown", this).slideDown(100);
    }, function() {
        $(".dropdown", this).stop().slideUp(100);
    });
});