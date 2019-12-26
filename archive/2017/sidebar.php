<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/archive/style.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<div class="sidebar">
    <span class='select-year'>
        <select class="select-css" onchange="location = this.value;">
            <option value="/archive/2019/q0">2019</option>
            <option value="/archive/2018/q0">2018</option>
            <option value="/archive/2017/q1" selected>2017</option>
            <option value="/archive/2013/q1">2013</option>
        </select>
        <div class='dropdown'>▾</div>
    </span>
    <ul>
        <a href="/archive/2017/q1">
            <li id="sunrise">1 - Sunrise</li>
        </a>
        <a href="/archive/2017/q2">
            <li id="lcmlcm">2 - LCM LCM</li>
        </a>
        <a href="/archive/2017/q3">
            <li id="onegiantleap">3 - One Giant Leap</li>
        </a>
        <a href="/archive/2017/q4">
            <li id="morsecode">4 - -- --- .-. ... .</li>
        </a>
        <a href="/archive/2017/q5">
            <li id="allyourbasearebelongtous">5 - All your base are belong to us</li>
        </a>
        <a href="/archive/2017/q6">
            <li id="offthegrid">6 - Off The Grid</li>
        </a>
        <a href="/archive/2017/q7">
            <li id="rollforinitiative">7 - Roll For Initiative</li>
        </a>
        <a href="/archive/2017/q8">
            <li id="allezcuisine">8 - Allez Cuisine!</li>
        </a>
    </ul>
</div>

<div class="content-div">
    <button class="swatch" id="description">Description</button>
    <button class="swatch" id="java">Java Skeleton</button>
    <button class="swatch" id="java-sol">Java Solution</button>

    <div id="content"></div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="/archive/2017/script.js"></script>