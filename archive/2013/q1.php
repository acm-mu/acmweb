<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="goldeneagletheory">The Big Golden Eagle Theory</h1>

    <h3>Problem Description</h3>
    <p>
        Dr. Cooper's particle detector is broken and he needs your help writing a simulator to find the issue. Model the
        detector plate as a rectangle in 2D space defined by two pairs of (X,Y) coordinates representing opposite corners.
        Given a list of impact points, determine which particles should register on the detector.
        <br /><br />
        The first line contains four integers X1 Y1 X2 Y2 indicating the corners of the detector plate. Each subsequent line
        contains a pair of integers representing the coordinates of a particle. Print "Hit" or "Miss" to indicate which
        points fall within the boundary until the end of file is reached.
    </p>

    <h3>Sample Run</h3>
    
    <h4>Input:</h4>
    <pre>
        0 0  10 10
        1 1
        11 11
        -1 5
        5 7
        10 10
        10 5
        12 3
        5 -14
    </pre>

    <h4>Output:</h4>
    <pre>
        Hit
        Miss
        Miss
        Hit
        Hit
        Hit
        Miss
        Miss
    </pre>
</script>