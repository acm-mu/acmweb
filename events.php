<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>

<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/css/events.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<h1 class="title" page="events"> Events </h1>

<div class="event-list">

    <div class="event">
        <div class="date">
            <h1 class="month"> APR </h1>
            <h1 class="day"> 15 </h1>
        </div>
        <div class="details">
            <p class="title"> ACM/UPE Programming Competition </p>
            <p class="desc"> A computing competition for high school students in Wisconsin ran completely by Marquette
                student volunteers. The competition is ACM's biggest event ran every year. The event is intended to
                introduce high school students to the joy of computing and competitive programming. </p>
        </div>
    </div>

    <div class="event passed">
        <div class="date">
            <h1 class="month"> NOV </h1>
            <h1 class="day"> 02 </h1>
        </div>
        <div class="details">
            <p class="title"> GDG DevFest Hackathon </p>
            <p class="desc">Northwestern Mutual is working with UWM, MSOE, and Marquette to organize and run a
                college-level hackathon. Students can either sign up as a team, or join one the day of the event. More
                information can be found <a href='https://www.meetup.com/GDG-UWM/'>here</a>.</p>
        </div>
    </div>

    <div class="event passed">
        <div class="date">
            <h1 class="month"> OCT </h1>
            <h1 class="day"> 29 </h1>
        </div>
        <div class="details">
            <p class="title">Internship/Research Panel</p>
            <p class="desc">Curious about internships? Not sure how to apply? Want to do research, but don't know what
                to expect? Join us for an hour of Q&A with members of ACM who have done research or had an internship
                experience and find out what it's like and what to expect!</p>
        </div>
    </div>

    <div class="event passed">
        <div class="date">
            <h1 class="month"> OCT </h1>
            <h1 class="day"> 09 </h1>
        </div>
        <div class="details">
            <p class="title"> Game Night </p>
            <p class="desc"> Join us for our first non-technical event. Game night. We will have games ranging from
                board games, to video games. Maybe even Virtual Reality. Food and snacks will be provided </p>
        </div>
    </div>

    <div class="event passed">
        <div class="date">
            <h1 class="month"> SEPT </h1>
            <h1 class="day"> 17 </h1>
        </div>
        <div class="details">
            <p class="title"> Resume Writing Workshop </p>
            <p class="desc"> Come work on, or get started with your resume. We will have two people from Career
                Services. Any interested ACM member's resumes will be added to our book and sent to sponsors. </p>
        </div>
    </div>

    <div class="event passed">
        <div class="date">
            <h1 class="month"> SEPT </h1>
            <h1 class="day"> 11 </h1>
        </div>
        <div class="details">
            <p class="title"> First General Body Meeting </p>
            <p class="desc"> Join us in CU 310 for our first meeting of the year. We will be talking about what we will
                be doing for the semester, and our upcoming events. Food will be provided </p>
        </div>
    </div>

    <br />
    <em>More events coming soon!</em>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>