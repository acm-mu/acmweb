<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>

<link rel="stylesheet" type="text/css" href="/css/form.css">
<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/message.min.css'>

<h1 class="title" page="Members">Members - Sign Up</h1>

<form action="/members/php/signup.php" method="POST" id="registerform">

<?php 
  if (isset($_GET['error_msg'])) {
    $error_msg = $_GET['error_msg'];
    echo "<div class='ui negative message'> <div class='header'>An error occurred!</div><p>$error_msg</p></div>";
  }
?>

  <p>To create a member page, please fill out this form and we will send you a verification email to ensure you are a Marquette student. Once you have verified your email address, you will be able to design your page.</p>

  <div class="input-group">
    <label>First Name</label>
    <input name="fname" required>
  </div>

  <div class="input-group">
    <label>Last Name</label>
    <input name="lname" required>
  </div>

  <div class="input-group">
    <label>Marquette Email Address</label>
    <div class='input-group'>
      <input name="email" required style='text-align:right'>
      @marquette.edu
    </div>
  </div>

  <br/> <br/>

  <input type='submit' value="Create Page">
</form>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>
