$(document).ready(() => {
  if ($("h1.title").length) {
    var page = $("h1.title").attr("page");
    $(`#navbar #${page} li`).addClass("active");
  }
});
