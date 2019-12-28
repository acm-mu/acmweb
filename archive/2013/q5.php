<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="matchingup">(M)atching (U)p</h1>
    
    <h3>Problem Description</h3>
    <p>
        Given an input string consisting of parentheses and spaces, decide whether or not the parentheses match up
        correctly. For example, "( () ( ))" do match, but "( ) ) )" don't.
        <br /><br />
        Formally, a Balanced Term is a left parenthesis "(", followed by a Balanced Expression, followed by a right
        parenthesis ")" and a Balanced Expression is a series of zero or more Balanced Terms. Spaces are ignored in
        determining whether or not an expression is balanced.
        <br /><br />
        The first line of input will be an integer indicating how many test expressions follow. Then each test expression
        will be on a line by itself. Your program should output "Balanced" for each line consisting of a Balanced Expression
        and "Not Balanced" for the other lines.
    </p>
    
    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
        5
        ( () ( ))
        ( ) ) )
        ()  ()(   ) ()
        ())(()
        (((()))
    </pre>

    <h4>Output:</h4>
    <pre>
        Balanced
        Not Balanced
        Balanced
        Not Balanced
        Not Balanced
    </pre>
</script>