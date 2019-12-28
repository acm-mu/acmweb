<head>
    <title>Association for Computing Machinery - Marquette University</title>

    <!-- DEVELOPMENT PURPOSES: 
    Link with timestamp in url to prevent browser from caching. -->
    <link rel='stylesheet' type='text/css' href='/css/global.css?<?php echo date('l jS \of F Y h:i:s A');?>'>
    <link rel='stylesheet' type='text/css' href='/css/header.css?<?php echo date('l jS \of F Y h:i:s A');?>'>
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>
    <script src='https://code.jquery.com/jquery-3.4.1.js'
        integrity='sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=' crossorigin='anonymous'></script>
</head>

<div id='navbar'>
    <img src='/assets/acmmu.png'>

    <ul>
        <a href='/' id='home'>
            <li>Home</li>
        </a>
        <a href='/about' id='about'>
            <li>About</li>
        </a>
        <a href='/events' id='events'>
            <li>Events</li>
        </a>
        <a href='/competition' id='competition'>
            <li>Competition</li>
        </a>
    </ul>
</div>

<script>
$(document).ready(() => {
    var page = $('h1.title').attr('page');
    $('#navbar li#' + page).addClass('active');
});
</script>

<div class='container'>