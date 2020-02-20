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
    
$sql = "SELECT *, (SELECT COUNT(*) FROM team WHERE school.schoolid=team.schoolid) AS teams 
                FROM school 
                INNER JOIN coach ON coach.schoolid = school.schoolid
                ORDER BY rdate DESC;";
$res = $mysql->query($sql);

$rows = array();
while($row = $res->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode($rows, JSON_NUMERIC_CHECK);
?>