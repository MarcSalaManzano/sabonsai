$(document).ready(function() {
  $('.navigation-button').click(function() {
      var id = $(this).attr('id');
      $.ajax({url: "controller/llista_productes.php?categoria=" + id, success:function(result) {
          $("#productes").html(result);
      }});
  });
});