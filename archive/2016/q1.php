<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="negativity">No Negativity</h1>

    <div>
        <h3>Problem Description</h3>

        <p>Our hero in this story is a young man named Bennis Drylow. Although he is young, Bennis has grand dreams of achieving world domination (he is sure he will be a benevolent dictator), but many challenges stand in his way. Bennis is crafty, but he will need your help along the way if he is to achieve his goal.</p>
        <p>Bennis has a lair where he makes plans, similar to the Batcave in both seclusion and its secure design. To unlock the door to his lair, Bennis generates a list of numbers and calculates their sum. Bennis, however, prides himself on keeping a positive mindset - he refuses to accept any negativity in his life (a positive mindset is essential to achieve world domination). As a result, when he calculates the sum, he does not factor any negative numbers into the calculation. </p>
        <p>To help Bennis, <b>write a program that calculates the sum of a list of numbers, but ignores any negative numbers in the list.</b></p>
        </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>The first line contains a single integer <b>T</b>, the number of tests cases to follow.</li>
        <li><b>T</b> lines follow, each containing a list of space-separated integers.</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li><code>1 &lt;= T &lt;= 10</code></li>
        <li>The sum of the integers will not be greater than 1,000,000.</li>
    </ul>

    <h3>Console Output Format</h3>
    <p>For each test case, print out one value (the sum, ignoring negatives).</p>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
2
4 14 9 -5 3 12 -7 0 1
5 10 15 20 25 -3 -1 1</pre>

        <h4>Output:</h4>
        <pre>
43
76</pre>
        <br />
        <br />
    </div>
</script>