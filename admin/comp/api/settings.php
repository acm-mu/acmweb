<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

if (!loggedin()) {
    echo json_encode(array("status" => 401, "message" => "You are not authorized to access this page."));
    exit();
}

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$comp_start = $input["reg-date"];
$reg_start = $input["reg-start"];
$reg_end = $input["reg-end"];

$mysql->query("USE muhostin_registration;");

$stmt = $mysql->prepare("UPDATE competition_settings SET value = ? WHERE setting = 'COMPETITION_DATE'");
$success = $stmt->bind_param("s", date("Y-m-d",strtotime($comp_start)));

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



$stmt = $mysql->prepare("UPDATE competition_settings SET value = ? WHERE setting = 'REGISTRATION_START'");
$success = $stmt->bind_param("s", date("Y-m-d H:i:s",strtotime($reg_start)));

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


$stmt = $mysql->prepare("UPDATE competition_settings SET value = ? WHERE setting = 'REGISTRATION_END'");
$success = $stmt->bind_param("s", date("Y-m-d H:i:s",strtotime($reg_end)));

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

?>