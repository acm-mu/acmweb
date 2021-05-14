<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>

<?php
if (!loggedin()) {
    require_once "login.php";
    exit();
}

if(!isset($_POST["name"]) || !isset($_POST["edate"]) || !isset($_POST["pdate"])) {
    return;
}

if(strlen($_POST["name"]) > 64 || strlen($_POST["description"]) > 1024) {
    return;
}

$event_id = $_POST["id"];
$event_datetime = $_POST["edate"];
$event_publish_datetime = $_POST["pdate"];
$event_title = $_POST["name"];
$event_description = $_POST["description"];

$mysql->query("USE muhostin_acm");

$stmt = $mysql->prepare("UPDATE events SET date = ?, publish_date = ?, title = ?, description = ? WHERE eventid = ?");
$success = $stmt->bind_param("ssssi", $event_datetime, $event_publish_datetime, $event_title, $event_description, $event_id);

$success = $stmt->execute();

echo $success . "\n";
echo $mysql->error;

$stmt->close();

echo "<meta http-equiv='refresh' content='0; URL=index.php'>";

?>