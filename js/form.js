/* global onEvent, swal */

const shirtSizes = ['small', 'medium', 'large', 'xlarge', 'xxlarge'];

function confirm(e) {
  const inputs = document.querySelectorAll('input[required]');
  // eslint-disable-next-line no-restricted-syntax
  for (const input of inputs) {
    if (!input.checkValidity()) return;
  }

  e.preventDefault();
  swal({
    customClass: {
      popup: 'swal2-custom-popup',
      icon: 'swal2-custom-icon',
      confirmButton: 'swal2-custom-confirm',
      cancelButton: 'swal2-custom-cancel',
      title: 'swal2-custom-title',
      content: 'swal2-custom-content',
    },
    title: 'Are you sure?',
    text: 'Make sure all your fields are correct before submitting.',
    icon: 'info',
    showCancelButton: true,
    confirmButtonText: "I'm sure!",
  }).then((result) => {
    result && document.querySelector('#registerform').submit();
  });
}

function maxNumber() {
  const row = this.closest('tr.row');
  const max = parseInt(row.getAttribute('max-total'), 10);

  const inputs = row.querySelectorAll('.shirts');
  let total = 0;
  inputs.forEach((input) => { total += parseInt(input.value, 10); });

  const remaining = max - total;
  inputs.forEach((input) => { input.setAttribute('max', remaining + parseInt(input.value, 10)); });
}

function maxNumberKeyUp() {
  const row = this.closest('tr.row');
  const max = parseInt(row.getAttribute('max-total'), 10);

  let total = 0;
  const shirts = row.querySelectorAll('.shirts');
  shirts.forEach((shirt) => { total += parseInt(shirt.value, 10); });

  if (total > max) this.value = 0;
}

function addTeam() {
  const table = this.closest('table');

  // Check to see if the max number of rows has been met.
  const maxRows = parseInt(table.getAttribute('max-rows'), 10);
  const numRows = table.querySelectorAll('tr.row').length - 1;
  if (numRows >= maxRows) {
    return;
  }

  const div = table.getAttribute('division');

  const newRow = document.querySelector(`#${div}-section #row`).cloneNode(true);
  newRow.id = `row_${numRows}`;

  newRow.querySelector('.name').value = '';
  newRow.required = true
  newRow.querySelector('.name').setAttribute('name', `${div}_${numRows}`);

  shirtSizes.forEach((size) => {
    const input = newRow.querySelector(`.${size}`);
    input.required = true
    input.setAttribute('name', `${div}_${size}_${numRows}`);
    input.value = 0;
  });

  // Insert before the `+` Button
  table.querySelector('tbody tr:last-child').before(newRow);
}

function adjustTable(table) {
  let n = 0;
  const div = table.getAttribute('division');
  const rows = table.querySelectorAll('[id^=row_]');
  rows.forEach((row) => {
    row.setAttribute('id', `row_${n}`);
    row.querySelector('.name').setAttribute('name', `${div}_${n}`);
    shirtSizes.forEach((size) => {
      row.querySelector(`.${size}`)
        .setAttribute('name', `${div}_${size}_${n}`);
    });
    n += 1;
  });
}

function delTeam() {
  const table = this.closest('table');
  if (table.querySelector('.row').length <= 1) return;

  this.closest('tr').remove();
  adjustTable(table);
}

function dataToggle() {
  const section = document.querySelector(`#${this.getAttribute('data-toggle')}`);
  if (section == null) return;

  const toggleRequired = this.getAttribute('toggle-required');
  const show = this.checked;

  section.style.display = show ? 'block' : 'none';
  if (toggleRequired === 'true') {
    const required = section.querySelectorAll('.required');
    required.forEach((req) => { req.required = show; });
  }
}

(() => {
  onEvent('click', '.add', addTeam);
  onEvent('click', '.del', delTeam);
  onEvent('click', 'input', dataToggle);
  onEvent('click', '#register', confirm);

  onEvent('change', '.shirts', maxNumber);
  onEvent('keyup', '.shirts', maxNumberKeyUp);
})();
