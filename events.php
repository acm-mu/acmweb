<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.1/showdown.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/events.css?css_version=2">

<h1 class="title" page="events"> Events </h1>

<div class="ui secondary menu" id="yearSelector"></div>

<div class="event-list" id="eventList">
  <br />
  <em>More events coming soon!</em>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>

<script defer>
  let selectedYear = getUrlParameter('year');
  if (selectedYear == undefined) selectedYear = moment().year();
  const yearSelector = document.querySelector('#yearSelector');
  const eventList = document.querySelector('#eventList');

  let events = {};

  // Theoretically this doesn't scale well, because to get every unique year it looks at EVERY event.
  // A better way to do this would be add an endpoint in the API just to get which years have events.

  // Make Selector
  fetch('/api/events')
    .then(response => response.json())
    .then(data => {
      events = data.reduce((r, e) => {
        const year = moment(e.date).year();
        r[year] = r[year] || [];
        r[year].push(e);
        return r;
      }, Object.create(null));

      // Get all the years from events, and sort.
      let years = Object.keys(events).sort();
      let converter = new showdown.Converter();

      // Create button for each school year.
      for (const year of years)
        yearSelector.appendChild(createElement(
          `<a class='item ${year == selectedYear ? 'active' : ''}' href='?year=${year}'>${year} - ${parseInt(year)+1}</a>`
        ));

      if(data.length != 0){
        for (const event of events[selectedYear]) {
          const d = moment(event.date);
          const date =
            `<div class='date'> <h1 class='month'>${d.format('MMM')}</h1> <h1 class='day'>${d.format('DD')}</h1> </div>`;
          const desc =
            `<div class='details'> <p class='title'>${event.title}</p> <p class='desc'>${converter.makeHtml(event.description)}</p></div>`;

          eventList.prepend(createElement(
            `<div class='event ${d.isBefore(moment()) ? 'passed': ''}'>${date} ${desc}</div>`));
        }
      }
    });
</script>