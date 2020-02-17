<head>
    <title>Association for Computing Machinery - Marquette University</title>

    <!-- DEVELOPMENT PURPOSES: 
    Link with timestamp in url to prevent browser from caching. -->
    <link rel='stylesheet' type='text/css' href='/css/global.css?<?php echo date('l jS \of F Y h:i:s A');?>'>
    <link rel='stylesheet' type='text/css' href='/css/header.css?<?php echo date('l jS \of F Y h:i:s A');?>'>
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>
    <script src='https://code.jquery.com/jquery-3.4.1.js'></script>
    <script src="/js/header.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158210865-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-158210865-1');
    </script>
</head>

<body>

<div id='navbar'>
    <img src='/assets/acmmu.png'>

    <ul>
        <a href="/" id="home">
            <li>Home</li>
        </a>
        <a href="/about" id="about">
            <li>About</li>
        </a>
        <a href="/events" id="events">
            <li>Events</li>
        </a>
        <a href="/competition" id="competition">
            <li>Competition</li>
        </a>
    </ul>

        <?php
        if (substr($_SERVER['REQUEST_URI'], 0, 7) == "/admin/") {
            echo "<span>Admin Console";
            if (loggedin()) {
                echo " | <a href='/admin/logout'>Logout</a>";
            }
            echo "</span>";
        }
        ?>
        </script>
</div>

<div class='container'>