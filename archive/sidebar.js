let templates = {};
const template_types = ['description', 'python-skeleton', 'java-skeleton', 'python-solution', 'java-solution']

for (const type of template_types) {
  const template = document.querySelector(`#${type}-template`);
  // If template exists,
  if (template) {
    // Save the memory
    templates[type] = template.innerHTML;
    // Enable button
    document.querySelector(`.swatch#${type}`).style.display = 'inline-block';
  }
}

document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('button#description').click();
  const navbar = document.querySelector('#mainnavbar ul');
  const archive = createElement(`<a class='nav_item active' id='archive'><li>Archive</li></a>`);
  navbar.appendChild(archive);

})

onEvent('click', 'button.swatch', function () {
  // Remove current active class
  const active = document.querySelector('button.active')
  if (active) active.classList.remove('active');

  this.classList.add('active')
  document.querySelector('#content').innerHTML = templates[this.id];
  PR.prettyPrint();
})