<?php require_once("header.php"); ?>

<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/css/register.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<h1>Register</h1>

<!-- <h3>School Profile</h3>
<label>School Name</label>
<input placeholder="Glenbrook High School">

<label>Coach Name</label>
<input placeholder="Ferris Bueller">

<label>Email Address</label>
<input placeholder="Ferris.Bueller@example.com" type="email">

<label>Password</label>
<input type='password'>

<label>Confirm Password</label>
<input type='password'>

<label>Coach Telephone</label>
<input placeholder="(000) 000-0000">

<label>Coach T-Shirt Size</label>
<select>
    <option>S</option>
    <option>M</option>
    <option>L</option>
    <option>XL</option>
    <option>XXL</option>
</select> -->

<h3>Blue Division</h3>
<label>Are you bringing teams for the Blue (Java/Python) Division?</label>

<label class='switch'>
    <input type='checkbox' id='blue'>
    <span class='slider'></span>
</label>

<table id='blue'>
    <tr class="prototype">
        <td><button class='del'>-</button></td>
        <td> <input placeholder='First Name'></td>
        <td><input placeholder='Last Name'> </td>
        <td>
            <select class='custom-select'>
                <option style='color: #ddd !important'>Shirt Size</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>X-Large</option>
                <option>XX-Large</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><button class='add'>+</button></td>
    </tr>
</table>

<h3>Gold Division</h3>
<label>Are you bringing teams for the Gold (Scratch) Division?</label>

<label class='switch'>
    <input type='checkbox' id='gold'>
    <span class='slider'></span>
</label>

<table id='gold'>
    <tr class="prototype">
        <td><button class='del'>-</button></td>
        <td> <input placeholder='First Name'></td>
        <td><input placeholder='Last Name'> </td>
        <td>
            <select class='custom-select'>
                <option style='color: #ddd !important'>Shirt Size</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>X-Large</option>
                <option>XX-Large</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><button class='add'>+</button></td>
    </tr>
</table>

<h3>Eagle Division</h3>
<label>Are you bringing teams for the Eagle Division?</label>

<label class='switch'>
    <input type='checkbox' id='eagle'>
    <span class='slider'></span>
</label>

<table id='eagle'>
    <tr class="prototype">
        <td><button class='del'>-</button></td>
        <td> <input placeholder='First Name'></td>
        <td><input placeholder='Last Name'> </td>
        <td>
            <select class='custom-select'>
                <option style='color: #ddd !important'>Shirt Size</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>X-Large</option>
                <option>XX-Large</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><button class='add'>+</button></td>
    </tr>
</table>

</form>
<?php require_once("footer.php"); ?>

<script>
$(document).ready(function() {
    $(document).on('click', '.add', function() {
        var table = $(this).closest('table')
        var tr = table.find('tr.prototype')

        var newTr = tr.clone()
        newTr.removeClass("prototype")
        newTr.insertBefore($('.add').closest('tr'))
    })

    $(document).on('click', "input[type='checkbox']", function() {
        var id = $(this).attr('id')
        var table = $('table#' + id)
        table.css('display', $(this).prop('checked') ? 'block' : 'none')
    })

    $(document).on('click', '.del', function() {
        $(this).closest('tr').remove()
    })
})
</script>