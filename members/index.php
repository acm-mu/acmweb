<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/include/list.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

<h1 class="title" page="Members">Members</h1>

<p>Are you a Marquette ACM Member? <a href="signup">Sign up</a> for a user page.</p>

<?php include_once "comp/member_list.php"; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>