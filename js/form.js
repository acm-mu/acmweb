var shirtSizes = ["small", "medium", "large", "xlarge", "xxlarge"];

(() => {
  onEvent('click', '.add', addTeam);
  onEvent('click', '.del', delTeam);
  onEvent('click', 'input', dataToggle);
  onEvent('click', '#register', confirm);

  onEvent('change', '.shirts', maxNumber);
  onEvent('keyup', '.shirts', maxNumberKeyUp);
})();

function confirm(e) {
  const inputs = document.querySelectorAll(':input[required]');
  for (const input of inputs)
    if (!input[0].checkValidity()) return;

  e.preventDefault();
  swal({
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
      const submitButton = document.querySelector("#registerform");
      submitButton.submit();
    }
  });
}

function maxNumber() {
  var row = this.closest("tr.row");
  var max = parseInt(row.getAttribute("max-total"));

  const inputs = row.querySelectorAll('.shirts');
  var total = 0;
  for (const input of inputs)
    total += parseInt(input.value);

  var remaining = max - total;
  for (const input of inputs)
    input.setAttribute("max", remaining + parseInt(input.value));
}

function maxNumberKeyUp() {
  var row = this.closest("tr.row");
  var max = parseInt(row.getAttribute("max-total"));

  var total = 0;
  for (const shirt of row.querySelectorAll('.shirts'))
    total += parseInt(shirt.value);

  if (total > max) this.value = 0;
}

function addTeam() {
  var table = this.closest("table");

  // Check to see if the max number of rows has been met.
  var maxRows = parseInt(table.getAttribute("max-rows"));
  var numRows = table.querySelectorAll("tr.row").length;
  if (numRows >= maxRows)
    return;

  var div = table.getAttribute("division");

  var newRow = document.querySelector(`#${div}-section #row_0`).cloneNode(true);
  newRow.id = `row_${numRows}`;

  newRow.querySelector('.name').value = "";

  for (const size of shirtSizes) {
    const input = newRow.querySelector(`.${size}`)
    input.setAttribute('name', `${div}_${size}_${numRows}`)
    input.value = 0
  }

  // Insert before the `+` Button
  table.querySelector('tbody tr:last-child').before(newRow);
}

function delTeam() {
  var table = this.closest("table");
  if (table.querySelector(".row").length <= 1) return;

  this.closest("tr").remove();
  adjustTable(table);
}

function adjustTable(table) {
  var n = 0;
  var div = table.getAttribute("division");
  for (const row of table.querySelectorAll('.row')) {
    row.id = `row_${n}`;
    row.querySelector('.name').setAttribute('name', `${div}_${n}`);
    for (const size of shirtSizes) {
      row.querySelector(`.${size}`)
        .setAttribute("name", `${div}_${size}_${n}`);
    }
    n++;
  }
}

function dataToggle() {
  const section = document.querySelector(`#${this.getAttribute('data-toggle')}`);
  if (section == null) return

  var toggleRequired = this.getAttribute("toggle-required");
  var show = this.checked;

  section.style.display = show ? "block" : "none";
  if (toggleRequired == "true")
    for (const req of section.querySelectorAll('.required'))
      req.required = show;
}