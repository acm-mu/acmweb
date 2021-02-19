function onEvent(eventName, elementSelector, handler) {
  document.addEventListener(eventName, (e) => {
    // loop parent nodes from the target to the delegation node
    for (let target = e.target; target && target !== this; target = target.parentNode) {
      if (target.matches(elementSelector)) {
        handler.call(target, e);
        break;
      }
    }
  }, false);
}

function getUrlParameter(lookupKey) {
  // Get the query portion of the URL, and cut off the '?'
  const query = window.location.search.substring(1);
  // Split them up separated by '&'
  const variables = query.split('&');

  for (let i = 0; i < variables.length; i += 1) {
    const variable = variables[i].split('=');

    if (variable[0] === lookupKey) {
      // If key does not have value, return TRUE that it exists, otherwise return its value.
      return variable[1] === undefined ? true : decodeURIComponent(variable[1]);
    }
  }
  return undefined;
}

const capitalize = (str) => ((typeof str === 'string') ? str.replace(/^\w/, (c) => c.toUpperCase()) : '');

function highlightNavItem() {
  // TODO: Maybe if nav item doesn't exist for page,
  // look to add it before highlighting index. This would deprecate sidebar.js nav script
  document.addEventListener('DOMContentLoaded', () => {
    const navItems = document.querySelectorAll('.nav_item');
    navItems.forEach((element) => {
      if (window.location.href.indexOf(element.id) > 0) {
        element.classList.add('active');
      }
    });

    // TODO: If no other nav item is highlighted, default to index
  });
}

function setTitle(prefix) {
  highlightNavItem();
  document.addEventListener('DOMContentLoaded', () => {
    const titleElement = document.querySelector('h1.title');
    let title;
    let page;
    if (titleElement) {
      title = titleElement.innerText;
      page = titleElement.getAttribute('page');

      if (page && page !== 'index') title = `${prefix} - ${page.charAt(0).toUpperCase() + page.slice(1)}`;
    }

    document.title = prefix + (page && page !== 'index' ? ` - ${page.charAt(0).toUpperCase() + page.slice(1)}` : '');
  });
}

function createElement(html) {
  const temp = document.createElement('template');
  temp.innerHTML = html.trim();
  return temp.content.firstChild;
}