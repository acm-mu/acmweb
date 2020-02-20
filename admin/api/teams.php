<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/connection.php";

if (!loggedin()) {
    echo json_encode(array("status" => 401, "message" => "You are not authorized to access this page."));
    exit();
}

$search = "";
if (isset($_GET['search']))
    $search = $_GET['search'];

$schoolid = "";
if (isset($_GET['schoolid'])) 
    $schoolid = "school.schoolid=".$_GET['schoolid']." AND";

$sql = "SELECT * FROM"
. " team INNER JOIN school ON team.schoolid = school.schoolid"
. " WHERE $schoolid (school.sname LIKE '%$search%' OR team.tname LIKE '%$search%' OR school.scity LIKE '%$search%')"
. " ORDER BY rdate DESC";

$res = $mysql->query($sql);
$rows = array();
while($row = $res->fetch_assoc()) {
    $rows[] = $row;
}

echo json_encode($rows, JSON_NUMERIC_CHECK);
?>