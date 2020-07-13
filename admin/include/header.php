<?php 
$disable_main_navbar = true;

require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";
?>

<link rel="stylesheet" type="text/css" href="/admin/css/adminconsole.css">
<link rel='stylesheet' type='text/css' href='/css/form.css'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="/admin/js/admin.js"></script>

<?php
if (!loggedin()) {
    $_SESSION['HREF_LR'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    require_once "login.php";
    exit();
}
?>
<h3>Marquette ACM Admin Console</h3>

<?php require_once "navbar.php"; ?>