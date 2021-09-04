<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>
<?php date_default_timezone_set("America/Chicago"); ?>

<link rel="stylesheet" type="text/css" href="/css/form.css?css_version=2">
<script src="/js/form.js" defer></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<h1>Create a new event</h1>
<form id="event-form">
    <input name="id" type="hidden" value="">
    <div>
        <div class="input-group">
            <label>Name <b class="req">*</b></label>
            <input name="name" value="" required>
        </div>

        <span class='one-line'>
            <div class="input-group">
                <label>Event Start <b class="req">*</b></label>
                <input name="estartdate" type="datetime-local" value="" required>
            </div>

            <div class="input-group">
                <label>Event End <b class="req">*</b></label>
                <input name="eenddate" type="datetime-local" value="" required>
            </div>

            <div class="input-group">
                <label>Publish Date & Time <b class="req">*</b></label>
                <input name="pdate" type="datetime-local" value="" required>
            </div>
        </span>

        <div class="input-group">
            <label>Description <b class="req">*</b></label>
            <input id="original-desc" type="hidden" value="">
            <textarea id="desc" name="description"></textarea>
        </div>
    </div>

    <input type="submit" class="submit" value="Save">
</form>

<script>
var simplemde = new SimpleMDE({ element: document.getElementById("desc") });
simplemde.value(document.getElementById("original-desc").value);
const formElem = document.getElementById('event-form');

formElem.addEventListener('submit', (e) => {
    e.preventDefault();
    // Default options are marked with *
    const data = new FormData(e.target);

    const value = Object.fromEntries(data.entries());

    fetch('save.php', {
        method: 'POST',
        cache: 'no-cache',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(value)
    }).then(response => response.json())
      .then(resp => {
          if(!resp.status) {
              alert(resp.message);
          } else {
            window.location.href = "/admin/events";
          }
    });
});

</script>