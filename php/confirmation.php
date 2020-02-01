<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>
<link rel="stylesheet" type="text/css" href="/css/confirmation.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<h1 class="title" page="confirmation">Thank You!</h1>

<p>Thank you for registering, [name]! We can't wait to have you and your students here at Marquette on <b>April 16th</b>!</p>
<h2>Confirmation Details</h2>
<p>Here are your confirmation details:</p>
<table id="conf">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>School</th>
    <th>Total Number of Teams</th>
</tr>
<tr>
    <td>Dennis Brylow</td>
    <td>brylow@cs.mu.edu</td>
    <td>Marquette University</td>
    <td>4</td>
</tr>
</table>
<p>Something look wrong? <a href="mailto:acm-officers@mscs.mu.edu?subject=Incorrect Registration">Let us know!</a></p>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>