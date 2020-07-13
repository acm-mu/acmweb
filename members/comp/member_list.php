<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

$mysql->query("USE muhostin_acm");

$sql = "SELECT * FROM members WHERE status=1";
$res = $mysql->query($sql);

while($row = $res->fetch_assoc()) {
  var_dump($row);
}


?>