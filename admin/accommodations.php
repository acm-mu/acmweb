<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php";
?>

<div class="ui large feed" id="feed">
    <h4 class="ui header">Recent Activity</h4>
</div>

<script>
$(document).ready(function() {
    setInterval(updateActivity())
})

function makePost(school) {

    const m = moment(school.rdate)
    const school_link = $("<a/>", {
        href: `/admin/school?schoolid=${school.schoolid}`,
        html: school.sname
    })

    return $("<div/>", {
        "class": "event"
    }).append($("<div/>", {
        "class": "content"
    }).append($("<div/>", {
            "class": "summary"
        }).append(school_link, " said").append($("<div/>", {
            "class": "date"
        }).html(m.fromNow())),
        $("<div/>", {
            "class": "extra test"
        }).html(`<pre>${school.accommodations}${school.concerns}</pre>`)))
}

function updateActivity() {
    $(".event").remove()
    $.ajax('/admin/api/schools', {
        success: function(data) {
            var jsonData = JSON.parse(data)
            if (jsonData.length == 0) {
                error("No Results!")
                return
            }
            for (const school of jsonData) {
                if (school.accommodations != "" || school.concerns != "")
                    $("#feed").append(makePost(school))
            }
        },
        error: function() {
            error("An Error Has Occurred!")
        }
    })
}
</script>