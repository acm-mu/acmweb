<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

if (!loggedin()) {
    echo json_encode(array("status" => 401, "message" => "You are not authorized to access this page."));
    exit();
}
$mysql->query("USE muhostin_registration;");

$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
    
$sql = "SELECT *
        FROM school 
            INNER JOIN coach ON coach.schoolid = school.schoolid
            INNER JOIN details ON details.schoolid = school.schoolid
        ORDER BY rdate DESC;";
$res = $mysql->query($sql);

$rows = array();
while($row = $res->fetch_assoc()) {
    $row['teams'] = array();
    
    $team_res = $mysql->query("SELECT * FROM team WHERE schoolid=".$row['schoolid']);
    while($team_row = $team_res->fetch_assoc())
        array_push($row['teams'], $team_row);
    
    $rows[] = $row;
}
echo json_encode($rows, JSON_NUMERIC_CHECK);
?>