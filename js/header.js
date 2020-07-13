function setTitle(page) {
  var title = "ACM@MU";
  if (page != "") title += ` - ${page.charAt(0).toUpperCase() + page.slice(1)}`;
  document.title = title;
}

$(document).ready(() => {
  if ($("h1.title").length) {
    var title = $("h1.title").html();
    var _page = $("h1.title").attr("page");
    $(`#mainnavbar #${_page} li`).addClass("active");

    if (title == "ACM@MU") title = "";

    setTitle(`${title}`);
  }
});
