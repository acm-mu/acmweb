<?php 
require_once("../../header.php");
require_once("sidebar.php");
 ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="almostaninteger">Almost An Integer</h1>

    <h3>Problem Description</h3>
    <p>
        Given a set of floating point values (type double) determine which value is closest to an integer. For instance, 4.3
        is 0.3 units away from an integer (i.e. 4) and 2.8 is 0.2 units away from an integer (i.e. 3). So, given the set 4.3
        and 2.8, the program should choose 2.8. If two or more numbers in the set are the same distance from an integer,
        either is an acceptable answer.
        <br /><br />
        Each set of numbers will begin with an integer saying how many numbers are in the set (on a line by itself). Then
        the next line will contain the numbers separated by spaces. The end of input is indicated by a set size of zero.
    </p>

    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
        2
        4.3 2.8
        5
        8.3 -43.8 71.17 0.75 26.5
        4
        111.111 222.222 777.777 333.0
        0
    </pre>

    <h4>Output:</h4>
    <pre>
        2.8
        71.17
    </pre>
</script>