<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>
<?php date_default_timezone_set("America/Chicago"); ?>

<link rel="stylesheet" type="text/css" href="/css/form.css?css_version=2">
<script src="/js/form.js" defer></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<?php
    $id = $_GET['id'];

    $mysql->query("USE muhostin_acm");

    $stmt = $mysql->prepare("SELECT * FROM events where eventid = ?");
    $success = $stmt->bind_param("i", $id);
    if(!$success) {
        echo "<h1>Could not find an event with the given ID!</h1>";
        $stmt->close();
        return; 
    }

    $success = $stmt->execute();
    if(!$success) {
        echo "<h1>Could not find an event with the given ID!</h1>";
        $stmt->close();
        return; 
    }

    $result = $stmt->get_result();

    $event = $result->fetch_assoc();

    if(!$success) {
        echo "<h1>Could not find an event with the given ID!</h1>";
        $stmt->close();
        return; 
    }

    $event_id = $event['eventid'];
    $event_name = $event["title"];
    $event_start = $event["start"];
    $event_end = $event["end"];
    $event_publish_date = $event["publish_date"];
    $event_description = $event["description"];

    echo "<h1>Editing $event_name</h1>";

    $stmt->close();

?>

<form id="event-form">
    <?php echo '<input name="id" type="hidden" value="' . $event_id . '">'; ?>
    <div>
        <div class="input-group">
            <label>Name <b class="req">*</b></label>
            <?php echo '<input name="name" value="' . $event_name . '" required>'; ?>
        </div>

        <span class='one-line'>
            <div class="input-group">
                <label>Event Start <b class="req">*</b></label>
                <?php echo '<input name="estartdate" type="datetime-local" value="' . date("Y-m-d\TH:i:s", strtotime($event_start)) . '" required>'; ?>
            </div>

            <div class="input-group">
                <label>Event End <b class="req">*</b></label>
                <?php echo '<input name="eenddate" type="datetime-local" value="' . date("Y-m-d\TH:i:s", strtotime($event_end)) . '" required>'; ?>
            </div>

            <div class="input-group">
                <label>Publish Date & Time <b class="req">*</b></label>
                <?php echo '<input name="pdate" type="datetime-local" value="' . date("Y-m-d\TH:i:s", strtotime($event_publish_date)) . '" required>'; ?>
            </div>
        </span>

        <div class="input-group">
            <label>Description <b class="req">*</b></label>
            <?php echo '<input id="original-desc" type="hidden" value="' . $event_description . '">'; ?>
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