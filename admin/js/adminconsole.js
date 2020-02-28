function getUrlParameter(lookup_key) {
  const query = window.location.search.substring(1); // Get the query portion of the URL, and cut off the '?'
  const variables = query.split("&"); // Split them up seperated by '&'

  for (var i = 0; i < variables.length; i++) {
    var variable = variables[i].split("=");

    if (variable[0] === lookup_key) {
      // If key does not have value, return TRUE that it exists, otherwise return its value.
      return variable[1] === undefined ? true : decodeURIComponent(variable[1]);
    }
  }
}

function error(message) {
  $("table tbody").append(
    $("<tr/>").html(
      "<td colspan='100%' style='text-align:center'>" + message + "</td>"
    )
  );
}

function setTitle(page) {
  var title = "ACM Admin Console";
  if (page != "") title += ` - ${page.charAt(0).toUpperCase() + page.slice(1)}`;
  document.title = title;
}

$(document).ready(function () {
  // Set Active Page
  const url = window.location.href;
  const sIndex = url.indexOf("/admin/") + 7;
  const eIndex = url.indexOf("?");

  var page;
  if (eIndex != -1) page = url.substring(sIndex, eIndex);
  else page = url.substr(sIndex, url.length - sIndex);

  setTitle(page);

  if (page.length == 0) page = "index";

  $(`.item#${page}_nav`).addClass("active");

  $(document).on("click", "th[col]", function () {});

  if ($('body').hasClass("dark")) {
    $(".ui.statistic").addClass("inverted");
    $(".ui.menu").addClass("inverted");
    $(".ui.table").addClass("inverted");
  }
});