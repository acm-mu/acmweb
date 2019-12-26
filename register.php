<?php require_once("header.php"); ?>

<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/css/register.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<h1>Register</h1>

<h3>School Information</h3>
<label>Email Address</label>
<input placeholder="Ferris.Bueller@example.com" type="email">

<label>School Name</label>
<input placeholder="Glenbrook High School">

<label>Coach Name</label>
<input placeholder="Ferris Bueller">

<label>Coach Telephone</label>
<input placeholder="(000) 000-0000">

<label>Coach T-Shirt Size</label>
<select>
    <option>S</option>
    <option>M</option>
    <option>L</option>
    <option>XL</option>
    <option>XXL</option>
</select>

<h3>Blue Division</h3>
<label>Are you bringing teams for the Blue (Java/Python) Division?</label>

<h3>Gold Division</h3>
<label>Are you bringing teams for the Gold (Scratch) Division?</label>

<h3>Eagle Division</h3>
<label>Are you bringing teams for the Eagle Division?</label>

</form>
<?php require_once("footer.php"); ?>