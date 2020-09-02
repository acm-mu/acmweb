var template = {};
const template_types = ['description', 'python-skeleton', 'java-skeleton', 'python-solution', 'java-solution']

$(document).ready(() => {
  for (const type of template_types) {
    var temp = `#${type}-template`;
    if ($(temp).length) {
      template[type] = $(temp).html();
      $(`#${type}`).show();
    }
  }

  $("button#description").click();

  var page = $("#page").attr("page");
  $("#" + page).addClass("active");
});

$(document).on("click", "button.swatch", function () {
  $("button.active").removeClass("active");
  $(this).addClass("active");
  var html = template[$(this).attr("id")];
  $("#content").html(html);
});