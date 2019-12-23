<?php 
require_once("../../header.php");
require_once("sidebar.php");
 ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="rockpaperscissors">Rock Paper Scissors</h1>
    
    <h3>Problem Description</h3>
    <p>
        Regis Philbin and David Letterman have decided to settle the question of who is the greater TV host through a series
        of traditional rock paper scissors contests using R P S characters as input. Recall that Rock beats (smashes)
        Scissors, Scissors beat (cut) Paper, and Paper beats (wraps) Rock.
        <br /><br />
        Each contest consists of a number of rounds. Each round is two letters (Letterman's choice on the left, Regis'
        choice on the right). The winner of the contest is the one who wins the most rounds. If they win the same number of
        rounds, report a Tie.
        <br /><br />
        Each contest ends with the word "End". The end of file is marked by two consecutive "End" lines (i.e. an empty
        contest). For each contest, report the contest number and winner (or "Tie") as shown below.
    </p>

    <h3>Sample Run</h3>
    
    <h4>Input:</h4>
    <pre>
        RS
        PS
        RP
        SS
        SR
        RR
        PS
        End
        PP
        RS
        SR
        RP
        SP
        End
        End
    </pre>

    <h4>Output:</h4>
    <pre>
        Contest #1: Regis wins
        Contest #2: Tie
    </pre>
</script>