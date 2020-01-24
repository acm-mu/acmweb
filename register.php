<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>

<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/css/form.css?<?php echo date("l jS \of F Y h:i:s A");?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="/js/form.js"></script>

<form action="/php/register.php" method="POST">
    <h1>2020 Wisconsin-Dairyland Programming Competition Registration</h1>

    <!----------------------------------
    -         SCHOOL INFORMATION       -
    ------------------------------------>
    <div>
        <h2>School Information</h2>
        <p>We are taking a different approach to invoicing this year to help expedite the registration process! This
            information will be used on your auto-generated invoice.
            <div class="input-group">
                <label>School Name<b class="req">*</b></label>
                <input name="sname" class="double" required>
            </div>

            <div class="input-group">
                <label>School Address Line 1<b class="req">*</b></label>
                <input name="saddl1" class="double" required>
            </div>

            <div class="input-group">
                <label>School Address Line 2</label>
                <input name="saddl2" class="double">
            </div>

            <span class='one-line'>
                <div class="input-group">
                    <label>School City<b class="req">*</b></label>
                    <input name="scity" required>
                </div>

                <div class="input-group">
                    <label>School State<b class="req">*</b></label>
                    <input name="sstate" value="WI" disabled required>
                </div>

                <div class="input-group">
                    <label>School Zip Code<b class="req">*</b></label>
                    <input name="szip" type="number" required>
                </div>
            </span>

            <h2>Coach Information</h2>
            <div class="input-group">
                <label>Coach Name<b class="req">*</b></label>
                <input name="cname" required>
            </div>

            <div class="input-group">
                <label>Email Address<b class="req">*</b></label>
                <input name="email" type="email" class="double" required>
            </div>

            <div class="input-group">
                <label>Coach Telephone<b class="req">*</b></label>
                <input id="phone" name="phone" type="tel" required>
            </div>

            <div class="input-group">
                <label>Coach T-Shirt Size<b class="req">*</b></label>
                <select name="coach_shirt" class="custom-select" required>
                    <option disabled="" selected="" value="">Shirt Size</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="xlarge">X-Large</option>
                    <option value="xxlarge">XX-Large</option>
                </select>
            </div>

            <div class="input-group">
                <label>Do you need any additional t-shirts for chaperones?</label>
                <label class="switch">
                    <input name="additional_shirts" type="checkbox" data-toggle="additional-shirts-section">
                    <span class="slider"></span>
                </label>
            </div>

            <div class="form-hidden-section" id="additional-shirts-section">
                <table class="form-table">
                    <thead>
                        <tr>
                            <th>Small</th>
                            <th>Medium</th>
                            <th>Large</th>
                            <th>X-Large</th>
                            <th>XX-Large</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" value="0" min="0" name="additional_small"></td>
                            <td><input type="number" value="0" min="0" name="additional_medium"></td>
                            <td><input type="number" value="0" min="0" name="additional_large"></td>
                            <td><input type="number" value="0" min="0" name="additional_xlarge"></td>
                            <td><input type="number" value="0" min="0" name="additional_xxlarge"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>

    <!----------------------------------
    -          TEAM INFORMATION        -
    ----------------------------------->
    <!--         BLUE DIVISION       -->
    <div>
        <h2>Team Information</h2>

        <h4>Team Attendance<b class="req">*</b></h4>
        <p>The competition has three divisions. Per school, we are accepting
            up to 8 teams in the Blue Division (Java/Python), 8 teams in the Gold Division (Scratch), and 3 teams in
            the
            Eagle Division (a competition based on concepts in AP Computer Science Principles), as we are limited by
            competition space availability. We may further restrict this limit as registration continues, if a large
            volume of schools register to attend. We will finalize the number of teams your school can bring by
            March
            14th, 2019.

            Registration cost for the Blue Division (Java/Python) is $80 per team, cost for the Gold Division
            (Scratch)
            is $60 per team, and $60 per team for the Eagle Division (AP CSP).
        </p>

        <label class="checkbox-container">I Agree
            <input name="team_attendance" type="checkbox" data-toggle="post-terms-section" required>
            <span class="checkmark">
        </label>

        <div class="form-hidden-section" id="post-terms-section">
            <h4>Blue Division</h4>

            <label>Are you bringing teams for the Blue (Java/Python) Division?</label>
            <label class="switch">
                <input name="blue_division" type="checkbox" data-toggle="blue-section">
                <span class="slider"></span>
            </label>

            <div class="form-hidden-section" id="blue-section">
                <label>Preferred Java Environments</label>
                <label class="checkbox-container">Eclipse
                    <input name="java_eclipse" type="checkbox">
                    <span class="checkmark">
                </label>
                <label class="checkbox-container">NetBeans
                    <input name="java_netbeans" type="checkbox">
                    <span class="checkmark">
                </label>
                <label class="checkbox-container">BlueJ
                    <input name="java_bluej" type="checkbox">
                    <span class="checkmark">
                </label>
                <label class="checkbox-container">JGrasp
                    <input name="java_jgrasp" type="checkbox">
                    <span class="checkmark">
                </label>
                <label class="checkbox-container">Notepad / Notepad++ and JDK CLI
                    <input name="java_notepad" type="checkbox">
                    <span class="checkmark">
                </label>
                <input name="java_other" placeholder="Other">

                <label>Preferred Python Environments</label>
                <label class="checkbox-container">IDLE
                    <input name="python_idle" type="checkbox">
                    <span class="checkmark">
                </label>
                <label class="checkbox-container">PyCharm
                    <input name="python_pycharm" type="checkbox">
                    <span class="checkmark">
                </label>
                <label class="checkbox-container">Notepad / Notepad++ and Python CLI
                    <input name="python_notepad" type="checkbox">
                    <span class="checkmark">
                </label>
                <input name="python_other" placeholder="Other">

                <label>Teams</label>
                <table class="form-table" division="blue">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Team Name</th>
                            <th>Small Shirts</th>
                            <th>Medium Shirts</th>
                            <th>Large Shirts</th>
                            <th>X-Large Shirts</th>
                            <th>XX-Large Shirts</th>
                    </thead>
                    <tbody>
                        <tr class='row' id="row_0">
                            <td><button type="button" class="del">-</button></td>
                            <td><input class='name' name='blue_0'></td>
                            <td><input type='number' class='small' value="0" min="0" name='blue_small_0'></td>
                            <td><input type='number' class='medium' value="0" min="0" name='blue_medium_0'></td>
                            <td><input type='number' class='large' value="0" min="0" name='blue_large_0'></td>
                            <td><input type='number' class='xlarge' value="0" min="0" name='blue_xlarge_0'></td>
                            <td><input type='number' class='xxlarge' value="0" min="0" name='blue_xxlarge_0'></td>
                        </tr>
                        <tr>
                            <td><button type="button" class="add">+</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--         GOLD DIVISION       -->
            <h4>Gold Division</h4>
            <label>Are you bringing teams for the Gold (Scratch) Division?</label>

            <label class="switch">
                <input name="gold_division" type="checkbox" data-toggle="gold-section">
                <span class="slider"></span>
            </label>
            <div class="form-hidden-section" id="gold-section">
                <label>How many devices can you bring?</label>
                <input name="gold_devices" type="number" min="0" value="0">

                <label>Teams</label>
                <table class="form-table" division="gold">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Team Name</th>
                            <th>Small Shirts</th>
                            <th>Medium Shirts</th>
                            <th>Large Shirts</th>
                            <th>X-Large Shirts</th>
                            <th>XX-Large Shirts</th>
                    </thead>
                    <tbody>
                        <tr class='row' id="row_0">
                            <td><button type="button" class="del">-</button></td>
                            <td><input class='name' name='gold_0'></td>
                            <td><input type='number' class='small' value="0" min="0" name='gold_small_0'></td>
                            <td><input type='number' class='medium' value="0" min="0" name='gold_medium_0'></td>
                            <td><input type='number' class='large' value="0" min="0" name='gold_large_0'></td>
                            <td><input type='number' class='xlarge' value="0" min="0" name='gold_xlarge_0'></td>
                            <td><input type='number' class='xxlarge' value="0" min="0" name='gold_xxlarge_0'></td>
                        </tr>
                        <tr>
                            <td><button type="button" class="add">+</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--         EAGLE DIVISION       -->
            <h4>Eagle Division</h4>
            <label>Are you bringing teams for the Eagle Division?</label>

            <label class="switch">
                <input name="eagle_division" type="checkbox" data-toggle="eagle-section">
                <span class="slider"></span>
            </label>
            <div class="form-hidden-section" id="eagle-section">
                <label>Describe the platform you use for your AP CSP class.</label>
                <input name="eagle_platform" type="text" style="width: 50em">

                <label>How many devices can you bring?</label>
                <input name="eagle_devices" type="number" value="0" min="0">

                <label>Teams</label>
                <table class="form-table" division="eagle">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Team Name</th>
                            <th>Small Shirts</th>
                            <th>Medium Shirts</th>
                            <th>Large Shirts</th>
                            <th>X-Large Shirts</th>
                            <th>XX-Large Shirts</th>
                    </thead>
                    <tbody>
                        <tr class='row' id="row_0">
                            <td><button type="button" class="del">-</button></td>
                            <td><input class='name' name='blue_0'></td>
                            <td><input type='number' class='small' value="0" min="0" name='eagle_small_0'></td>
                            <td><input type='number' class='medium' value="0" min="0" name='eagle_medium_0'></td>
                            <td><input type='number' class='large' value="0" min="0" name='eagle_large_0'></td>
                            <td><input type='number' class='xlarge' value="0" min="0" name='eagle_xlarge_0'></td>
                            <td><input type='number' class='xxlarge' value="0" min="0" name='eagle_xxlarge_0'></td>
                        </tr>
                        <tr>
                            <td><button type="button" class="add">+</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2>Additional Information</h2>

            <h4>Will any attending student require special accommodations due to a disability, a food allergy, or
                another
                medical condition?</h4>
            <label>If you answer Yes, please list them below and we will contact you to coordinate the details
                of accommodating these students closer to the competition.</label>

            <label class="switch">
                <input name="special_accommodations_toggle" type="checkbox" data-toggle="accommodations-section">
                <span class="slider"></span>
            </label>
            <div class="form-hidden-section" id="accommodations-section">
                <textarea name="special_accommodations"></textarea>
            </div>

            <h4>Are you interested in any of the following activities?</h4>
            <label class="checkbox-container">CSTA Chapter Meeting for coaches mid-morning, while teams compete
                <input name="csta_meeting" type="checkbox">
                <span class="checkmark">
            </label>
            <label class="checkbox-container">Q/A panel session with current CS majors
                <input name="qa_panel" type="checkbox">
                <span class="checkmark">
            </label>

            <h4>Any additional questions/concerns/comments?</h4>
            <textarea name="concerns"></textarea>
            <br>
            <input type="submit" value="Register" disabled>
        </div>
    </div>
</form>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/include/footer.php"; ?>