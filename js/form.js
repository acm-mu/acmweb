var shirtSizes = ["small", "medium", "large", "xlarge", "xxlarge"];

$(document).ready(() => {
  $(document).on("click", ".add", addTeam);
  $(document).on("click", ".del", delTeam);
  $(document).on("click", "input", dataToggle);
});

function addTeam() {
  var table = $(this).closest("table");
  var div = table.attr("division");
  var numRow = table.find("tr.row").length;
  var newRow = $(`#${div}-section #row_0`).clone();
  newRow.attr("id", `row_${numRow}`);
  newRow
    .find(".name")
    .attr("name", `${div}_${numRow}`)
    .prop("required", true)
    .val("");
  $.each(shirtSizes, (_, size) => {
    newRow
      .find(`.${size}`)
      .attr("name", `${div}_${size}_${numRow}`)
      .prop("required", true)
      .val(0);
  });

  newRow.insertBefore(
    $(this)
      .parent()
      .parent()
  );
}

function delTeam() {
  var table = $(this).closest("table");
  if (table.find(".row").length <= 1) return;

  $(this)
    .closest("tr")
    .remove();
  adjustTable(table);
}

function adjustTable(table) {
  var n = 0;
  var div = table.attr("division");
  table.find(".row").each(function() {
    $(this).attr("id", `row_${n}`);
    $(this)
      .find(".name")
      .attr("name", `${div}_${n}`);
    $.each(shirtSizes, (_, size) => {
      $(this)
        .find(`.${size}`)
        .attr("name", `${div}_${size}_${n}`);
    });
    n++;
  });
}

function dataToggle() {
  var section = $(this).attr("data-toggle");
  var toggleRequired = $(this).attr("toggle-required");
  console.log(toggleRequired);
  if (typeof section !== typeof undefined && section !== false) {
    var show = $(this).prop("checked");

    $(`#${section}`).css("display", show ? "block" : "none");
    if (
      typeof toggleRequired !== typeof undefined &&
      toggleRequired == "true"
    ) {
      $(`#${section} .required`).each(function() {
        $(this).prop("required", show);
      });
    }
  }
}
