<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="springoutbreak">Spring Outbreak</h1>

    <h3>Problem Description</h3>
    <p>
        It's a lovely spring day at Marquette University except for one small detail – the campus has been suffering from a
        recent outbreak of Scourge Worms. Scourge Worms can grow to many feet long in size, have a hard, armor-like
        exterior, and leave a gaping hole in the ground when they surface to attack.
        <br /><br />
        You have been called in as part of a team of trained exterminators to eradicate the worm outbreak. Thanks to a
        leading scientist, you possess a potent formula capable of eliminating the Scourge Worm population once and for all.
        <br /><br />
        Your task is to locate the source of the worm population, as this will be the ideal place to spread the formula.
        This won't be difficult as their attack holes get closer together as you approach the nest. You can most accurately
        pinpoint this location by locating the two holes closest together, and finding their midpoint. If there is more than
        one pair at the closest distance, the midpoint of any one of them will be acceptable.
        <br /><br />
        The first line of input will contain an integer N representing the number of cases of worm outbreaks. N cases will
        follow. Each case will begin with a single integer B representing the number of holes to process. This will be
        followed by B lines each containing two positive integers X and Y representing the coordinates of the hole. A blank
        line will follow each case.
        <br /><br />
        For each case, print two integers X and Y on a single line representing the midpoint of the closest two holes. The
        test data is chosen so that the midpoint of the two closest points will always have integer coordinates.
    </p>

    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
        2
        5
        1 2
        6 1
        3 5
        4 1
        7 6

        4
        1 1
        4 1
        2 4
        1 1
    </pre>

    <h4>Output:</h4>
    <pre>
        5 1
        1 1
    </pre>
    <br />
    <br />
</script>