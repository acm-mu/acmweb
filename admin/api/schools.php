<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/connection.php";

if (!loggedin()) {
    echo json_encode(array("status" => 401, "message" => "You are not authorized to access this page."));
    exit();
}

$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
    
$sql = "SELECT *, (SELECT COUNT(*) FROM team WHERE team.schoolid = school.schoolid) AS teams"
. " FROM school INNER JOIN coach" 
. " ON school.schoolid = coach.schoolid"
. " WHERE school.sname LIKE '%$search%' OR school.scity LIKE '%$search%' OR coach.cname LIKE '%$search%'"
. " ORDER BY school.rdate DESC ";

$res = $mysql->query($sql);
$rows = array();
while($row = $res->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode($rows);
?>