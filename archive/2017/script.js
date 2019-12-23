var $templateDescription;
var $templateJavaSolution;
var $templateJava;

$(document).ready(() => {
  $templateDescription = $("#description-template").html();
  $templateJavaSolution = $("#java-solution").html();
  $templateJava = $("#java-skeleton").html();

  $("#content").html($templateDescription);
  $("#description").addClass("active");

  var page = $("#page").attr("page");
  $("#" + page).addClass("active");
});

$(document).on("click", "#description", () => {
  $("#content").html($templateDescription);
  $("button.active").removeClass("active");
  $("#description").addClass("active");
});

$(document).on("click", "#java-sol", () => {
  $("#content").html($templateJavaSolution);
  $("button.active").removeClass("active");
  $("#java-sol").addClass("active");
});

$(document).on("click", "#java", () => {
  $("#content").html($templateJava);
  $("button.active").removeClass("active");
  $("#java").addClass("active");
});
