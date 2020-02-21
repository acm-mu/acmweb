<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; 
?>


<h3>Student Shirts</h3>
<div class="ui statistics" id="students">
    <div class="statistic">
        <div class="label">Small</div>
        <div class="value small">0</div>
    </div>
    <div class="statistic">
        <div class="label">Medium</div>
        <div class="value medium">0</div>
    </div>
    <div class="statistic">
        <div class="label">Large</div>
        <div class="value large">0</div>
    </div>
    <div class="statistic">
        <div class="label">X-Large</div>
        <div class="value xlarge">0</div>
    </div>
    <div class="statistic">
        <div class="label">XX-Large</div>
        <div class="value xxlarge">0</div>
    </div>
</div>

<h3>Coach Shirts</h3>
<div class="ui statistics" id="coaches">
    <div class="statistic">
        <div class="label">Small</div>
        <div class="value small">0</div>
    </div>
    <div class="statistic">
        <div class="label">Medium</div>
        <div class="value medium">0</div>
    </div>
    <div class="statistic">
        <div class="label">Large</div>
        <div class="value large">0</div>
    </div>
    <div class="statistic">
        <div class="label">X-Large</div>
        <div class="value xlarge">0</div>
    </div>
    <div class="statistic">
        <div class="label">XX-Large</div>
        <div class="value xxlarge">0</div>
    </div>
</div>


<script>
$(document).ready(function() {
    updateShirts()
})


function updateShirts() {

    $.ajax('api/schools', {
        success: function(data) {
            var jsonData = JSON.parse(data)
            if (jsonData.length == 0) {
                error("No Results!")
                return
            }

            var shirts = {
                'students': {},
                'coaches': {}
            }

            const sizes = ['small', 'medium', 'large', 'xlarge', 'xxlarge']
            for (const shirt of sizes) {
                shirts['students'][shirt] = 0;
                shirts['coaches'][shirt] = 0;
            }

            for (const school of jsonData) {
                for (const size in shirts['coaches']) {
                    shirts['coaches'][size] += school[size]
                }
                for (const team of school.teams) {
                    for (const size in shirts['students']) {
                        shirts['students'][size] += team[size]
                    }
                }
            }

            for (const size of sizes) {
                $(`#students .${size}`).html(shirts['students'][size])
                $(`#coaches .${size}`).html(shirts['coaches'][size])
            }
        },
        error: function() {
            error("An Error Has Occurred!")
        }
    })
}
</script>