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

<script defer>

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#schools tbody').innerHTML = '';
    
    fetch("/admin/comp/api/schools")
        .then(response => response.json())
        .then(data => {
            if (!data) {
                error("No Results");
                return;
            }
            for (const school of data) 
                document.querySelector('#schools tbody').appendChild(makeSchoolRow(school));
        })
        .catch(error_msg => error("An Error Has Occurred!", error_msg))
});

function makeSchoolRow(school) {
    const time = moment(school.rdate).fromNow()
    const schoolLink = `<a href='/admin/comp/school?schoolid=${school.schoolid}'>${school.sname}</a>`;

    const row = document.createElement('tr');
    row.appendChild(createElement(`<td>${schoolLink}</td>`));
    row.appendChild(createElement(`<td>${school.cname}</td>`));
    row.appendChild(createElement(`<td>${school.scity}</td>`));
    row.appendChild(createElement(`<td>${school.teams.length}</td>`));
    row.appendChild(createElement(`<td>${time}</td>`));

    return row
}
</script>