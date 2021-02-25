<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

$mysql->query("USE muhostin_registration;");

$sql = "SELECT division, tname AS team_name, "
    . "rdate AS registration_date, "
    . "sname AS school_name, "
    . "(small+medium+large+xlarge+xxlarge) AS num_of_students "
    . "FROM team INNER JOIN school ON team.schoolid = school.schoolid ORDER BY rdate DESC";

$res = $mysql->query($sql);
$rows = array();
while ($row = $res->fetch_assoc()) $rows[] = $row;

header("Content-type: application/json");
echo json_encode($rows, JSON_NUMERIC_CHECK);
