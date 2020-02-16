var shirtSizes = ["small", "medium", "large", "xlarge", "xxlarge"];

$(document).ready(() => {
  $(document).on("click", ".add", addTeam);
  $(document).on("click", ".del", delTeam);
  $(document).on("click", "input", dataToggle);
  $(document).on("click", "#register", confirm);

  $(document).on("change", ".shirts", maxNumber);
  $(document).on("keyup", ".shirts", maxNumberKeyUp);
});

function confirm(e) {
  var areFilled = true;
  $(":input[required]").each(function() {
    if (!areFilled) return;
    if (!$(this)[0].checkValidity()) areFilled = false;
  });

  if (areFilled) {
    e.preventDefault();
    Swal.fire({
      customClass: {
        popup: "swal2-custom-popup",
        icon: "swal2-custom-icon",
        confirmButton: "swal2-custom-confirm",
        cancelButton: "swal2-custom-cancel",
        title: "swal2-custom-title",
        content: "swal2-custom-content"
      },
      title: "Are you sure?",
      text: "Make sure all your fields are correct before submitting.",
      icon: "info",
      showCancelButton: true,
      confirmButtonText: "I'm sure!"
    }).then(result => {
      if (result.value) {
        $("#registerform").submit();
      }
    });
  }
}

function maxNumber() {
  var row = $(this).closest("tr.row");
  var max = parseInt(row.attr("max-total"));

  var total = 0;
  row.find(".shirts").each(function() {
    total += parseInt($(this).val());
  });

  var remaining = max - total;
  row.find(".shirts").each(function() {
    var val = parseInt($(this).val());
    $(this).attr("max", val + remaining);
  });
}

function maxNumberKeyUp() {
  var row = $(this).closest("tr.row");
  var max = parseInt(row.attr("max-total"));

  var total = 0;
  row.find(".shirts").each(function() {
    total += parseInt($(this).val());
  });

  if (total >= max) $(this).val(0);
}

function addTeam() {
  var table = $(this).closest("table");
  var maxRows = parseInt(table.attr("max-rows"));
  var div = table.attr("division");
  var numRow = table.find("tr.row").length;
  if (numRow >= maxRows) {
    return;
  }
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
