<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

if(!loggedin()){
    echo json_encode(array("status" => 401, "message" => "You are not authorized to access this page."));
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') { 

    $data = file_get_contents("php://input");

    if(strcmp($data, '1') == 0){
        // Cannot delete the root user
        http_response_code(400);
        return; 
    }

    $mysql->query("USE muhostin_acm");

    $stmt = $mysql->prepare("DELETE FROM users where uid = ?");
    $success = $stmt->bind_param("i", $data);
    if(!$success) {
        http_response_code(400);
        $stmt->close();
        return; 
    }

    $success = $stmt->execute();
    if(!$success) {
        http_response_code(400);
        $stmt->close();
        return; 
    }

    $stmt->close();
    http_response_code(200); 
}