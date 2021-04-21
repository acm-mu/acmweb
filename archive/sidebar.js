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

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('button#description').click();
    const navbar = document.querySelector('#mainnavbar nav');
    const archive = createElement(`<a class='nav_item active' id='archive'>Archive</a>`);
    navbar.appendChild(archive);

    const abacusLink = document.querySelector('meta[abacus-link]')
    if (abacusLink) {
        const abacusButton = document.querySelector('#abacus-link')
        abacusButton.style.display = 'inline'
        abacusButton.href = `https://codeabac.us/blue/practice/${abacusLink.getAttribute('abacus-link')}`
    }

    const videoSolutionLink = document.querySelector('meta[yt-link]')
    console.log(document.querySelector('meta[yt-link]'))
    if (videoSolutionLink) {
        const ytButton = document.querySelector('#yt-link')
        ytButton.style.display = 'inline'
        ytButton.href = `${videoSolutionLink.getAttribute('yt-link')}`
    }
})

onEvent('click', 'button.swatch', function() {
    // Remove current active class
    const active = document.querySelector('button.active')
    if (active) active.classList.remove('active');

    this.classList.add('active')
    document.querySelector('#content').innerHTML = templates[this.id];
    PR.prettyPrint();
})