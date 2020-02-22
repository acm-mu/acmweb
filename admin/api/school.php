<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/connection.php";

if (!loggedin()) {
    echo json_encode(array("code" => 401, "message" => "Unauthorized", "more_info" => "You are not authorized to access this page."));
    exit();
}

if(!isset($_GET['schoolid'])) {
    echo json_encode(array("code" => 400, "message" => "Bad Request", "more_info" => "Please provide a 'schoolid' in your request."));
    exit();
}

$schoolid = $_GET['schoolid'];

    
$sql = "SELECT *, INET_NTOA(school.ip) AS school_ip"
. " FROM school INNER JOIN coach ON school.schoolid = coach.schoolid"
. " INNER JOIN details ON school.schoolid = details.schoolid"
. " WHERE school.schoolid=$schoolid";

$res = $mysql->query($sql);
$rows = $res->fetch_assoc();

$rows['teams'] = array();

$sql = "SELECT * FROM team WHERE schoolid=$schoolid";
$res = $mysql->query($sql);
while($row = $res->fetch_assoc()) {
   array_push($rows['teams'], $row);
}

echo json_encode($rows, JSON_NUMERIC_CHECK);
?>