<?php require_once "include/header.php"; ?>

<table id="schoolinfo" class="ui very small basic table">
</table>


<table id="teams" class="ui very basic table">
    <thead>
        <tr>
            <th col='tname'>Team Name</th>
            <th col='division'>Division</th>
            <th>Members</th>
            <th>Student Shirts</th>
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

        var shirts = "";
        for (const size of [
                ["small", "S"],
                ["medium", "M"],
                ["large", "L"],
                ["xlarge", "XL"],
                ["xxlarge", "XXL"]
            ]) {
            if (team[size[0]] > 0) shirts += team[size[0]] + size[1] + " ";
        }

        const row = document.createElement('tr');
        row.appendChild(createElement(`<td>${team.tname}</td>`));
        row.appendChild(createElement(`<td>${division}</td>`));
        row.appendChild(createElement(`<td>${total}</td>`));
        row.appendChild(createElement(`<td>${shirts}</td>`));

        return row
    }

    function append(label_html, value_html) {
        var tr = document.querySelector("#schoolinfo tr:last-child")
        if (!tr || tr.length == 0 || tr.children.length == 4) {
            tr = document.createElement("tr");
            document.querySelector("#schoolinfo").appendChild(tr)
        }

        const label = createElement(`<td class='label'>${label_html}</td>`);
        const value = createElement(`<td class='value'>${value_html}</td>`);

        tr.appendChild(label);
        tr.appendChild(value);
    }

    function phone(str) {
        //Filter only numbers from the input
        let cleaned = ('' + str).replace(/\D/g, '');

        //Check if the input is of correct length
        let match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);

        if (match)
            return '(' + match[1] + ') ' + match[2] + '-' + match[3]

        return null
    }

    function fillInformation(data) {

        const curr = document.querySelector('#schoolinfo tr')
        if (curr) curr.remove();

        const python_ides = [
            ["python_idle", "IDLE"],
            ["python_pycharm", "PyCharm"],
            ["python_notepad", "Notepad"]
        ]

        const java_ides = [
            ["java_eclipse", "Eclipse"],
            ["java_netbeans", "Netbeans"],
            ["java_bluej", "BlueJ"],
            ["java_jgrasp", "jGRASP"],
            ["java_notepad", "Notepad"]
        ]

        var python = python_ides.filter((ide) => data[ide[0]] == "1")
        python = python.map(x => x[1])
        if (data['python_other'] != "")
            python.push(data["python_other"])
        python = python.join(", ")

        var java = java_ides.filter((ide) => data[ide[0]] == "1")
        java = java.map(x => x[1])
        if (data['java_other'] != "")
            java.push(data["java_other"])
        java = java.join(", ")

        var shirts = "";
        for (const size of [
                ["small", "S"],
                ["medium", "M"],
                ["large", "L"],
                ["xlarge", "XL"],
                ["xxlarge", "XXL"]
            ]) {
            if (data[size[0]] > 0) shirts += data[size[0]] + size[1] + " ";
        }

        const mailTo = `mailto:${data.email}?cc=acm%2Dregistration%40mscs%2Emu%2Eedu&Subject=ACM%20Programming%20Competition`;
        const mailLink = `<a href='${mailTo}' target='_top'>${data.email}</a>`;

        append("School Name", data.sname)
        append("Coach Name", data.cname)
        append("Address Line 1", data.saddl1)
        append("Coach Email", mailLink)
        if (data.saddl2 != "")
            append("Address Line 2", data.saddl2)
        append("Coach Phone", phone(data.phone))
        append("School City", data.scity)
        append("School Zip", data.szip)
        append("Coach Shirts", shirts)
        if (data.accommodations != "")
            append("Accommodations", data.accommodations)
        if (data.concerns != "")
            append("Concerns", data.concerns)
        append("Registration Date", moment(data.rdate).fromNow())
        if (data.school_ip != null)
            append("Registration IP", data.school_ip)

        if (data.blue == "1") {
            if (java != "")
                append("Java IDEs", java)
            if (python != "")
                append("Python IDEs", python)
        }
        if (data.gold == "1")
            append("Gold Devices", data.gold_devices)
        if (data.eagle == "1") {
            append("Eagle Devices", data.eagle_devices)
            append("Eagle Platform", data.eagle_platform)
        }

        append("Billing", `<a target='_blank' href='/admin/comp/invoice?schoolid=${data.schoolid}'>View Invoice</a>`)

        for (const team of data.teams)
            document.querySelector('#teams tbody').appendChild(makeTeamRow(team))
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#teams tbody').innerHTML = '';

        url = 'api/school'
        if (getUrlParameter('schoolid') != undefined)
            url += '?schoolid=' + getUrlParameter('schoolid')

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!data) {
                    error("No Results!");
                    return;
                }
                fillInformation(data);
            })
            .catch((error_msg) => error("An Error Has Occurred!", error_msg))

            const a = createElement(`<a class='item active' id='school' href='/admin/comp/school?schoolid=${getUrlParameter('schoolid')}'>School</a>`)
            document.querySelector('#admin_navbar').insertBefore(a, document.querySelector('.nav_item#schools').nextSibling);
    });
</script>

<style>
    .very.small.basic.table {
        background: #F5F5F5;
        border: none;
    }

    .very.small.basic.table td {
        font-size: 14px;
        padding: 5px;
        border: none;
        max-width: 50%;
    }

    .very.small.basic.table td.label {
        font-weight: bold;
        text-align: right;
    }
</style>