<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="crackfreewalls">Crack-free Walls</h1>
    <div>
        <h3>Problem Description</h3>
        <p>Ryan is thinking about putting together an art exhibit featuring brick walls. He is concerned about the success
            of this business venture, since there isn't a lot of variety implied in a brick wall art exhibit.</p>
        <p>Ryan wants to know the number of ways bricks can be arranged to build a particular size wall.</p>
        <p>When building a brick wall, it is beneficial to the strength of the wall to ensure that the cracks between bricks
            never line-up in consecutive layers, i.e. never forming a “running crack”. (Not to mention, Ryan thinks that
            running cracks make a brick wall look ugly)</p>
        <p>For example, the following 9x3 wall is not acceptable due to the running crack between the ends of the top and
            middle rows:</p>
        <img src="q8.png">
        <p>Given the full dimensions (width and height) of a wall, <b>write a program which counts the number of ways of
                building the wall from 2x1 and 3x1 bricks, ensuring that there are no running cracks.</b></p>
        <p>Bricks are laid horizontally; 2x1 bricks and 3x1 bricks take up 2 or 3 units of a single row of the wall.</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <pre>public static int countBuildConfigurations(int wallWidth, int wallHeight)</pre>

        <h3>Sample Method Calls</h3>
        <p><code>countBuildConfigurations(9, 3)</code> returns <code>8</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>n</code>, the number of tests</li>
        <li>for each test, a single line containing the width and height of the wall, separated by spaces</li>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>
            <pre>1 <= <code>n</code> <= 10</pre>
        </li>
        <li>
            <pre>1 <= <code>width</code> <= 30</pre>
        </li>
        <li>
            <pre>1 <= <code>height</code> <= 12</pre>
        </li>
    </ul>
    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the number of ways to build the wall according to the conditions</li>
    </ul>
    <div>
        <h3>Sample Run</h3>
        
        <h4>Input:</h4>
        <pre>
            2
            9 3
            6 2
        </pre>

        <h4>Output:</h4>
        <pre>
            8
            2
        </pre>
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.*;

public class Question8 {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        for (int cases = keyboard.nextInt(); cases > 0; cases--) {
            System.out.println(countBuildConfigurations(keyboard.nextInt(), keyboard.nextInt()));
        }
        keyboard.close();
    }

    public static int countBuildConfigurations(int wallWidth, int wallHeight) {
        int numOfBuildConfigurations = 0;

        // TODO: set "numOfBuildConfigurations" to the number of ways to assemble the wall of given width and height
        // out of 2x1 and 3x1 bricks, with no running cracks

        return numOfBuildConfigurations;
    }
}
    </pre>
</script>