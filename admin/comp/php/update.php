<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

if (!loggedin()) {
    echo json_encode(array("status" => 401, "message" => "You are not authorized to access this page."));
    exit();
}

if (!isset($_GET['schoolid'])) {
    echo json_encode(array("status" => 400, "message" => "Bad Request."));
    exit();
}

if (!isset($_GET['key'])) {
    echo json_encode(array("status" => 400, "message" => "Bad Request."));
    exit();
}

$schoolid = $_GET['schoolid'];
$key = $_GET['key'];
    
$sql = "UPDATE invoice ";
if ($key == "datesent")
    $sql .= "SET datesent=NOW() ";
else if ($key == "datepaid")
    $sql .= "SET datepaid=NOW() ";

$sql .= "WHERE schoolid=$schoolid";

$res = $mysql->query($sql);

echo json_encode(array("status" => 200, "message" => "Success"));
?>