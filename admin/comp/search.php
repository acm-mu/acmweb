<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>

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

<script defer>
    function makeTeamRow(team) {
        var total = parseInt(team.small) + parseInt(team.medium) + parseInt(team
            .large) + parseInt(team.xlarge) + parseInt(team.xxlarge)

        var time = moment(team.rdate).fromNow()
        let clazz = team.division == 'eagle' ? 'teal' : (team.division == 'gold' ? 'yellow' : 'blue')

        const division =
            `<a class='ui label ${clazz}' href='/admin/comp/teams?division=${team.division}'>${capitalize(team.division)}</a>`;

        const row = document.createElement('tr');
        row.appendChild(createElement(`<td>${team.tname}</td>`));
        row.appendChild(createElement(`<td>${division}</td>`));
        row.appendChild(createElement(`<td>${team.sname}</td>`));
        row.appendChild(createElement(`<td>${team.cname}</td>`));
        row.appendChild(createElement(`<td>${team.scity}</td>`));
        row.appendChild(createElement(`<td>${total}</td>`));
        row.appendChild(createElement(`<td>${time}</td>`));

        return row
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#teams tbody').innerHTML = '';

        url = 'api/search'
        if (getUrlParameter('search') != undefined)
            url += '?search=' + getUrlParameter('search')

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!data) {
                    error("No Results!")
                    return
                }
                for (const team of data)
                    document.querySelector('#teams tbody').appendChild(makeTeamRow(team));
            })
            .catch(error_msg => error("An Error Has Occurred!", error_msg));
    });
</script>