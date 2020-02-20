<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";
?>

<link rel="stylesheet" type="text/css" href="/admin/css/adminconsole.css?<?php echo date('l jS \of F Y h:i:s A');?>">
<link rel='stylesheet' type='text/css' href='/css/form.css?<?php echo date('l jS \of F Y h:i:s A');?>'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="/admin/js/adminconsole.js?<?php echo date('l jS \of F Y h:i:s A');?>"></script>

<?php
if (!loggedin()) {
    require_once "login.php";
    exit();
}
?>
<div class="ui grid">
    <div class="three wide column">
        <div class="ui horizontal tiny statistics">
            <a>
                <div class="statistic">
                    <div class="value" id="schools">0</div>
                    <div class="label">Schools</div>
                </div>
            </a><a>
                <div class="statistic">
                    <div class="value" id="coaches">0</div>
                    <div class="label">Coaches</div>
                </div>
            </a>
        </div>
    </div>
    <div class="three wide column">
        <div class="ui horizontal tiny statistics">
            <a>
                <div class="statistic">
                    <div class="value" id="teams">0</div>
                    <div class="label">Teams</div>
                </div>
            </a>
            <a>
                <div class="statistic">
                    <div class="value" id="students">0</div>
                    <div class="label">Students</div>
                </div>
            </a>
        </div>
    </div>
    <div class="three wide column">
        <div class="ui horizontal tiny statistics">
            <a href='/admin/teams?division=blue'>
                <div class="blue statistic">
                    <div class="value" id="blue_teams">0</div>
                    <div class="label">Teams</div>
                </div>
            </a>
            <a>
                <div class="blue statistic">
                    <div class="value" id="blue_students">0</div>
                    <div class="label">Students</div>
                </div>
            </a>
        </div>
    </div>
    <div class="three wide column">
        <div class="ui horizontal tiny statistics">
            <a href='/admin/teams?division=gold'>
                <div class="yellow statistic">
                    <div class="value" id="gold_teams">0</div>
                    <div class="label">Teams</div>
                </div>
            </a>
            <a>
                <div class="yellow statistic">
                    <div class="value" id="gold_students">0</div>
                    <div class="label">Students</div>
                </div>
            </a>
        </div>
    </div>

    <div class="three wide column">
        <div class="ui horizontal tiny statistics">
            <a href='/admin/teams?division=eagle'>
                <div class="teal statistic">
                    <div class="value" id="eagle_teams">0</div>
                    <div class="label">Teams</div>
                </div>
            </a>
            <a>
                <div class="teal statistic">
                    <div class="value" id="eagle_students">0</div>
                    <div class="label">Students</div>
                </div>
            </a>
        </div>
    </div>
</div>


<div class="ui pointing menu" id="admin_navbar">
    <a class="item" id="index_nav" href="/admin/">
        Feed
    </a>
    <a class="item" id="teams_nav" href="/admin/teams">
        Teams
    </a>
    <a class="item" id="schools_nav" href="/admin/schools">
        Schools
    </a>
    <div class="right menu">
        <div class="item">
            <form class="ui transparent icon input" action="/admin/search.php" method="GET">
                <input name="search" type="text" placeholder="Search..."
                    value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>">
                <i class="search link icon"></i>
            </form>
        </div>
    </div>
</div>

<script>
function statistic(label, html, color) {
    return $("<div/>").addClass("ui small statistic " + color).append(
        $("<div/>", {
            class: "label",
            html: label
        }),
        $("<div/>", {
            class: "value",
            html: html
        })
    )
}

function fillStatistics(data) {
    var nstudents = {
        'total': 0,
        'blue': 0,
        'gold': 0,
        'eagle': 0
    }
    var teams = {
        'total': 0,
        'blue': 0,
        'gold': 0,
        'eagle': 0
    }
    var coaches = 0

    for (const school of data) {
        coaches += school.small + school.medium + school.large + school.xlarge + school.xxlarge
        for (const team of school.teams) {
            const total = team.small + team.medium + team.large + team.xlarge + team.xxlarge

            nstudents[team.division] += total
            nstudents['total'] += total

            teams['total']++
            teams[team.division]++
        }
    }

    $("#schools").html(data.length)
    $("#coaches").html(coaches)

    $("#students").html(nstudents['total'])
    $("#blue_students").html(nstudents['blue'])
    $("#gold_students").html(nstudents['gold'])
    $("#eagle_students").html(nstudents['eagle'])

    $("#teams").html(teams['total'])
    $("#blue_teams").html(teams['blue'])
    $("#gold_teams").html(teams['gold'])
    $("#eagle_teams").html(teams['eagle'])
}

$(document).ready(function() {
    $.ajax("/admin/api/schools", {
        success: function(data) {
            var jsonData = JSON.parse(data)
            if (jsonData == 0) return
            fillStatistics(jsonData)
        },
        error: function() {

        }
    })
})
</script>

<style>
.ui.horizontal.statistics>.statistic {
    margin: .5em;
}
</style>