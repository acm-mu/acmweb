<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";
require_once "include/header.php"; ?>

<link rel="stylesheet" type="text/css" href="/css/form.css?css_version=2">
<script src="/js/form.js" defer></script>

<?php

$mysql->query("USE muhostin_registration;");

$res = $mysql->query("SELECT * from competition_settings");

$comp_date = "";
$reg_end = "";
$reg_start = "";

while($row = $res->fetch_assoc()) {
    if($row['setting'] == "COMPETITION_DATE"){
        $comp_date = $row['value'];
    } else if ($row['setting'] == "REGISTRATION_START") {
        $reg_start = $row['value'];
    } else if ($row['setting'] == "REGISTRATION_END") {
        $reg_end = $row['value'];
    }
}

?>

<h2>Competition Settings</h2>
<div>
    <form id="event-form">
        <div>
            <div class="input-group">
                <label>Competition Date <b class="req">*</b></label>
                <?php echo '<input name="reg-date" type="date" value="' . date("Y-m-d", strtotime($comp_date)) . '" required>'; ?>
            </div>
            <span class='one-line'>
                <div class="input-group">
                    <label>Registration Start <b class="req">*</b></label>
                    <?php echo '<input name="reg-start" type="datetime-local" value="' . date("Y-m-d\TH:i:s", strtotime($reg_start)) . '" required>'; ?>
                </div>

                <div class="input-group">
                    <label>Registration End <b class="req">*</b></label>
                    <?php echo '<input name="reg-end" type="datetime-local" value="' . date("Y-m-d\TH:i:s", strtotime($reg_end)) . '" required>'; ?>
                </div>
            </span>
        </div>
        <input type="submit" class="submit" value="Save">
    </form>
</div>
<script>
const formElem = document.getElementById('event-form');

formElem.addEventListener('submit', (e) => {
    e.preventDefault();
    // Default options are marked with *
    const data = new FormData(e.target);

    const value = Object.fromEntries(data.entries());

    fetch('/admin/comp/api/settings', {
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
            window.location.href = "/admin/comp/settings";
          }
    });
});

</script>