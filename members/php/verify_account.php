<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";

if(!$mysql->query("USE muhostin_acm")) {
  print("Could not switch databases!");
  exit();
}

$action = isset($_POST['mid']) ? 'update' : 'verify';
$mid = $_GET['mid'] or die("Missing mid value.");
$key = $_GET['key'];

if ($action == 'update') {

  $password = md5($_POST['password']);
  $cpassword = md5($_POST['confirm_password']);
  
  if ($password !== $cpassword) {
    header("Location: verify_account?mid=$mid&key=$key&error_msg=" . urlencode("Passwords do not match!"));
  }

  $class = $_POST['class'];
  $majors = $_POST['majors'];
  $minors = $_POST['minors'];

  $sql = "UPDATE members SET class='$class', password='$password', vcode=NULL, status=1 WHERE mid=$mid";
  if(!$mysql->query($sql)) {
    printf("Could not change databases: %s", $mysql->error);
    exit();
  }

  $majors = array_map('trim', explode(",", $majors)); // Seperate by ',' and remove whitespace.

  foreach ($majors as $major) {
    if(!$mysql->query("INSERT INTO member_degree (mid, type, value) VALUES ('$mid', 'major', '$major')")) {
      printf("Could not change databases: %s", $mysql->error);  
      exit();
    }
  }

  if (isset($minors) && !empty($minors)) { // Only if it is not blank.
    $minors = array_map('trim', explode(",", $minors)); // Seperate by ',' and remove whitespace.
    foreach ($minors as $minor) {
      if(!$mysql->query("INSERT INTO member_degree (mid, type, value) VALUES ('$mid', 'minor', '$minor')")) {
        printf("Could not change databases: %s", $mysql->error);
        exit();
      }
    }
  }

  header("Location: ../me?mid=$mid");
}

$res = $mysql->query("SELECT * FROM members WHERE mid=$mid");
$row = $res->fetch_assoc();

if($row['vcode'] != $key) {
  print("Invalid verification code!");
  exit();
}

$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];

require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";

?>

<link rel='stylesheet' type='text/css' href='/css/form.css'>
<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/message.min.css'>

<h1 class='title'>Lets finish setting up your account...</h1>

<?php 
  if (isset($_GET['error_msg'])) {
    $error_msg = $_GET['error_msg'];
    echo "<div class='ui negative message'> <div class='header'>An error occurred!</div><p>$error_msg</p></div>";
  }
?>

<p><b>Name:</b> <?php echo "$fname $lname"; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>

<form action="" method="POST">

  <input type="hidden" name="mid" value="<?php echo $mid; ?>">
  <input type="hidden" name="key" value="<?php echo $key; ?>">

  <label>Password <b class="req">*</b></label>
  <input type="password" name="password" required>

  <label>Confirm Password <b class="req">*</b></label>
  <input type="password" name="confirm_password" required>


  <label>Class <b class="req">*</b></label>
    <select name="class" class="custom-select" required>
      <option disabled="" selected="" value="">Select Class</option>
      <?php

          $year = date("Y");
          $semester = date("m") > 5 ? "Fall" : "Spring";

          $senior = $year;
          $junior = $year + 1;
          $sophmore = $year + 2;
          $freshman = $year + 3;

          if ($semester == "Fall") {
            $senior++;
            $junior++;
            $sophmore++;
            $freshman++;
          }

          echo "<option value='$freshman'>Freshman - Class of $freshman</option>";
          echo "<option value='$sophmore'>Sophmore - Class of $sophmore</option>";
          echo "<option value='$junior'>Junior - Class of $junior</option>";
          echo "<option value='$senior'>Senior - Class of $senior</option>";
      ?>
      <option value='0000'>Graduate</option>
    </select>

    <label>Major(s) <b class="req">*</b></label>
    <label class="sub"><b>Note:</b> If you have more than one major, please comma-seperate your majors.</label>
    <input name="majors" required>

    <label>Minor(s)</label>
    <label class="sub"><b>Note:</b> If you have more than one minor, please comma-seperate your minors. If you don't have a minor, leave blank.</label>
    <input name="minors">

    <br />
    <br />

    <input type="submit" value="Finish">
</form>

