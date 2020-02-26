<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="strings">Two Strings Attached</h1>

    <div>
        <h3>Problem Description</h3>

        <p>After a daring and heroic escape from the alligator's clutches, the duck carrying the location of Gorliss's secret base returns to Bennis's lair. Bennis is now tasked with decoding the information stored on the duck's hard drive.<p>
        <p>The duck's hard drive containing two strings. The key to finding the location of the secret base is the longest common substring of the two strings. Your task is to write a program that finds the key - in other words, you must write a program that <b>finds the largest common substring of two strings</b>.</p>
        <p>In the event of a tie, the key is the first substring found when searching the first string from left to right.</p>
    </div> 
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3> 
    <ul>
        <li>The first line contains a single integer <b>T</b>, the number of tests cases to follow.</li>
        <li>Two lines for each test case will follow. The first line contains the first string, and the second line contains the second string.</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li><code>1 &lt;= T &lt;= 10</code></li>
        <li>All of the strings contain only lowercase letters and spaces.</li>
        <li>A given string will be no longer than 100 characters.</li>
    </ul>

    <h3>Console Output Format</h3>
    <p>For each test case, display the largest common substring. If there is no common substring, display a blank line.</p>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
4
kanye is a genius
you played yourself
its a trap
do you have a trapdoor
hi
absolute savage
frozen yogurt
hey man nice afro</pre>

        <h4>Output:</h4>
        <pre>
ye
 a trap

fro</pre>
        <br />
        <br />
    </div>
</script>