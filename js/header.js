$(document).ready(() => {
  if ($("h1.title").length) {
    var page_ = $("h1.title").attr("page");
    $(`#navbar #${page_} li`).addClass("active");
  }
});
