<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; 
?>

<table id="teams" class="ui very basic table">
    <thead>
        <tr>
            <th col='tname'>Team Name</th>
            <th col='division'>Division</th>
            <th col='sname'>School</th>
            <th col='cname'>Coach Name</th>
            <th col='scity'>City</th>
            <th>Members</th>
            <th col='rdate'>Registration Date</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<script>
$(document).ready(function() {
    updateTeams()
})

function makeTeamRow(team) {
    var total = parseInt(team.small) + parseInt(team.medium) + parseInt(team
        .large) + parseInt(team.xlarge) + parseInt(team.xxlarge)

    var time = moment(team.rdate).fromNow()

    var division = $("<a/>", {
        class: "ui label",
        href: `/admin/teams?division=${team.division}`
    })
    switch (team.division) {
        case 'blue':
            division.addClass("blue").html("Blue")
            break
        case 'gold':
            division.addClass("yellow").html("Gold")
            break
        case 'eagle':
            division.addClass("teal").html("Eagle")
            break
    }

    var row = $("<tr/>")
    row.append($("<td/>").html(team.tname))
    row.append($("<td/>").html(division))
    row.append($("<td/>").html(team.sname))
    row.append($("<td/>").html(team.cname))
    row.append($("<td/>").html(team.scity))
    row.append($("<td/>").append(total))
    row.append($("<td/>").html(time))

    return row
}

function updateTeams() {
    $("#teams tbody").html("")

    url = 'api/search'
    if (getUrlParameter('search') != undefined)
        url += '?search=' + getUrlParameter('search')

    $.ajax(url, {
        success: function(data) {
            var jsonData = JSON.parse(data)
            if (jsonData.length == 0) {
                error("No Results!")
                return
            }
            for (const team of jsonData) {
                $("#teams tbody").append(makeTeamRow(team))
            }
        },
        error: function() {
            error("An Error Has Occurred!")
        }
    })
}
</script>