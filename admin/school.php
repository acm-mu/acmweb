<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>

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

<script>
$(document).ready(function() {
    updateTeams()

    $("<a/>", {
        class: "item active",
        id: "school",
        href: "/admin/school?schoolid=" + getUrlParameter('schoolid'),
        html: "School"
    }).insertAfter("#schools_nav")
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

    var row = $("<tr/>")
    row.append($("<td/>").html(team.tname))
    row.append($("<td/>").html(division))
    row.append($("<td/>").append(total))
    row.append($("<td/>").append(shirts))

    return row
}

function append(label_html, value_html) {
    var tr = $("#schoolinfo tr:last-child")
    if (tr.length == 0 || tr.children().length == 4) {
        tr = $("<tr/>")
        tr.appendTo("#schoolinfo")
    }

    const label = $("<td/>").addClass("label").html(label_html)
    const value = $("<td/>").addClass("value").html(value_html)

    tr.append(label, value)
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

    $("#schoolinfo tr").remove()

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

    const mail_link = $("<a/>", {
        href: `mailto:${data.email}?cc=acm%2Dregistration%40mscs%2Emu%2Eedu&Subject=ACM%20Programming%20Competition`,
        target: "_top",
        html: data.email
    })

    append("School Name", data.sname)
    append("Coach Name", data.cname)
    append("Address Line 1", data.saddl1)
    append("Coach Email", mail_link)
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

    append("Billing", `<a target='_blank' href='/admin/invoice?schoolid=${data.schoolid}'>View Invoice</a>`)

    for (const team of data.teams)
        $("#teams tbody").append(makeTeamRow(team))
}

function updateTeams() {
    $("#teams tbody").html("")

    url = 'api/school'
    if (getUrlParameter('schoolid') != undefined)
        url += '?schoolid=' + getUrlParameter('schoolid')

    $.ajax(url, {
        success: function(data) {
            var jsonData = JSON.parse(data)
            if (jsonData.length == 0) {
                error("No Results!")
                return
            }
            fillInformation(jsonData);
        },
        error: function() {
            error("An Error Has Occurred!")
        }
    })
}
</script>

<style>
.very.small.basic.table {
    background: #f5f5f5;
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