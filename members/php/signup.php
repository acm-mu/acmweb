<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";


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

$fname = validate('fname');
$lname = validate('lname');
$email = validate('email') . "@marquette.edu";
$verification_code = get_new_verification_code();

if (!$mysql->query("USE muhostin_acm")) {
  printf("Could not change databases: %s", $mysql->error);
  exit();
}

if ($result = $mysql->query("SELECT * FROM members WHERE email LIKE '%$email%'")) {
  if ($result->num_rows > 0) {
    print("User has already created an account!");
    exit();
  }
}

$sql = "INSERT INTO members(fname, lname, email, vcode) VALUES ('$fname', '$lname', '$email', '$verification_code')";
if(!$mysql->query($sql)) {
  printf("Error message: %s\n", $mysql->error);
  exit();
}
$mid = $mysql->insert_id;

$link = "https://mu.acm.org/members/php/verify_account?mid=$mid&key=$verification_code";

$body = $_POST['fname'] . ", \n" .
        "\n" .
        "Thank you for signing up for a member page.\n" .
        "Finish setting up your page with the following link.\n" .
        "\n" .
        $link;

send_mail($_POST['email'] . "@marquette.edu", "Verify your Marquette ACM Account", $body);
header("Location: confirmation?mid=$mid");
?>