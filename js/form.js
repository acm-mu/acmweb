$(document).ready(() => {
  $("input").keyup(function() {
    var empty = false;
    $("input").each(function() {
      if ($(this).attr("required") && $(this).val() == "") {
        empty = true;
      }
    });

    if (empty) {
      $(":submit").attr("disabled", "disabled");
    } else {
      $(":submit").removeAttr("disabled");
    }
  });
});
