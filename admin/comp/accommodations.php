<?php require_once "include/header.php"; ?>

<div class="ui large feed" id="feed">
    <h4 class="ui header">Accommodations and Concerns</h4>
</div>

<script defer>

function makePost(school) {
    const m = moment(school.rdate)

    const mailTo = `mailto:${school.email}?cc=acm%2Dregistration%40mscs%2Emu%2Eedu&Subject=ACM%20Programming%20Competition`;
    const mailLink = `<a href='${mailTo}' target='_top'>${school.cname}</a>`;

    const schoolLink = `<a href='/admin/comp/school?schoolid=${school.schoolid}'>${school.sname}</a>`;

    let summary = `${mailLink} from ${schoolLink} said <div class='date'>${m.fromNow()}</div>`;
    summary += `<div class='extra text'><pre> ${school.accommodations}${school.concerns}</pre></div>`;

    return createElement(`<div class='event'> <div class='content'> <div class='summary'> ${summary} </div> </div> </div>`);
}

document.addEventListener('DOMContentLoaded', () => {
    for (const event of document.querySelectorAll(".event"))
        event.remove()

    fetch('/admin/comp/api/schools')
        .then(response => response.json())
        .then(data => {
            if (!data) {
                error("No Results!")
                return
            }
            for (const school of data) 
                if (school.accommodations != "" || school.concerns != "")
                    document.querySelector('#feed').appendChild(makePost(school))

        })
        .catch(error_msg => error("An Error Has Occurred!", error_msg));
});
</script>