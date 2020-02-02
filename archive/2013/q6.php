<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="boxofmirrors">Box of Mirrors</h1>

    <h3>Problem Description</h3>
    <p>
        In this problem you need to simulate a box of mirrors. Given a starting position for a beam of light shining into
        the box, your program should compute where the beam leaves the box.
        <br /><br />
        The box is a rectangular grid with a mirror in each cell. The mirror is diagonal across the cell like / or \. If a
        light ray enters a cell with / from the top, it leaves to the left. If it enters from the left, it leaves to the
        top. If it enters from the bottom, it leaves to the right. If it enters from the right, it leaves to the bottom. The
        beam bounces off the \ mirror similarly.
        <br /><br />
        The input file consists of a series of mirror setups each followed by some light ray entry points. The setup is
        described as a rectangular pattern of / and \. The box will never be larger than 10 by 10. Ray entries start with a
        letter (T=top, B=bottom, R=right side, L=left side) indicating which side the ray enters along with a digit
        indicating where on the side (0 is first row or column).
        <br /><br />
        Your program should output the setup number and then the results of the rays for that setup in the format shown
        below. The file ends with a blank line.
    </p>

    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
        //\/\
        /\\\\
        \\/\\
        \/\/\
        T0
        T2
        R3
        L1
        R1
        B3
        \\
        //
        \\
        T0
        R0
        L0
        B0
    </pre>

    <h4>Output:</h4>
    <pre>
        SETUP #1
        T0 -> L0
        T2 -> T3
        R3 -> L2
        L1 -> T1
        R1 -> R2
        B3 -> B4
        SETUP #2
        T0 -> B1
        R0 -> T1
        L0 -> L1
        B0 -> L2
    </pre>
    <br />
    <br />
</script>