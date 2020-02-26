<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="block">Been Around The Block</h1>

      <div>
          <h3>Problem Description</h3>

          <p>After capturing his arch enemy Dr. Gorliss, Bennis seeks to construct a prison cell for him. Since Dr. Gorliss is crafty, Bennis knows he has to construct the cell in a certain way to effectively hold him. Fortunately, Scott Sterling obtained this knowledge during his tenure in Gorliss' prison. Scott knows exactly how to design the perfect prison cell to hold Gorliss. Well, sort of.
  	Scott knows that the prison cell must be built in a certain way: It must be made of stacks of blocks in a square, and the square cannot be larger than K blocks wide – and no single stack of blocks can be taller than 8 blocks high.
  	Here is an example of one type of cell that would successfully hold Gorliss:
          </p>

          <center>
          <img src="q61.png">
          </center>

          <p>When Scott was imprisoned, he made drawings of types of cells that would work. However, he didn't know how to draw a 3D-picture very well, so he drew a two-dimensional front view, and a two-dimensional side view. He figured he would be able to recreate the buildings from those pictures at a later time… but he was wrong. Here are the drawings he made for the above building:</p>

          <center>
          <img src="q62.png">
          </center>

          <p>After breaking out of prison, Scott realized that with his drawings, he would be able to reconstruct a “minimal building” and a “maximal building” - buildings that matched both 2D drawings but with a minimum and maximum number of blocks.
  Here are the minimal and maximal buildings for the drawing shown above:</p>

          <center>
          <img src="q63.png">
          <img src="q64.png"><br>
          <i>(left: building with minimal number of blocks; right:building with maximal number)</i>
          </center>

          <p><b>Your task is to write a program that will determine the number of blocks necessary to recreate the minimal and maximal building.</b> Scott believes that if he is given the right number of blocks, he will be able to reconstruct the correct 3D building on intuition.</p>

      </div>
      <h2>Testing Your Program from the Console</h2>

      <h3>Console Input Format</h3>
      <ul>
          <li>The first line contains a single integer <b>T</b>, the number of tests cases to follow.</li>
          <li>Each test case starts with a line containing <b>K</b>, the width of the square.</li>
          <li>The next pair of lines contain the description of one drawing.</li>
              <ul>
                  <li>Each description consists of <b>K</b> non-negative integers (space-separated).</li>
                  <li>Each number indicates the height of the corresponding projection of a stack of blocks in the drawing.</li>
                  <li>The description of the front drawing will precede the description of the side drawing.</li>
          </ul>
      </ul>

      <h3>Assumptions</h3>
      <ul>
          <li><code>1 &lt; T &lt; 10</code></li>
          <li><code>1 &lt; K &lt; 8</code></li>
      </ul>

      <h3>Console Output Format</h3>
      <p>For each test case, output the minimum number of blocks needed, followed by the maximum number of blocks needed (space-separated).</p>
      <div>
          <h3>Sample Run</h3>

          <h4>Input:</h4>
          <pre>
  1
  4
  2 0 3 1
  1 1 2 3</pre>

          <h4>Output:</h4>
          <pre>
  7 17</pre>
          <br />
          <br />
      </div>
</script>