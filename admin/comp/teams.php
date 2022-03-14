<?php require_once "include/header.php"; ?>

<table id="teams" class="ui very basic table">
    <thead>
        <tr>
            <th col='tname'>Team Name</th>
            <th col='division'>Division</th>
            <th col='format'>Format</th>
            <th col='sname'>School</th>
            <th col='scity'>City</th>
            <th>Members</th>
            <th col='rdate'>Registration Date</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<script defer>

function makeTeamRow(team) {
    var total = parseInt(team.small) + parseInt(team.medium) + parseInt(team
        .large) + parseInt(team.xlarge) + parseInt(team.xxlarge)

    var time = moment(team.rdate).fromNow()

    let clazz = team.division == 'eagle' ? 'teal' : (team.division == 'gold' ? 'yellow' : 'blue')
    const division = `<a class='ui label ${clazz}' href='/admin/comp/teams?division=${team.division}'>${capitalize(team.division)}</a>`;
    const format = team.format == 'in-person' ? 'In-Person' : 'Virtual'

    const schoolLink = `<a href='/admin/comp/school?schoolid=${team.schoolid}'>${team.sname}</a>`;

    const row = document.createElement('tr');
    row.appendChild(createElement(`<td>${team.tname}</td>`));
    row.appendChild(createElement(`<td>${division}</td>`));
    row.appendChild(createElement(`<td>${format}</td>`));
    row.appendChild(createElement(`<td>${schoolLink}</td>`));
    row.appendChild(createElement(`<td>${team.scity}</td>`));
    row.appendChild(createElement(`<td>${total}</td>`));
    row.appendChild(createElement(`<td>${time}</td>`));

    return row
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#teams tbody').innerHTML = "";

    args = []
    if (getUrlParameter('schoolid') != undefined)
        args.push("schoolid=" + getUrlParameter("schoolid"))

    if (getUrlParameter("division") != undefined)
        args.push("division=" + getUrlParameter("division"))
        
    fetch(`/admin/comp/api/teams?${args.join('&')}`)
        .then(response => response.json())
        .then(data => {
            if (!data) {
                error("No Results!")
                return
            }
            for (const team of data) 
                document.querySelector('#teams tbody').appendChild(makeTeamRow(team))
        })
});
</script>