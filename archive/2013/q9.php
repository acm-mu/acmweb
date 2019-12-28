<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="moveoutday">Move Out Day</h1>
    
    <h3>Problem Description</h3>
    <p>
        At the end of semester, MU students move all of their possessions back home. In preparation their parents rent
        trucks or trailers and the students pack into large boxes. In this problem, you are asked to predict if the boxes
        will all fit on the given truck.
        Because volunteers often help load the trucks, a general packing rule has been devised. Given a box, it should be
        put as close to the front of the truck as possible. Then, among all possible placements that far forward, it should
        be as far to the left as possible. Boxes are always packed in the order received. The boxes are all square, but of
        different sizes, so a truck often winds up with some empty space between the boxes.
        <br /><br />
        For example, given a truck of width 20 and boxes of size 8,4,8, 6,2,6,2 (labeled A,B,C,D,E,F,G in the diagram) the
        boxes would be packed:
    </p>
    <pre>
      +---------------+-------+---------------+
      |               |       |               |
      |               |  B    |               |
      |               |       |               |
      |  A            +---+---+  C            |
      |               | E | G |               |
      |               +---+---|               |
      |               |       |               |
      +-----------+---+-------+---------------+
      |           |           |               |
      |  D        |  F        |               |
      |           |           |               |
      |           |           |               |
      |           |           |               |
      +-----------+-----------+               |
      |                                       |
    </pre>
    <p>
        In particular, these boxes would fit on any truck of width 20 and length 14 or longer.

        For another example, given a truck of width 14 and length 10, and boxes of size 4,2,3,2,4,4,5 (again labeling with
        consecutive letters) the packing rule would give:
    </p>
    <pre>
      +-------+---+-----+---+-----+
      |       | B |  C  | D |     |
      |   A   +---+     +---+---+ |
      |       +---+---+-+       | |
      +-------+       | |   E   | |
      |       |   F   | |       | |
      |       |       +-+-------+ |
      |       +-------+         | |
      |               |   G     | |
      |               |         | |
      +---------------|         |-+ <- end of truck
                      +XXXXXXXXX+
    </pre>
    <p>
        Since the XXXX edge of the box doesn't fit on the truck bed, these boxes can't be packed. Even though it would be
        possible to fit all the boxes if we didn't follow the packing rules, we still say these don't fit.
        For each student you will be given the dimensions of the truck (width and length) and number of boxes on one line,
        followed by another line giving the sizes of the boxes in the order loaded (separated by spaces). The end of file is
        marked by truck dimensions of zero. You should print out the student's number in the list and the message "Fits" or
        "Doesn't Fit".
    </p>

    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
      20 25 7
      8 4 8 6 2 6 2
      14 10 7
      4 2 3 2 4 4 5
      0 0 0
    </pre>

    <h4>Output:</h4>
    <pre>
      Student #1 Fits
      Student #2 Doesn't Fit
    </pre>
</script>