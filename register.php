<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>

<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/css/form.css?<?php echo date('l jS \of F Y h:i:s A');?>">
<script src="/js/register.js"></script>

<form>
    <h1>2020 Wisconsin-Dairyland Programming Competition Registration</h1>

    <!----------------------------------
    -         SCHOOL INFORMATION       -
    ------------------------------------>
    <div>
        <h2>School Information</h2>
        <label>School Name</label>
        <input required>

        <label>Coach Name</label>
        <input required>

        <label>Email Address</label>
        <input name="email" type="email" required>

        <label>Password</label>
        <input name="password" type='password' required>

        <label>Confirm Password</label>
        <input name="confirm-password" type='password' required>

        <label>Coach Telephone</label>
        <input name="phone" type="tel" required>

        <label>Coach T-Shirt Size</label>
        <select name="coach-shirt" class='custom-select'>
            <option disabled="" selected="" value="">Shirt Size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
            <option value="x-large">X-Large</option>
            <option value="xx-large">XX-Large</option>
        </select>

        <h4>Team Attendance</h4>
        <p style="font-size:14px; line-height: 22px;">The competition has three divisions. Per school, we are accepting
            up to 8 teams in the Blue Division (Java/Python), 8 teams in the Gold Division (Scratch), and 3 teams in the
            Eagle Division (a competition based on concepts in AP Computer Science Principles), as we are limited by
            competition space availability. We may further restrict this limit as registration continues, if a large
            volume of schools register to attend. We will finalize the number of teams your school can bring by March
            14th, 2019.

            Registration cost for the Blue Division (Java/Python) is $80 per team, cost for the Gold Division (Scratch)
            is $60 per team, and $60 per team for the Eagle Division (AP CSP).
        </p>

        <label class="checkbox-container">I Agree
            <input name="team-attendance" type="checkbox">
            <span class="checkmark">
        </label>
    </div>

    <!----------------------------------
    -          TEAM INFORMATION        -
    ------------------------------------>
    <div>
        <h2>Team Information</h2>

        <h3>Blue Division</h3>
        <label>Are you bringing teams for the Blue (Java/Python) Division?</label>

        <label class='switch'>
            <input name="blue" type='checkbox' id='blue'>
            <span class='slider'></span>
        </label>
        <div class="form-section" id="blue-section">
            <table class="teams" id='blue'>
                <tr>
                    <td><button type="button" class='add'>+</button></td>
                </tr>
            </table>
        </div>

        <h3>Gold Division</h3>
        <label>Are you bringing teams for the Gold (Scratch) Division?</label>

        <label class='switch'>
            <input name="gold" type='checkbox' id='gold'>
            <span class='slider'></span>
        </label>
        <div class="form-section" id="gold-section">
            <table class="teams" id='gold'>
                <tr>
                    <td><button type="button" class='add'>+</button></td>
                </tr>
            </table>
        </div>

        <h3>Eagle Division</h3>
        <label>Are you bringing teams for the Eagle Division?</label>

        <label class='switch'>
            <input name="eagle" type='checkbox' id='eagle'>
            <span class='slider'></span>
        </label>
        <div class="form-section" id="eagle-section">
            <table class="teams" id='eagle'>
                <tr>
                    <td><button type="button" class='add'>+</button></td>
                </tr>
            </table>
        </div>
    </div>
</form>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>