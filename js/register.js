var teamRow = makeTeamRow();

$(document).ready(function() {
  $(document).on("click", ".add", addTeam);
  $(document).on("click", ".del", delTeam);
  $(document).on("click", ".switch input", toggleDivision);
});

function toggleDivision() {
  var div = $(this).attr("id");
  var showDiv = $(this).prop("checked");
  $(`table#${div}`).css({
    display: showDiv ? "block" : "none"
  });
}

function makeTeamRow() {
  var tShirtSizes = ["Small", "Medium", "Large", "X-Large", "XX-Large"];
  return $("<tr/>").append(
    $("<td/>").append(
      $("<button>")
        .attr("type", "button")
        .addClass("del")
        .html("-")
    ),
    $("<td/>").append(
      $("<input>").attr({ placeholder: "Team Name", name: "teamName" })
    ),
    $("<td/>").append(
      $("<select/>")
        .addClass("custom-select")
        .append(
          $.map(tShirtSizes, (v, _) => {
            return $("<option/>")
              .val(v.toLowerCase())
              .html(v);
          })
        )
    )
  );
}

function addTeam() {
  var tr = teamRow.clone();
  var division = $(this)
    .closest("table")
    .attr("id");
  var n = $(`#${division} tr`).length;
  tr.find("input").attr("name", `${division}-team-${n}`);
  tr.find("select").attr("name", `${division}-shirt-${n}`);
  tr.insertBefore($(this).closest("tr"));
}

function delTeam() {
  $(this)
    .closest("tr")
    .remove();
}
