$(document).ready(() => {
  var page = $("h1.title").attr("page");
  $("#navbar li#" + page).addClass("active");
});