<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="prime">Way Past My Prime</h1>

    <div>
        <h3>Problem Description</h3>

        <p>Armed with the coordinates of Gorliss' secret base, Bennis is almost ready to make his final move. Before he attempts to capture Gorliss, Bennis needs to rescue a critical asset from one of Gorliss' prison cells. Using his vast knowledge of Gorliss' base and his <i>pocket guide to sneaking in to secret bases</i>, Bennis manages to sneak in to Gorliss' prison almost entirely undetected. He arrives at the locked cell of his good friend, Scott Sterling. Through his time in Gorliss' prison, Scott developed a strong understanding of the inner workings of Gorliss' enterprise. Bennis needs your help to break him out, so that he can defeat Gorliss once and for all.</p>
    <p>Scott's cell is locked using Gorliss' state-of-the-art <i>major key</i> technology. It works like this: each cell has no physical key; it can only be unlocked by solving a certain mathematical problem (Gorliss has a PhD in math; he figured nobody else would be able to solve these problems). To unlock Scott's cell, the user must <b>find all of the prime numbers in a range between two given numbers.</b> Can you help Bennis unlock Scott's cell?</p>

    <b>NOTE: 1 is NOT considered a prime.</b>
        </div>
    <h2>Testing Your Program from the Console</h2> 

    <h3>Console Input Format</h3>
    <ul>
        <li>The first line contains a single integer <b>T</b>, the number of tests cases to follow.</li>
        <li><b>T</b> lines follow, each containing two numbers, <b>A</b> and then <b>B</b> (space-separated)</li>
        <ul>
            <li><b>A</b> is the lower bound of the range to search in, exclusive</li>
            <li><b>B</b> is the upper bound of the range to search in, exclusive</li>
        </ul>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li><code>1 &lt;= T &lt;= 10</code></li>
        <li><code>0 &lt;= A &lt; B &lt;= 100,000</code></li>
    </ul>

    <h3>Console Output Format</h3>
    <p>For each test case, print (in ascending order) all of the prime numbers between <b>A</b> and <b>B</b> (not including either <b>A</b> or <b>B</b>), with a space after each number. After each tet case, print a new line.</p>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
3
1 25
160 229
17 33</pre>

        <h4>Output:</h4>
        <pre>
2 3 5 7 11 13 17 19 23
163 167 173 179 181 191 193 197 199 211 223 227
19 23 29 31</pre>
        <br />
        <br />
    </div>
</script>