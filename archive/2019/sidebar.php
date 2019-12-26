<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/archive/style.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<div class="sidebar">
    <span class='select-year'>
        <select class="select-css" onchange="location = this.value;">
            <option value="/archive/2019/q0" selected>2019</option>
            <option value="/archive/2018/q0">2018</option>
            <option value="/archive/2017/q1">2017</option>
            <option value="/archive/2013/q1">2013</option>
        </select>
        <div class='dropdown'>▾</div>
    </span>
    <ul>
        <a href="/archive/2019/q0">
            <li id="practiceproblem">0 - Practice Problem</li>
        </a>
        <a href="/archive/2019/q1">
            <li id="flighttime">1 - Flight Time</li>
        </a>
        <a href="/archive/2019/q2">
            <li id="togglegrid">2 - Toggle Grid</li>
        </a>
        <a href="/archive/2019/q3">
            <li id="taylorseries">3 - Taylor Series</li>
        </a>
        <a href="/archive/2019/q4">
            <li id="looksay">4 - Look & Say</li>
        </a>
        <a href="/archive/2019/q5">
            <li id="rugby">5 - Rugby</li>
        </a>
        <a href="/archive/2019/q6">
            <li id="basebounds">6 - Base Bounds</li>
        </a>
        <a href="/archive/2019/q7">
            <li id="encryption">7 - Encryption</li>
        </a>
        <a href="/archive/2019/q8">
            <li id="calculator">8 - Calculator</li>
        </a>
        <a href="/archive/2019/q9">
            <li id="bonusquestion">9 - Bonus Question: Unit Testing and Test Driven Design</li>
        </a>
    </ul>
</div>

<div class="content-div">
    <button class="swatch" id="description">Description</button>
    <button class="swatch" id="python">Python Skeleton</button>
    <button class="swatch" id="java">Java Skeleton</button>

    <div id="content"></div>

</div>

<script src="/archive/2019/script.js"></script>