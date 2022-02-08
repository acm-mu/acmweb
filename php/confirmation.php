<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php"; 
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; 

$mysql->query("USE muhostin_registration;");

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

$sql = "SELECT value FROM competition_settings WHERE setting = 'COMPETITION_DATE'";
$res = $mysql->query($sql);
$row = $res->fetch_assoc();

$date = date_create($row['value']);
?>

<h1 class="title" page="confirmation">Thank You!</h1>

<p>Thank you for registering,
    <? echo $cname; ?>. We can't wait to have you and your teams compete on <b><? echo date_format($date, 'm/d/Y'); ?></b>!</p>
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
<p>Something look wrong? <a href="mailto:acm@marquette.edu?subject=Incorrect Registration">Let us know!</a></p>
<!--<p>Your newly registered teams should appear on our <a href="https://codeabac.us" target="_blank">competition website</a> within a few minutes!</p>-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>

<style>
    #conf {
        font-family: Trebuchet, Arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    #conf td, #conf th {
        border: 1px solid #DDDDDD;
        padding: 8px;
        text-align: left;
    }

    #conf td {
        background #F2F2F2;
    }

    #conf th {
        padding: 12px 8px;
        background: var(--darkblue);
        color: var(--white);
    }
</style>