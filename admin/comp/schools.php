<?php require_once "include/header.php"; ?>

<table id="schools" class="ui very basic table">
    <thead>
        <tr>
            <th col='sname' class='three wide'>School Name</th>
            <th col='cname' class='three wide'>Coach Name</th>
            <th col='scity' class='three wide'>School City</th>
            <th col='teams' class='two wide'>Teams</th>
            <th col='rdate' class='two wide'>Register Date</th>
        </tr>
    </thead>
    <tbody> </tbody>
</table>

<script>
$(document).ready(function() {
    updateTeams()
})

function updateTeams() {
    $("#schools tbody").html("")
    // TODO: Switch to fetch promise call
    $.ajax("/admin/comp/api/schools", {
        success: function(data) {
            var jsonData = JSON.parse(data)
            if (jsonData.length == 0) {
                error("No Results!")
                return
            }
            for (const school of jsonData) {
                $("#schools tbody").append(makeSchoolRow(school))
            }
        },
        error: function() {
            error("An Error Has Occurred!")
        }
    })
}

function makeSchoolRow(school) {
    const time = moment(school.rdate).fromNow()
    const row = $("<tr>")
    const a = $("<a/>").attr('href', "/admin/comp/school?schoolid=" + school.schoolid).html(school.sname)

    row.append($("<td/>").html(a))
    row.append($("<td/>").html(school.cname))
    row.append($("<td/>").html(school.scity))
    row.append($("<td/>").html(school.teams.length))
    row.append($("<td/>").html(time))

    return row
}
</script>