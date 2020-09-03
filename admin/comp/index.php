<?php require_once "include/header.php"; ?>

<div class="ui large feed" id="feed">
    <h4 class="ui header">Recent Activity</h4>
</div>

<script defer>
    function makeEvent(data) {
        const mailTo = `mailto:${data.email}?cc=acm%2Dregistration%40mscs%2Emu%2Eedu&Subject=ACM%20Programming%20Competition`;
        const mailLink = `<a href='${mailTo}' target='_top'>${data.cname}</a>`;

        const schoolLink = `<a href='/admin/comp/school?schoolid=${data.schoolid}'>${data.sname}</a>`;

        const date = `<div class='date'>${moment(data.rdate).fromNow()}</div>`;
        
        const summary = `${mailLink} from ${schoolLink} registered ${data.teams.length} teams.`;

        return createElement(`<div class='event'> <div class='content'> <div class='summary'> ${summary} ${date} </div></div></div>`);
    }

    document.addEventListener('DOMContentLoaded', () => {
        for (const event of document.querySelectorAll('.event'))
            event.remove()

        fetch('/admin/comp/api/recentactivity')
            .then(response => response.json())
            .then(data => {
                for (const event of data)
                    document.querySelector('#feed').appendChild(makeEvent(event))
            })
            .catch(error => console.error(error))
    });
</script>