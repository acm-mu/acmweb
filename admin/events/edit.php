<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>
<?php date_default_timezone_set("America/Chicago"); ?>

<?php
    $id = $_GET['id'];

    $mysql->query("USE muhostin_acm");

    $stmt = $mysql->prepare("SELECT * FROM events where eventid = ?");
    $success = $stmt->bind_param("i", $id);
    if(!$success) {
        echo "<h1>Could not find an event with the given ID!</h1>";
        $stmt->close();
        return; 
    }

    $success = $stmt->execute();
    if(!$success) {
        echo "<h1>Could not find an event with the given ID!</h1>";
        $stmt->close();
        return; 
    }

    $result = $stmt->get_result();

    

    $event = $result->fetch_assoc();

    if(!$success) {
        echo "<h1>Could not find an event with the given ID!</h1>";
        $stmt->close();
        return; 
    }

    $event_name = $event["title"];

    echo "<h1>Editing: $event_name</h1>";

    $stmt->close();

?>

<div>

</div>