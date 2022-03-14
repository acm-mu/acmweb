<?php
require_once $_SERVER['DOCUMENT_ROOT']. "/include/mysql.php";
require_once dirname( __FILE__ ) . "/pdf/generate_invoice.php";

if(!isset($_GET['schoolid'])) {
    echo json_encode(array("code" => 400, "message" => "Bad Request", "more_info" => "Please provide a 'schoolid' in your request."));
    exit();
}
$mysql->query("USE muhostin_registration;");

$schoolid = $_GET['schoolid'];

$sql = "SELECT school.*, cname," .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='blue' AND format='in-person') AS blue_inperson, " .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='gold' AND format='in-person') AS gold_inperson, " .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='eagle' AND format='in-person') AS eagle_inperson, " .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='blue' AND format='virtual') AS blue_virtual, " .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='gold' AND format='virtual') AS gold_virtual, " .
    "(SELECT COUNT(*) FROM team WHERE schoolid = school.schoolid AND division='eagle' AND format='virtual') AS eagle_virtual " .
    "FROM school INNER JOIN coach ON school.schoolid = coach.schoolid " .
    "WHERE school.schoolid=$schoolid";


$res = $mysql->query($sql);
$data = $res->fetch_assoc();

$invoice = new Invoice($data);
$invoice->Output('I', $data['sname'].".pdf");
?>