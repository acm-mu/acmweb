<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

if (!loggedin()) {
    require_once "login.php";
    exit();
}

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$event_id = $input["id"];
$event_start = $input["estartdate"];
$event_end = $input["eenddate"];
$event_publish_datetime = $input["pdate"];
$event_title = $input["name"];
$event_description = $input["description"];

if(strlen($input["name"]) > 64 || strlen($input["description"]) > 1024) {
    echo json_response(400, "Data is too long");
    return;
}

$mysql->query("USE muhostin_acm");

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $stmt = $mysql->prepare("UPDATE events SET start = ?, end = ?, publish_date = ?, title = ?, description = ? WHERE eventid = ?");
    $success = $stmt->bind_param("sssssi", date("Y-m-d H:i:s",strtotime($event_start)), date("Y-m-d H:i:s",strtotime($event_end)), date("Y-m-d H:i:s",strtotime($event_publish_datetime)), $event_title, $event_description, $event_id);
    
    if (!$success){
        echo json_response(400, "Error updating database. Please check the data.");
        return;
    }
    
    $success = $stmt->execute();
    if (!$success){
        echo json_response(400, "Error updating database. Please check the data.");
        return;
    }
    
    $stmt->close();
    echo json_response(200, "Success");
} else {
    $stmt = $mysql->prepare("INSERT INTO `events`(`start`, `end`, `publish_date`, `title`, `description`) VALUES (?, ?, ?, ?, ?)");
    $success = $stmt->bind_param("sssss", date("Y-m-d H:i:s",strtotime($event_start)), date("Y-m-d H:i:s",strtotime($event_end)), date("Y-m-d H:i:s",strtotime($event_publish_datetime)), $event_title, $event_description);
    
    if (!$success){
        echo json_response(400, "Error creating event. Please check the data.");
        return;
    }
    
    $success = $stmt->execute();
    if (!$success){
        echo json_response(400, "Error creating event. Please check the data.");
        return;
    }
    
    $stmt->close();
    echo json_response(200, "Success");
}


?>