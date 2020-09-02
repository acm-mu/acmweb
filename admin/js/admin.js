function setTitle(page) {
  var title = "ACM Admin Console";
  if (page != "") title += ` - ${page.charAt(0).toUpperCase() + page.slice(1)}`;
  document.title = title;
}

$(document).ready(function () {
  // Set Active Page
  const url = window.location.href;
  const sIndex = url.indexOf("/admin") + 7;
  const eIndex = url.indexOf("?");

  var page;
  if (eIndex != -1) page = url.substring(sIndex, eIndex);
  else page = url.substr(sIndex, url.length - sIndex);

  if (page.endsWith("/")) page = page.substring(0, page.length - 1);

  setTitle(page);

  if (page.length == 0) page = "index";

  $(`.item#${page}_sidenav`).addClass("active");
});