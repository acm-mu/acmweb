<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='A' /> -->

<script type="text/template" id="description-template">
	<h1 id="page" page="outofwater">Out of Water!</h1>
    <div>
        <p>Space Captain Zap B has been traveling the galaxy for several years. However, his water supplies are exhausted and he needs to find a place to land. Using his ship, he was able to identify ten planets that have the necessary elements to replenish his reserves. Due to the ship traveling at the speed of light, it's imperative Zap knows exactly how long he should travel towards a planet. Too short of a time and Zap would undershoot. Too long and Zap would overshoot. Given these planets, their distances calculate how many seconds Zap needs to travel to reach each planet based on his starting position.</p>
        <p>To solve this problem, <strong>calculate and sort (smallest value first) the time (in minutes) it will take Captain Zap to get to each planet.</strong></p>
        
        <blockquote>
            <p>Note: The speed of light is 300000 <em>km/s</em></p>
            <p>Note: Use <em>t = d/s</em> where <em>t</em> is the time, <em>d</em> is the distance, and <em>s</em> is the speed</p>
            <p>Note: Round to the nearest minute.</p>
        </blockquote>
    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>

        <p>Enter your solution in the body of this method in the given code skeleton:</p>
	
        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static int[] distanceFinder(int[] distances)</code>

        <h4>Python</h4>
        <code>def distanceFinder(distances):</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
	    <p><code>distanceFinder(new int[]{ 23854982, 139892309, 599023903, 9859390, 498439803, 98439309, 18182399, 314568764, 3828989, 83828938})</code> returns <code>[ 0, 1, 1, 1, 5, 5, 8, 17, 28, 33 ]</code></p>

        <h4>Python</h4>
        <p><code>distanceFinder([23854982, 139892309, 599023903, 9859390, 498439803, 98439309, 18182399, 314568764, 3828989, 83828938])</code> returns <code>[ 0, 1, 1, 1, 5, 5, 8, 17, 28, 33 ]</code></p>
    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>
        <h3>Console Input Format</h3>
        <ul>
            <li>The first line contains the number of test cases, <code>t</code></li>
            <li>A single line containing each distance followed by a space</li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
            <li>The number of planets is always <code>10</code></li>
            <li>All distances will be ≥ 0</li>
            <li>All distances are given in kilometers</li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
            <li>A single line with the sorted output separated by a space</li>
        </ul>

        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
1
23854982 139892309 599023903 9859390 498439803 98439309 18182399 314568764 3828989 83828938</pre>

        <h4>Output:</h4>
        <pre>
0 1 1 1 5 5 8 17 28 33</pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class OutOfWater {

    /**
    * TODO: Calculate and sort (smallest value first) the time (in minutes) it will take Captain Zap to get to each planet given the following parameters:
    *
    * Parameters:
    * @param distances --> (integer array) the distance (in km) needed to reach each planet
    *
    * Returns:
    * @returns a sorted array of integers (from least to greatest) representing the number of minutes it will take to reach each planet
    *
    * NOTE:  The speed of light is 300000 km/s
    * NOTE:  Use  = d/s where t is the time, d is the distance, and s is the speed
    * NOTE:  Round the nearest minute
    */
    public static int[] distanceFinder(int[] distances) {

        // Write your solution here

        return new int[0];
    }

    /*
    * It is unnecessary to edit the "main" method of each problem's provided code
    * skeleton. The main method is written for you in order to help you conform to
    * input and output formatting requirements.
    */
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            // User Input
            String[] inp = in.nextLine().split(" ");
            int[] distances = new int[10];
            for (int i = 0; i < inp.length; i++) {
                distances[i] = Integer.parseInt(inp[i]);
            }

            // Function Call
            int[] returnedVals = distanceFinder(distances);

            // Terminal Output
            for (int i = 0; i < returnedVals.length; i++){
            	if (i != returnedVals.length - 1){
                    System.out.print(returnedVals[i] + " ");
                } else {
                    System.out.print(returnedVals[i]);
                }
            }
            System.out.println("");
        }

        in.close();
    }

}</pre>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
    """
TODO: Calculate and sort (smallest value first) the time (in minutes) it will take Captain Zap to get to each planet given the following parameters:

Parameters:
distances --> (integer array) the distance (in km) needed to reach each planet

Returns:
a sorted array of integers (from least to greatest) representing the number of minutes it will take to reach each planet

NOTE:  The speed of light is 300000 km/s
NOTE:  Use  = d/s where t is the time, d is the distance, and s is the speed
NOTE:  Round the nearest minute
"""
def distanceFinder(distances):

    # Write your solution here

    return []

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():

    for _ in range(int(input())):
        # User Input #
        inp = input().split(" ")
        distances = []

        for i in inp:
            distances.append(int(i))

        # Function Call
        returnedVals = distanceFinder(distances)

        # Terminal Output #
        print(*returnedVals, sep=' ')

main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;
import java.util.Arrays;

public class OutOfWater {

    /*
    * It is unnecessary to edit the "main" method of each problem's provided code
    * skeleton. The main method is written for you in order to help you conform to
    * input and output formatting requirements.
    */
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            // User Input
            String[] inp = in.nextLine().split(" ");
            int[] distances = new int[10];
            for (int i = 0; i < inp.length; i++) {
                distances[i] = Integer.parseInt(inp[i]);
            }

            // Function Call
            int[] returnedVals = distanceFinder(distances);

            // Terminal Output
            for (int i = 0; i < returnedVals.length; i++){
            	if (i != returnedVals.length - 1){
                    System.out.print(returnedVals[i] + " ");
                } else {
                    System.out.print(returnedVals[i]);
                }
            }
            System.out.println("");
        }

        in.close();
    }

    /**
    * TODO: Calculate and sort (smallest value first) the time (in minutes) it will take Captain Zap to get to each planet given the following parameters:
    *
    * Parameters:
    * @param distances --> (integer array) the distance (in km) needed to reach each planet
    *
    * Returns:
    * @returns a sorted array of integers (from least to greatest) representing the number of minutes it will take to reach each planet
    *
    * NOTE:  The speed of light is 300000 km/s
    * NOTE:  Round the nearest minute
    */
    public static int[] distanceFinder(int[] distances) {
        int[] finalwork = new int[10];
        double x = 0;
        double y = 0;
        for (int i = 0; i < distances.length; i++){
        x = distances[i];
        y = x / 300000;
        y = y / 60;
        finalwork[i] = (int)Math.round(y);
        }
        Arrays.sort(finalwork);
        
        return finalwork;
    }
}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
"""
TODO: Calculate and sort (smallest value first) the time (in minutes) it will take Captain Zap to get to each planet given the following parameters:

Parameters:
distances --> (integer array) the distance (in km) needed to reach each planet

Returns:
a sorted array of integers (from least to greatest) representing the number of minutes it will take to reach each planet

NOTE:  The speed of light is 300000 km/s
NOTE:  Round the nearest minute
"""
def distanceFinder(distances):
    lista = list()
    for ele in distances:
        y = ele / 300000
        y = y / 60
        lista.append(round(y))
    lista.sort()
    return lista

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():

    for _ in range(int(input())):
        # User Input #
        inp = input().split(" ")
        distances = []

        for i in inp:
            distances.append(int(i))

        # Function Call
        returnedVals = distanceFinder(distances)

        # Terminal Output #
        print(*returnedVals, sep=' ')

main()</pre>
</script>