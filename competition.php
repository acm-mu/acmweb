<div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>
<link rel="stylesheet" type="text/css" href="/css/competition.css?css_version=2">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

<h1 class="title" page="competition">
    <span class="competition-year"></span> Wisconsin-Dairyland Programming Competition
</h1>

<center>
    <div class='reg_message' style="display: none" id="reg-open-soon">
        <h2>Registration will open soon!</h2>
        <p>Registration for the <span class="competition-year"></span> competition will open soon!</p>
    </div>
    <div class='reg_message' style="display: none" id="reg-open">
        <h2>Registration is open!</h2>
        <p>Registration for the <span class="competition-year"></span> competition is now open.  Teams can register here.  Registration is open until <span class="reg-end"></span> Central Time!</p>
    </div>
    <div class='reg_message' style="display: none" id="reg-live">
        <h2>Competition Day!</h2>
        <p>Head over to <a href="https://codeabac.us" target="_blank">Abacus</a></p>
    </div>
    <div class='reg_message' style="display: none" id="reg-ended">
        <h2>Registration has ended!</h2>
        <p>Head over to <a href="https://codeabac.us" target="_blank">Abacus</a> to start practicing for the big day!</p>
    </div>
    <div class='reg_message' style="display: none" id="comp-end">
        <h2>The <span class="competition-year"></span> Wisconsin-Dairyland Programming Competition has ended!</h2>
        <p>Check back here next year for more information on next year's competition!</p>
    </div>
    <br />
    <a href="/archive/prep/q0">
        <button class="java">Java Preparation</button>
    </a>
    <!--<a href="https://codeabac.us/blue/practice">
        <button class="abacus">>_ Abacus</button>
    </a>-->
    <a href="/scratch_prep">
        <button class="scratch">Scratch Preparation</button>
    </a>
</center>

<p>
    The Wisconsin-Dairyland chapter of the CSTA, in conjunction with the Marquette University chapters of ACM and
    UPE, welcomes high school students with Java, Python or Scratch programming experience to participate in a morning
    of computer science problem solving and/or storytelling.

    <br /> <br />

    This Competition features three divisions:

    <br />
</p>

<h2>Java/Python Division (Blue)</h2>
<p>
    A traditional team-based programming competition, modeled on the ACM International Collegiate Programming Contest.
    Teams of three or four students will have three hours and two computers to work collaboratively to solve problems
    similar in scope to Advanced Placement Computer Science exam questions. Points will be awarded based on the number of
    problems correctly solved and the time taken to solve, with appropriate penalties for incorrect submissions.
</p>

<p>
    The International Collegiate Programming Contest is an algorithmic programming contest for college students. Teams of
    three, representing their university, work to solve the most real-world problems, fostering collaboration, creativity,
    innovation, and the ability to perform under pressure. Through training and competition, teams challenge each other to
    raise the bar on the possible. Quite simply, it is the oldest, largest, and most prestigious programming contest in
    the world.
</p>
<!-- <a href="https://www.eclipse.org/">Eclipse</a>, 
    <a href="https://netbeans.org/">NetBeans</a>, 
    WordPad + JDK, 
    <a href="https://www.cygwin.com/">Cygwin tools</a>, 
    <a href="https://www.bluej.org/">BlueJ</a>, and 
    <a href="https://www.jetbrains.com/idea/">IntelliJ</a>.

    <br />
    <p>
        You may find it useful to review our <a href="/assets/2019bluerules.pdf">Competition Rules</a>, and Java
        Preparation Notes <i>(Python Preparation Notes coming soon)</i>.
    </p> -->
<!-- </p> -->
<h2>Open/Scratch Division (Gold)</h2>
<p>
    A team-based programming competition for high school students just beginning their programming education.
    Teams of two or three students will have three hours to work collaboratively to solve problems focused on
    logic, mathematics, and creativity. Points will be awarded based on the number of problems correctly solved
    and original creative ideas. Appropriate penalties will be deducted for incorrect submissions or academic
    dishonesty. Each question is written using <a href="https://scratch.mit.edu/" target="_blank" rel="noreferrer">Scratch</a>,
    an event driven, block-based, visual programming language developed at
    the <a href="https://www.media.mit.edu/" target="_blank" rel="noreferrer">MIT Media Lab</a> at the Massachusetts Institute of Technology.
</p>
<!-- <p>You may find it useful to review our Scratch Preparation Notes.</p> -->
<h2>AP Computer Science Principles (Eagle)</h2>
<p>
    Teams of two to four students will be working together to solve a problem that is present in society and is awaiting a technological
    solution. The students then have three hours to develop a solution using their knowledge of computer science principles and technologies. Students are
    not required to write code or create a working prototype, but rather have a flushed out, technical solution. At the end of the three hours, each team will
    present (5 – 10 minutes) their solution to a small board of faculty members. The faculty will ask a few questions and ultimately vote on a winner. We will
    have a Google Meet call where students will present and gain feedback the feedback mentioned earlier.
</p>
<h2>Logistics</h2>
<h3>Location</h3>
<p>
    Hybrid (Virtual and In-Person)
</p>

<h3>Date:</h3>
<p id="competition-date"></p>

<h3>Schedule:</h3>
<ul>
    <li>Registration/Welcome: <b>8:00 AM - 8:30 AM</b></li>
    <li>Practice Problem: <b>8:30 AM - 9:00 AM</b></li>
    <li>Competition: <b>9:00 AM - 12:00 PM</b></li>
    <ul>
        <li>Scoreboard Turns Off: <b>11:30 AM</b></li>
    </ul>
    <li>Lunch Break: <b>12:15 PM - 1:00 PM</b></li>
    <li>Awards: <b>1:00 PM - 2:00 PM</b></li>
</ul>
    

<div id="reg-section" style="display: none">
    <h3>Register</h3>
    <p id="reg-coming-soon" style="display: none">Registration coming soon!</p>
    <div id="reg-button" style="display: none">
        <a href="/register"><button class="register">Register</button></a>
        <p><i>Registration closes <span class="reg-end"></span> Central Time</i></p>
    </div>

</div>
<div>
    <h3>Our Sponsors</h3>
    <img src="/assets/nmspons.png" alt="NM Sponsor" style="width: 100%; max-width: 500px;">
    <img src="/assets/ulinespons.png" alt="Uline Sponsor" style="width: 100%; max-width: 500px;">
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>
</div>

<script>
function setRegistrationDate(sDate, eDate, cDate) {
    var startDate = moment(sDate, "YYYY/MM/DD hh:mm:ss");
    var endDate = moment(eDate, "YYYY/MM/DD hh:mm:ss");
    var compDate = moment(cDate, "YYYY/MM/DD hh:mm:ss");
    var today = moment();

    var regEnds = document.getElementsByClassName("reg-end");
    for (ele in regEnds) {
        regEnds[ele].textContent = endDate.format("MMMM Do YYYY, h:mm A");
    }

    var regStarts = document.getElementsByClassName("reg-start");
    for (ele in regStarts) {
        regStarts[ele].textContent = startDate.format("MMMM Do YYYY, h:mm A");
    }

    if(today.isBefore(startDate)) {
        document.getElementById("reg-section").style.display = "block";
        document.getElementById("reg-coming-soon").style.display = "block";
        document.getElementById("reg-open-soon").style.display = "block";
    } else if (today.isAfter(startDate) && today.isBefore(endDate)) {
        document.getElementById("reg-section").style.display = "block";
        document.getElementById("reg-button").style.display = "block";
        document.getElementById("reg-open").style.display = "block";
    } else if (today.isAfter(endDate) && today.isBefore(compDate)) {
        document.getElementById("reg-ended").style.display = "block";
    } else if(today.isAfter(compDate.add(1, 'days'))) {
        document.getElementById("comp-end").style.display = "block";
    }
}

function setCompetitionDate(date) {
    var parsedDate = moment(date, "YYYY/MM/DD hh:mm:ss");
    var year = parsedDate.year();

    var compYears = document.getElementsByClassName("competition-year");
    for (ele in compYears) {
        compYears[ele].textContent = year;
    }    

    document.getElementById("competition-date").textContent = parsedDate.format("dddd, MMMM Do YYYY");
}

fetch('/api/competition')
    .then(response => response.json())
    .then(data => {
        var regStartDate = "";
        var regEndDate = "";
        var compDate = "";

        Object.entries(data).forEach((entry) => {
            const [key, value] = entry;
            if(value.setting === "COMPETITION_DATE") {
                compDate = value.value;
                setCompetitionDate(value.value);
            } else if (value.setting === "REGISTRATION_START") {
                regStartDate = value.value;
            } else if (value.setting === "REGISTRATION_END") {
                regEndDate = value.value;
            }
        });

        setRegistrationDate(regStartDate, regEndDate, compDate);
    });
</script>

