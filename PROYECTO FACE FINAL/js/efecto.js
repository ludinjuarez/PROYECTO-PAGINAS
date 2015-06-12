$(document).ready(function () {
  $(".foto").fadeTo(1);
  $(".foto").hover(function () {
      $(this).fadeTo("fast", 0.75);
    },
    function () {
      $(this).fadeTo("normal", 1);
    });
});