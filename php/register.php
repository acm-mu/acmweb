<pre>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/connection.php";

function post_get($key, $default) {
    if (array_key_exists($key, $_POST)) 
        return $_POST[$key] != "" ? $_POST[$key] : $default;
    return $default;
}

function validate($key) {
    if (isset($_POST[$key]))
        return addslashes($_POST[$key]);
    exit();
}

/*************************************
 *           school table            *
 ************************************/

$sname = validate('sname');
$saddl1 = validate('saddl1');
$saddl2 = validate('saddl2');
$scity = validate('scity');
$sstate = "WI";
$szip = validate('szip');
$ip = $_SERVER['REMOTE_ADDR'];

$sql_school = "INSERT INTO school(sname, saddl1, saddl2, scity, sstate, szip, ip) VALUES ('$sname', '$saddl1', '$saddl2', '$scity', '$sstate', '$szip', INET_ATON('$ip'))";
$mysql->query($sql_school);

$schoolid = $mysql->insert_id;

/*************************************
 *           invoice table            *
 ************************************/

 $sql_invoice = "INSERT INTO invoice(schoolid) VALUES ('$schoolid')";
 $mysql->query($sql_invoice);

/*************************************
 *            coach table            *
 ************************************/

$cname = validate('cname');
$email = validate('email');
$phone = validate('phone');

$coach_shirt = validate('coach_shirt');

$small = $coach_shirt == "small" ? 1 : 0;
$medium = $coach_shirt == "medium" ? 1 : 0;
$large = $coach_shirt == "large" ? 1 : 0;
$xlarge = $coach_shirt == "xlarge" ? 1 : 0;
$xxlarge = $coach_shirt == "xxlarge" ? 1 : 0;

if(post_get('additional_shirts', "off") == "on") {
    $small += post_get('additional_small', 0);
    $medium += post_get('additional_medium', 0);
    $large += post_get('additional_large', 0);
    $xlarge += post_get('additional_xlarge', 0);
    $xxlarge += post_get('additional_xxlarge', 0);
}

$sql_coach = "INSERT INTO coach(cname, email, phone, schoolid, small, medium, large, xlarge, xxlarge) VALUES ('$cname', '$email', '$phone', $schoolid, '$small', '$medium', '$large', '$xlarge', '$xxlarge')";
$mysql->query($sql_coach);

/*************************************
 *            team table             *
 ************************************/

$divisions = array("blue", "gold", "eagle");

$teamcount = 0;

foreach ($divisions as $division) {
    if (array_key_exists($division."_division", $_POST) && $_POST[$division."_division"] == "on") {
        $n = 0;
        while(true) {
            if (!array_key_exists($division."_".$n, $_POST))
                break;
            $tname = addslashes(post_get($division."_$n", NULL));
            $small = post_get($division."_small_$n", 0);
            $medium = post_get($division."_medium_$n", 0);
            $large = post_get($division."_large_$n", 0);
            $xlarge = post_get($division."_xlarge_$n", 0);
            $xxlarge = post_get($division."_xxlarge_$n", 0);
            
            $sql_team = "INSERT INTO team(tname, division, schoolid, small, medium, large, xlarge, xxlarge) VALUES ('$tname', '$division', $schoolid, $small, $medium, $large, $xlarge, $xxlarge)";
            $mysql->query($sql_team);
            
            $n++;
            $teamcount++;
        }
    }
}

/*************************************
 *          details table            *
 ************************************/

 $eagle = 0; // False
 $eagle_platform = NULL;
 $eagle_devices = 0;

 if (array_key_exists('eagle_division', $_POST) && $_POST['eagle_division'] == "on") {
     $eagle = 1; // True
     $eagle_platform = addslashes(post_get('eagle_platform', NULL));
     $eagle_devices = addslashes(post_get('eagle_devices', 0));
 } 

 $gold = 0; // False
$gold_devices = 0;

if (array_key_exists('gold_division', $_POST) && $_POST['gold_division'] == "on") {
    $gold = 1; // True
    $gold_devices = post_get('gold_devices', 0);
}

$blue = 0; // False
$java_eclipse = 0;
$java_netbeans = 0;
$java_bluej = 0;
$java_jgrasp = 0;
$java_notepad = 0;
$java_other = NULL;

if (array_key_exists('blue_division', $_POST) && $_POST['blue_division'] == "on") {
    $blue = 1; // True
    $java_eclipse = post_get("java_eclipse", "off") == "off" ? 0 : 1;
    $java_netbeans = post_get("java_netbeans", "off") == "off" ? 0 : 1;
    $java_bluej = post_get("java_bluej", "off") == "off" ? 0 : 1;
    $java_jgrasp = post_get("java_jgrasp", "off") == "off" ? 0 : 1;
    $java_other = addslashes(post_get("java_other", NULL));
}

$python_idle = 0;
$python_pycharm = 0;
$python_notepad = 0;
$python_other = NULL;

if (array_key_exists("blue_division", $_POST) && $_POST["blue_division"] == "on") {
    $blue = 1; // True
    $python_idle = post_get("python_idle", "off") == "off" ? 0 : 1;
    $python_pycharm = post_get("python_pycharm", "off") == "off" ? 0 : 1;
    $python_notepad = post_get("python_notepad", "off") == "off" ? 0 : 1;
    $python_other = addslashes(post_get("python_other", NULL));
}

$accommodations = NULL;
if (array_key_exists("special_accommodations_toggle", $_POST) && $_POST["special_accommodations_toggle"] == "on") {
    $accommodations = addslashes(post_get("special_accommodations", NULL));
}

$concerns = validate("concerns");

$sql_details = "INSERT INTO details(eagle, eagle_devices, eagle_platform, gold, gold_devices, blue, java_eclipse, java_netbeans, java_bluej, java_jgrasp, java_notepad, java_other, python_idle, python_pycharm, python_notepad, python_other, accommodations, concerns, schoolid) VALUES ($eagle, $eagle_devices, '$eagle_platform', $gold, $gold_devices, $blue, $java_eclipse, $java_netbeans, $java_bluej, $java_jgrasp, $java_notepad, '$java_other', $python_idle, $python_pycharm, $python_notepad, '$python_other', '$accommodations', '$concerns', $schoolid)";

$mysql->query($sql_details);

header("Location: confirmation.php?schoolid=$schoolid");
?>