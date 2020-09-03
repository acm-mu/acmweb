<?php require_once "include/header.php"; ?>


<h4 class="ui header">Student Shirts</h4>
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

<script defer>
    document.addEventListener('DOMContentLoaded', () => {
        fetch('api/schools')
            .then(response => response.json())
            .then(data => {
                if (!data) {
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

                for (const school of data) {
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
                    document.querySelector(`#students .${size}`).innerText = shirts['students'][size];
                    document.querySelector(`#coaches .${size}`).innerText = shirts['coaches'][size];
                }
            })
            .catch(error_msg => error("An Error Has Occurred!", error_msg));
    });
</script>