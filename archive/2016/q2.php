<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="quackin">Release the Quackin'</h1>

    <div>
        <h3>Problem Description</h3>

        <p>After entering his lair, Bennis begins to sniff the network traffic on his arch nemesis, <b>Dr. Corgé Gorliss</b>. Dr. Gorliss is also bent on world domination, but he is slightly less benevolent than Bennis. Gorliss is known for his questionable tactics, including providing subpar dental plans for his minions and using outdated version control software.</p>
        <p>Bennis intercepts a communication from Gorliss to his pet alligator, ordering the alligator to eat all of the ducks in a nearby pond. Amidst the average ducks is one duck, sent by Bennis, which carries the location of Gorliss's secret base. Bennis needs your help to save the ducks.</p>
        <p>Suppose there are <b>n</b> ducks floating on a pond in a circle. Beginning at the first position (duck number 1), the alligator counts around the circle and eats every <b>m</b> th duck.</p>
        <p>For example, when n = 8, and m = 4, the following diagram shows duck number outside each node and consumption order inside:</p>
        <img src="q21.png">
        <p>Note that the alligator begins by targeting the <b>m</b>th duck <b>not the first</b>.</p>
        <p>In the above example, the 4th duck is eaten first, the 8th duck is eaten second, etc. The sequence <b>4 8 5 2 1 3 7 6</b> completely describes the alligator's menu.</p>
        <p>If you can relay the correct order to the ducks in time, they should be able to escape the alligator's clutches. <b>You task is to write a program that prints out the alligator's consumption order.</b></p>
        </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>The first line contains a single integer <b>T</b>, the number of tests cases to follow.</li>
        <li><b>T</b> lines follow, each containing <b>n</b> and then <b>m</b> (separated by spaces), as described above.</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li><code>1 &lt;= T &lt;= 10</code></li>
        <li><code>1 &lt;= n &lt;= 100</code></li>
        <li><code>1 &lt;= m &lt; n</code></li>
    </ul>

    <h3>Console Output Format</h3>
    <p>Print the order that the alligator will consume the ducks (space separated).</p>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
2
8 4
7 5</pre>

        <h4>Output:</h4>
        <pre>
4 8 5 2 1 3 7 6
5 3 2 4 7 1 6</pre>
        <br />
        <br />
    </div>
</script>