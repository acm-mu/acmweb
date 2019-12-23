<?php 
require_once("../../header.php");
require_once("sidebar.php");
?>

<script type="text/template" id="description-template">
    <h1 id="page" page="mpdna">MPDNA</h1>
        
    <h3>Problem Description</h3>
    <p>
        You are a forensic analyst working for the Milwaukee Police Department. You've recently been assigned to work on
        kidnapping cases involving multiple suspects. Fortunately, DNA evidence has been recovered from the crime scenes,
        and all suspects are currently being detained, pending the outcome of your analysis.
        <br /><br />
        Your job is to compare the DNA sequences of each suspect to the DNA found at the crime scene, and determine which
        suspect's DNA is the closest match. In this case, the closest match is the suspect whose DNA has the longest
        sequence in common with that of the crime scene DNA. This is what is sometimes called "substring" matching. That is,
        we want a section of consecutive characters from one string matching a section of consecutive characters in the
        other string. For example, the longest common sequence between GCTGCA and AGCTCT is GCT of length 3. The longest
        common sequence between AAAAAA and AAAATAAAA is AAAA at either end of the second sequence, giving a common sequence
        of length 4.
        <br /><br />
        The input DNA sequences will be represented by strings containing any combination of the letters G, A, T, and C and
        will be between lengths 5 and 30, inclusively.
        <br /><br />
        The first line will contain an integer N representing the number of cases to be analyzed. N cases will follow. Each
        case will begin with a single line will containing the DNA sequence found at the crime scene. The next line will
        contain an integer S representing the number of sequences to be analyzed. This will be followed by S lines each
        containing one suspect's DNA sequence. A blank line will follow each case.
        <br /><br />
        Your program should print a single integer between 1 and S for each case on its own line representing the suspect
        whose DNA was the closest match to the crime scene DNA. If more than one suspect DNA has the closest match, any one
        of the closest matches is acceptable.
    </p>
    
    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
        2
        GCTGCA
        5
        AGCTCT
        TAGATT
        GCGATT
        GTATAT
        TAGCGA

        GGATAC
        2
        GTACGA
        CCGATA
    </pre>

    <h4>Input:</h4>
    <pre>
        1
        2
    </pre>
</script>