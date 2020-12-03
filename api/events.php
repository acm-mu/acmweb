<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

$mysql->query("USE muhostin_acm;");

$filter = "";

$sql = "SELECT * FROM events $filter ORDER BY date DESC";

$res = $mysql->query($sql);

$rows = array();
while($row = $res->fetch_assoc()) {
    $rows[] = $row;
}

echo json_encode($rows, JSON_NUMERIC_CHECK);