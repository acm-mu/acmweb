<pre>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/connection.php";

function post_get($key, $default) {
    if (array_key_exists($key, $_POST)) 
        return $_POST[$key] != "" ? $_POST[$key] : $default;
    return $default;
}

/*************************************
 *           school table            *
 ************************************/

$sname = $_POST['sname'];

$sql_school = "INSERT INTO school(sname) VALUES ('$sname')";
$mysql->query($sql_school);

$schoolid = $mysql->insert_id;

/*************************************
 *            coach table            *
 ************************************/

$cname = $_POST['cname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$coach_shirt = $_POST['coach_shirt'];

$small = $coach_shirt == "small" ? 1 : 0;
$medium = $coach_shirt == "medium" ? 1 : 0;
$large = $coach_shirt == "large" ? 1 : 0;
$xlarge = $coach_shirt == "xlarge" ? 1 : 0;
$xxlarge = $coach_shirt == "xxlarge" ? 1 : 0;

if(post_get('additional_shirts', "off") == "on") {
    $small += $_POST['additional_small'];
    $medium += $_POST['additional_medium'];
    $large += $_POST['additional_large'];
    $xlarge += $_POST['additional_xlarge'];
    $xxlarge += $_POST['additional_xxlarge'];
}

$sql_coach = "INSERT INTO coach(cname, email, phone, schoolid, small, medium, large, xlarge, xxlarge) VALUES ('$cname', '$email', '$phone', $schoolid, '$small', '$medium', '$large', '$xlarge', '$xxlarge')";
$mysql->query($sql_coach);

/*************************************
 *            team table             *
 ************************************/

$divisions = array("blue", "gold", "eagle");

foreach ($divisions as $division) {
    if (array_key_exists($division."_division", $_POST) && $_POST[$division."_division"] == "on") {
        $n = 0;
        while(true) {
            if (!array_key_exists($division."_".$n, $_POST))
                break;
            $tname = $_POST[$division."_$n"];
            $small = $_POST[$division."_small_$n"];
            $medium = $_POST[$division."_medium_$n"];
            $large = $_POST[$division."_large_$n"];
            $xlarge = $_POST[$division."_xlarge_$n"];
            $xxlarge = $_POST[$division."_xxlarge_$n"];
            
            $sql_team = "INSERT INTO team(tname, division, schoolid, small, medium, large, xlarge, xxlarge) VALUES ('$tname', '$division', $schoolid, $small, $medium, $large, $xlarge, $xxlarge)";
            $mysql->query($sql_team);
            
            $n++;
        }
    }
}

/*************************************
 *          details table            *
 ************************************/

 $eagle_platform = NULL;
 $eagle_devices = 0;

 if (array_key_exists('eagle_division', $_POST) && $_POST['eagle_division'] == "on") {
     $eagle_platform = $_POST['eagle_platform'];
     $eagle_devices = $_POST['eagle_devices'];
 } 

$gold_devices = 0;

if (array_key_exists('gold_division', $_POST) && $_POST['gold_division'] == "on") {
    $gold_devices = $_POST['gold_devices'];
}

$java_eclipse = 0;
$java_netbeans = 0;
$java_bluej = 0;
$java_jgrasp = 0;
$java_notepad = 0;
$java_other = NULL;

if (array_key_exists('blue_division', $_POST) && $_POST['blue_division'] == "on") {
    $java_eclipse = post_get("java_eclipse", "off") == "off" ? 0 : 1;
    $java_netbeans = post_get("java_netbeans", "off") == "off" ? 0 : 1;
    $java_bluej = post_get("java_bluej", "off") == "off" ? 0 : 1;
    $java_jgrasp = post_get("java_jgrasp", "off") == "off" ? 0 : 1;
    $java_other = str_replace('\'', '\\\'', post_get("java_other", NULL));
}

$python_idle = 0;
$python_pycharm = 0;
$python_notepad = 0;
$python_other = NULL;

if (array_key_exists("blue_division", $_POST) && $_POST["blue_division"] == "on") {
    $python_idle = post_get("python_idle", "off") == "off" ? 0 : 1;
    $python_pycharm = post_get("python_pycharm", "off") == "off" ? 0 : 1;
    $python_notepad = post_get("python_notepad", "off") == "off" ? 0 : 1;
    $python_other = str_replace('\'', '\\\'', post_get("python_other", NULL));
}

$accommodations = NULL;
if (array_key_exists("special_accommodations_toggle", $_POST) && $_POST["special_accommodations_toggle"] == "on") {
    $accommodations = str_replace('\'', '\\\'', $_POST["special_accommodations"]);
}

$concerns = $_POST["concerns"];
$csta = post_get("csta_meeting", "off") == "off" ? 0 : 1;
$qa = post_get("qa_panel", "off") == "off" ? 0 : 1;

$sql_details = "INSERT INTO details(eagle_devices, eagle_platform, gold_devices, java_eclipse, java_netbeans, java_bluej, java_jgrasp, java_notepad, java_other, python_idle, python_pycharm, python_notepad, python_other, csta, qa, accommodations, concerns, schoolid) VALUES ($eagle_devices, '$eagle_platform', $gold_devices, $java_eclipse, $java_netbeans, $java_bluej, $java_jgrasp, $java_notepad, '$java_other', $python_idle, $python_pycharm, $python_notepad, '$python_other', $csta, $qa, '$accommodations', '$concerns', $schoolid)";
echo($sql_details);
$mysql->query($sql_details);
?>