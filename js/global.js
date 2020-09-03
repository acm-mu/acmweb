function onEvent(eventName, elementSelector, handler) {
    document.addEventListener(eventName, function (e) {
        // loop parent nodes from the target to the delegation node
        for (var target = e.target; target && target != this; target = target.parentNode)
            if (target.matches(elementSelector)) {
                handler.call(target, e)
                break
            }
    }, false)
}

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

function capitalize(str) {
    if (typeof str == 'string') return str.replace(/^\w/, c => c.toUpperCase());
    else return '';
}

function highlightNavItem() {
    // TODO: Maybe if nav item doesn't exist for page, 
    // look to add it before highlighting index. This would deprecate sidebar.js nav script
    document.addEventListener('DOMContentLoaded', () => {
        for (const item of document.querySelectorAll('.nav_item'))
            if (window.location.href.indexOf(item.id) > 0)
                item.classList.add('active')

        // TODO: If no other nav item is highlighted, default to index
    })
}

function setTitle(prefix) {
    highlightNavItem();
    document.addEventListener('DOMContentLoaded', () => {
        const titleElement = document.querySelector('h1.title')
        let title, page;
        if (titleElement) {
            title = titleElement.innerText;
            page = titleElement.getAttribute('page');
        } else {
            // (() => {
            //   // Set Active Page
            //   const url = window.location.href;
            //   const sIndex = url.indexOf("/admin") + 7;
            //   const eIndex = url.indexOf("?");

            //   var page;
            //   if (eIndex != -1) page = url.substring(sIndex, eIndex);
            //   else page = url.substr(sIndex, url.length - sIndex);

            //   if (page.endsWith("/")) page = page.substring(0, page.length - 1);

            //   setTitle("ACM Admin Console", page);

            //   if (page.length == 0) page = "index";

            //   document.querySelector(`.item#${page}_sidenav`).classList.add('active');
            // })();
        }

        if (page && page != 'index')
            title = `${prefix} - ${page.charAt(0).toUpperCase() + page.slice(1)}`;

        document.title = title;
    })
}

function createElement(html) {
    let temp = document.createElement('template');
    html = html.trim();
    temp.innerHTML = html;
    return temp.content.firstChild;
}