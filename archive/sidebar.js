var template = {};

$(document).ready(() => {
  $.each(
    [
      "description",
      "python-skeleton",
      "java-skeleton",
      "python-solution",
      "java-solution"
    ],
    (k, v) => {
      var temp = `#${v}-template`;
      if ($(temp).length) {
        template[v] = $(temp).html();
        $(`#${v}`).show();
      }
    }
  );

  $("button#description").click();

  var page = $("#page").attr("page");
  $("#" + page).addClass("active");
});

$(document).on("click", "button.swatch", function() {
  $("button.active").removeClass("active");
  $(this).addClass("active");
  var html = template[$(this).attr("id")];
  $("#content").html(html);
});
