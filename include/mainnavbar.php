
<link rel='stylesheet' type='text/css' href='/css/mainnavbar.css'>
<div id='mainnavbar'>
  <img src='/assets/acmmu.png'>

  <ul>
    <a href="/" id="home">
      <li>Home</li>
    </a>
    <a href="/about" id="about">
      <li>About</li>
    </a>
    <!-- <a href="/members" id="members">
      <li>Members</li>
    </a> -->
    <a href="/events" id="events">
      <li>Events</li>
    </a>
    <a href="/competition" id="competition">
      <li>Competition</li>
    </a>
  </ul>
</div>

<script>
    $(document).ready(() => {
      if ($("h1.title").length) {
        var page_ = $("h1.title").attr("page");
        $(`#mainnavbar #${page_} li`).addClass("active");
      }
    });
  </script>