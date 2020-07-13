<?php require_once "include/header.php"; ?>

<div class="ui large feed" id="feed">
    <h4 class="ui header">Accommodations and Concerns</h4>
</div>

<script>
$(document).ready(function() {
    setInterval(updateActivity())
})

function makePost(school) {
    const m = moment(school.rdate)

    const mail_link = $("<a/>", {
        href: `mailto:${school.email}?cc=acm%2Dregistration%40mscs%2Emu%2Eedu&Subject=ACM%20Programming%20Competition`,
        target: "_top",
        html: school.cname
    })

    const school_link = $("<a/>", {
        href: `/admin/comp/school?schoolid=${school.schoolid}`,
        html: school.sname
    })

    return $("<div/>", {
        "class": "event"
    }).append($("<div/>", {
        "class": "content"
    }).append($("<div/>", {
            "class": "summary"
        }).append(mail_link, " from ", school_link, " said")
        .append($("<div/>", {
            "class": "date"
        }).html(m.fromNow())),
        $("<div/>", {
            "class": "extra text"
        }).html(`<pre>${school.accommodations}${school.concerns}</pre>`)))
}

function updateActivity() {
    $(".event").remove()
    $.ajax('/admin/comp/api/schools', {
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