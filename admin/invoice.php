<?php
require_once $_SERVER['DOCUMENT_ROOT']. "/include/connection.php";
require_once dirname( __FILE__ ) . "/pdf/generate_invoice.php";

if(!isset($_GET['schoolid'])) {
    echo json_encode(array("code" => 400, "message" => "Bad Request", "more_info" => "Please provide a 'schoolid' in your request."));
    exit();
}

$schoolid = $_GET['schoolid'];

$sql = "SELECT school.*, cname," .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='blue') AS blue, " .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='gold') AS gold, " .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='eagle') AS eagle " .
    "FROM school INNER JOIN coach ON school.schoolid = coach.schoolid " .
    "WHERE school.schoolid=$schoolid";
    

$res = $mysql->query($sql);
$data = $res->fetch_assoc();

$invoice = new Invoice($data);
$invoice->Output();
?>