<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; 
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/connection.php";

$schoolid = $_GET['schoolid'];

$sql = "SELECT *, (SELECT COUNT(*) FROM team WHERE schoolid = $schoolid) AS teams
            FROM (school INNER JOIN coach on school.schoolid=coach.schoolid)
        WHERE school.schoolid=$schoolid";
$res = $mysql->query($sql);
$row = $res->fetch_assoc();

$cname = $row['cname'];
$email = $row['email'];
$sname = $row['sname'];
$count = $row['teams'];

?>
<link rel="stylesheet" type="text/css" href="/css/confirmation.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<h1 class="title" page="confirmation">Thank You!</h1>

<p>Thank you for registering,
    <? echo $cname; ?> We can't wait to have you and your students here at Marquette on <b>April
        16th</b>!</p>
<h2>Confirmation Details</h2>
<p>Here are your confirmation details:</p>
<table id="conf">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>School</th>
        <th>Total Number of Teams</th>
    </tr>
    <tr>
        <td>
            <? echo $cname; ?>
        </td>
        <td>
            <? echo $email; ?>
        </td>
        <td>
            <? echo $sname; ?>
        </td>
        <td>
            <? echo $count; ?>
        </td>
    </tr>
</table>
<p>Something look wrong? <a href="mailto:acm-officers@mscs.mu.edu?subject=Incorrect Registration">Let us know!</a></p>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>