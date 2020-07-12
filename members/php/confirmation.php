<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";

$mid = $_GET['mid'];

if(!$mysql->query("USE muhostin_acm")) {
  print("Could not switch databases");
  exit();
}

$sql = "SELECT * FROM members WHERE mid='$mid'";

$res = $mysql->query($sql);
$row = $res->fetch_assoc();

$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
?>

<p>Thank you <b><?php echo "$fname $lname"?></b> for registering for a Marquette ACM student member page!</p>
<p>We have sent you an email to verify your marquette email address with a link to finish setting up your account.</p>
<i>This email should be from <b>marquetteacm@gmail.com</b>.</i>