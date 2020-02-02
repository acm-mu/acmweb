<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="pilarzspainters">Pilarz's Painters</h1>

    <h3>Problem Description</h3>
    <p>
        You've recently been hired by Marquette, along with several others, to help brighten up a few of the old buildings
        with a new interior paint job! However, Father Pilarz has insisted on a strictly two-color blue and gold color
        scheme, and that no two adjacent rooms share the same color.
        <br /><br />
        Fortunately, you've been granted access to the floor plans. Given a list of interconnected rooms, your task is to
        determine whether his two-coloring scheme can be implemented for each building.
        <br /><br />
        The first line will contain an integer N representing the number of buildings Father Pilarz would like repainted. N
        cases will follow. Each case will begin with a single line containing an integer R representing the number of rooms
        in the building.
        <br /><br />
        This will be followed by R lines describing each room. The lines will begin with two integers J and K representing
        the room number, and number of adjacent rooms, respectively. Following on the same line will be K integers
        indicating the numbers of the adjacent rooms.
        <br /><br />
        For each case, output a single line containing the building number and indicating whether or not the building can be
        painted using this two-color scheme as shown below.
    </p>

    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
        2
        4
        1 2 2 4
        2 2 1 3
        3 2 2 4
        4 2 1 3
        5
        1 3 2 3 4
        2 3 1 4 5
        3 1 1
        4 3 1 2 5
        5 2 2 4
    </pre>

    <h4>Output:</h4>
    <pre>
        Building #1 can be painted.
        Building #2 can NOT be painted.
    </pre>
    <br />
    <br />
</script>