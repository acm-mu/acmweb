<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
      <h1 id="page" page="wagons">Circle the Wagons</h1>

      <div>
          <h3>Problem Description</h3>

          <p>Having just rescued Scott Sterling from Gorliss' prison, Bennis is now ready to swoop in and capture Gorliss.</p>
          <p>Bennis deploys three scouts to surround Gorliss such that:</p>
      <ul>
      <li>Each scout's position can be represented as a unique 2D-point <b>(x,y)</b> in a Cartesian Plane.</li>
      <li>The three scouts will not line up in a straight line (their positions are noncollinear).</li>
      <li>There is a unique circle, <b>C</b>, that intersects all three scouts positions.</li>
      <li>The center of <b>C</b> is Gorliss' position.</li>
      </ul>
      <p>Your job is to calculate Gorliss' position, given the position of the three scouts. In other words, <b>You must find the center of a circle given three unique points on the circle.</b> When Gorliss' final position is determined, Bennis will capture him.</p>
      </div>
      <h2>Testing Your Program from the Console</h2>

      <h3>Console Input Format</h3>
      <ul>
          <li>The first line contains a single integer <b>T</b>, the number of tests cases to follow.</li>
          <li><b>T</b> lines follow, each containing 6 space-separated doubles, <b>x1 y1 x2 y2 x3 y3</b>, representing the cartesian coordinates of the three points.</li>
      </ul>

      <h3>Assumptions</h3>
      <ul>
          <li><code>1 &lt;= T &lt;= 10</code></li>
          <li>Each of the values <b>x1 y1 x2 y2 x3 y3</b> will be between -1000.0 and 1000.0</li>
          <li>Each of the values <b>x1 y1 x2 y2 x3 y3</b> will be rounded to one decimal.</li>
      </ul>

      <h3>Console Output Format</h3>
      <p>For each test case, output the <b>x</b> and then the <b>y</b> value that represent the center of the circle, rounded to one decimal, separated by spaces.</p>
      <div>
          <h3>Sample Run</h3>

          <h4>Input:</h4>
          <pre>
  2
  1.0 -2.0 -1.0 0.0 3.0 0.0
  0.0 10.0 10.0 0.0 0.0 -10.0</pre>

          <h4>Output:</h4>
          <pre>
  1.0 0.0
  0.0 0.0</pre>
          <br />
          <br />
      </div>
</script>
