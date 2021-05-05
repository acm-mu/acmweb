<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";


if ($_SERVER['REQUEST_METHOD'] === 'DELETE') { 

    $data = file_get_contents("php://input");

    $mysql->query("USE muhostin_acm");

    $stmt = $mysql->prepare("DELETE FROM users where uid = ?");
    $stmt->bind_param("i", $data);
    $stmt->execute();
    $stmt->close();

    http_response_code(200); 
}