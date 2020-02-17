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

$(document).ready(function() {
  // Set Active Page
  var url = window.location.href;
  var index = url.indexOf("/admin/") + 7;
  var page = url.substr(index, url.length - index);
  if (page.length == 0) page = "index";
  $(".item#" + page).addClass("active");
});
