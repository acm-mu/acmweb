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

<script defer>
    var schools = [];

    function sentInvoice() {
        const schoolid = this.getAttribute('schoolid');
        const school = schools[schoolid]

        swal({
            title: 'Are you sure?',
            text: `Are you sure you'd like to to mark ${school.sname} as sent?`,
            icon: 'warning',
            buttons: {
                cancel: {
                    color: '#DD3333',
                },
                confirm: {
                    text: 'Yes, please!',
                    color: '#3085D6'
                }
            }
        }).then((result) => {
            if (result) {
                this.classList.add('loading');

                fetch(`/admin/comp/php/update?schoolid=${schoolid}&key=datesent`)
                    .then(updateTeams)
                    .catch(error_msg => console.error("An error has occurred updating the schools' invoice!"))
            }
        })
    }

    function paidInvoice() {
        const schoolid = this.getAttribute('schoolid')
        const school = schools[schoolid]

        swal({
            title: 'Are you sure?',
            text: `Are you sure you'd like to to mark ${school.sname} as paid?`,
            icon: 'warning',
            buttons: {
                cancel: {
                    color: '#DD3333',
                },
                confirm: {
                    text: 'Yes, please!',
                    color: '#3085D6'
                }
            }
        }).then((result) => {
            if (result) {
                this.classList.add('loading');

                fetch(`/admin/comp/php/update?schoolid=${schoolid}&key=datepaid`)
                    .then(updateTeams)
                    .catch(error_msg => console.error("An error has occurred updating the school's invoice"));
            }
        })
    }

    document.addEventListener('DOMContentLoaded', () => {
        onEvent('click', '.sentInvoice', sentInvoice);
        onEvent('click', '.paidInvoice', paidInvoice);

        updateTeams();
    });

    function updateTeams() {
        fetch('/admin/comp/api/schools')
            .then(response => response.json())
            .then(data => {
                if (!data) {
                    error("No Results!");
                    return
                }
                document.querySelector('#schools tbody').innerHTML = '';
                for (const school of data) {
                    schools[school.schoolid] = school;
                    document.querySelector('#schools tbody').appendChild(makeSchoolRow(school));
                }
            })
            .catch(error_msg => error("An Error Has Occurred!", error_msg));
    }

    function makeSchoolRow(school) {
        const time = moment(school.rdate).fromNow()
        const row = document.createElement('tr')
        const a = `<a href='/admin/comp/school?schoolid=${school.schoolid}'>${school.sname}</a>`;

        var amount_due = 0;
        for (const team of school.teams)
            switch (team.division) {
                case "eagle":
                    amount_due += 50;
                    break;
                case "gold":
                    amount_due += 50;
                    break;
                case "blue":
                    amount_due += 60;
                    break;
            }

        row.appendChild(createElement(`<td>${a}</td>`));
        row.appendChild(createElement(`<td>$${amount_due}</td>`));

        const viewBtn = `<button class='ui compact labeled icon button'><i class='eye icon'></i>View</button>`;
        const viewButton = `<a target='_blank' href='/admin/comp/invoice?schoolid=${school.schoolid}'>${viewBtn}</a>`;

        row.appendChild(createElement(`<td>${viewButton}</td>`))

        var datesent;
        if (school.datesent != null) {
            const time = moment(school.datesent)
            datesent =
                `<button class="ui compact blue button sentInvoice" style="width: 85%" schoolid=${school.schoolid}>${time.format('MM/DD')}</button>`
        } else {
            datesent =
                `<button class="ui compact labeled icon blue basic button sentInvoice" schoolid=${school.schoolid}><i class='envelope outline icon'></i>Sent</button>`;
        }

        row.appendChild(createElement(`<td>${datesent}</td>`));

        var datepaid;
        if (school.datepaid != null) {
            const time = moment(school.datepaid)
            datepaid =
                `<button class="ui compact green button paidInvoice" style="width: 85%" schoolid=${school.schoolid}>${time.format('MM/DD')}</button>`;
        } else {
            datepaid =
                `<button class="ui compact labeled icon green basic button paidInvoice" schoolid=${school.schoolid}><i class='dollar sign icon'></i>Paid</button>`;
        }

        row.appendChild(createElement(`<td>${datepaid}</td>`));
        row.appendChild(createElement(`<td>${time}</td>`));

        return row
    }
</script>