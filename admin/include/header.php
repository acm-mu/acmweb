<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";
?>

<link rel="stylesheet" type="text/css" href="/admin/css/adminconsole.css?<?php echo date('l jS \of F Y h:i:s A');?>">
<link rel='stylesheet' type='text/css' href='/css/form.css?<?php echo date('l jS \of F Y h:i:s A');?>'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="/admin/js/adminconsole.js"></script>

<?php
if (!loggedin()) {
    require_once "login.php";
    exit();
}
?>

<div class="ui pointing menu" id="admin_navbar">
    <a class="item" id="index" href="/admin/">
        Feed
    </a>
    <a class="item" id="teams" href="/admin/teams">
        Teams
    </a>
    <a class="item" id="schools" href="/admin/schools">
        Schools
    </a>
    <!-- <div class="right menu">
        <div class="item">
            <div class="ui transparent icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>
    </div> -->
</div>