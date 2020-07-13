<?php require_once "include/header.php"; ?>

<table id="schools" class="ui very basic table">
    <thead>
        <tr>
            <th col='sname' class='three wide'>School Name</th>
            <th col='amountdue' class='two wide'>Amount Due</th>
            <th col='view' class='two wide'>View Invoice</th>
            <th col='sent' col='two wide'>Invoice Sent?</th>
            <th col='paid' col='two wide'>Invoice Paid?</th>
            <th col='rdate' class='three wide'>Registration Date</th>
        </tr>
    </thead>
    <tbody> </tbody>
</table>

<script>
    var schools = [];


    $(document).ready(function () {
        updateTeams()

        $(document).on('click', '.sentInvoice', sentInvoice)
        $(document).on('click', '.paidInvoice', paidInvoice)
    })

    function sentInvoice() {
        const schoolid = $(this).attr('schoolid')
        const school = schools[schoolid]

        Swal.fire({
            title: 'Are you sure?',
            text: `Are you sure you'd like to to mark ${school.sname} as sent?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, please!'
        }).then((result) => {
            if (result.value) {
                $(this).addClass("loading")
                $.ajax(`/admin/comp/php/update?schoolid=${schoolid}&key=datesent`, {
                    success: updateTeams,
                    error: function () {
                        console.error("An error has occurred updating the school's invoice (232)");
                    }
                })
            }
        })
    }

    function paidInvoice() {
        const schoolid = $(this).attr('schoolid')
        const school = schools[schoolid]

        Swal.fire({
            title: 'Are you sure?',
            text: `Are you sure you'd like to to mark ${school.sname} as sent?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, please!'
        }).then((result) => {
            if (result.value) {
                $(this).addClass("loading")
                $.ajax(`/admin/comp/php/update?schoolid=${schoolid}&key=datepaid`, {
                    success: updateTeams,
                    error: function () {
                        console.error("An error has occurred updating the school's invoice (233)");
                    }
                })
            }
        })
    }

    function updateTeams() {
        $.ajax("/admin/comp/api/schools", {
            success: function (data) {
                var jsonData = JSON.parse(data)
                if (jsonData.length == 0) {
                    error("No Results!")
                    return
                }
                $("#schools tbody").html("")
                for (const school of jsonData) {
                    schools[school.schoolid] = school
                    $("#schools tbody").append(makeSchoolRow(school))
                }
            },
            error: function () {
                error("An Error Has Occurred!")
            }
        })
    }

    function makeSchoolRow(school) {
        const time = moment(school.rdate).fromNow()
        const row = $("<tr>")
        const a = $("<a/>").attr('href', "/admin/comp/school?schoolid=" + school.schoolid).html(school.sname)

        var amount_due = 0;
        for (const team of school.teams)
            switch (team.division) {
                case "eagle":
                    amount_due += 60;
                    break;
                case "gold":
                    amount_due += 60;
                    break;
                case "blue":
                    amount_due += 80;
                    break;
            }

        var paid = $("<a/>", {
            class: "ui label"
        })
        if (school.paid)
            paid.addClass("green").html("Paid")
        else
            paid.addClass("red").html("Due")

        row.append($("<td/>").html(a))
        row.append($("<td/>").html(`$${amount_due}`))

        var view_button = $("<a/>", {
            target: "_blank",
            href: `/admin/comp/invoice?schoolid=${school.schoolid}`
        }).html($("<button/>", {
            class: "ui compact labeled icon button"
        }).append($("<i/>", {
            class: "eye icon"
        }), "View"))

        row.append($("<td/>").html(view_button))

        var datesent;
        if (school.datesent != null) {
            const time = moment(school.datesent)
            datesent = $("<button/>", {
                class: "ui compact blue button sentInvoice",
                style: "width: 85%",
                schoolid: school.schoolid
            }).append(time.format('MM/DD'))
        } else {
            datesent = $("<button/>", {
                class: "ui compact labeled icon blue basic button sentInvoice",
                schoolid: school.schoolid
            }).append($("<i/>", {
                class: "envelope outline icon"
            }), "Sent")
        }

        row.append($("<td/>").html(datesent))

        var datepaid;
        if (school.datepaid != null) {
            const time = moment(school.datepaid)
            datepaid = $("<button/>", {
                class: "ui compact green button paidInvoice",
                style: "width: 85%",
                schoolid: school.schoolid
            }).append(time.format('MM/DD'))
        } else {
            datepaid = $("<button/>", {
                class: "ui compact labeled icon green basic button paidInvoice",
                schoolid: school.schoolid
            }).append($("<i/>", {
                class: "dollar sign icon"
            }), "Paid")
        }

        row.append($("<td/>").html(datepaid))
        row.append($("<td/>").html(time))

        return row
    }
</script>