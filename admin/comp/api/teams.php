<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

if (!loggedin()) {
    echo json_encode(array("status" => 401, "message" => "You are not authorized to access this page."));
    exit();
}
$mysql->query("USE muhostin_registration;");

$search = "";
if (isset($_GET['search']))
    $search = $_GET['search'];

$where = "";
if (isset($_GET['schoolid'])) 
    $where = "school.schoolid=".$_GET['schoolid']." AND";

if (isset($_GET['division']))
    $where = "team.division='".$_GET["division"]."' AND";

$sql = "SELECT * FROM"
. " team INNER JOIN school ON team.schoolid = school.schoolid"
. " WHERE $where (school.sname LIKE '%$search%' OR team.tname LIKE '%$search%' OR school.scity LIKE '%$search%')"
. " ORDER BY rdate DESC";

$res = $mysql->query($sql);
$rows = array();
while($row = $res->fetch_assoc()) {
    $rows[] = $row;
}

echo json_encode($rows, JSON_NUMERIC_CHECK);
?>