$(document).ready(function() {
  $('.navigation-button').click(function() {
      var id = $(this).attr('id');
      $.ajax({url: "?accio=productes&categoria=" + id, success:function(result) {
          $("#productes").html(result);
      }});
  });
});