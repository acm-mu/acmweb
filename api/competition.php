<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

$mysql->query("USE muhostin_registration;");

$sql = "SELECT * from competition_settings";

$res = $mysql->query($sql);
$rows = array();
while ($row = $res->fetch_assoc()) $rows[] = $row;

header("Content-type: application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode($rows, JSON_NUMERIC_CHECK);
