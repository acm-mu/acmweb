<?php 
$disable_main_navbar = true;

require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";
?>

<link rel="stylesheet" type="text/css" href="/admin/css/adminconsole.css?css_version=1">
<link rel='stylesheet' type='text/css' href='/css/form.css?css_version=1'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script defer>
    setTitle('ACM Admin Console');
</script>

<?php
if (!loggedin()) {
    require_once "login.php";
    exit();
}
?>
<div class='body'>
<h3>Marquette ACM Admin Console</h3>

<?php require_once "navbar.php"; ?>

<div class="admin panel">