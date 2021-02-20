<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="exercise2">Exercise 2</h1>

    <div>

        <h3>Problem Description</h3>

        <p>Print the maximum value and number of entries equal to this maximum for each case as shown below.
        </p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <blockquote>
        <p>When you are done writing your program, you can test it out by entering input into the console in the format described in this section.</p>
    </blockquote>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first input line contains, <code>t</code>, the number of tests</li>
    </ul>

    <blockquote>
        <p>Most problems will input multiple test cases during a single run of the program.</p>
    </blockquote>
    <ul>
        <li>then, for each test, the number of values for the test followed by the list of values</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>0 &le; <code>t</code> &le; 2,147,483,647 (the max number an <code>int</code> in Java can hold)</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
5
3 0 2 1
5 12 12 14 14 14
6 -2 -4 -4 -3 -3 -4
1 100
8 10 11 12 11 12 11 10 9
        </pre>

        <h4>Output:</h4>
        <pre>
Case 1: 2,1
Case 2: 14,3
Case 3: -2,1
Case 4: 100,1
Case 5: 12,2
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Arrays;
import java.util.Scanner;

public class Ex2 {
    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        int num_cases = keyboard.nextInt();
        int[][] cases = new int[num_cases][];

        // Output wants cases numbered from 1
        for (int c = 0; c < num_cases; c++) {
            int num_vals = keyboard.nextInt();
            cases[c] = new int[num_vals];
            for (int i = 0; i < num_vals; i++)
                cases[c][i] = keyboard.nextInt();
        }

        int[][] res = run(cases);
        for (int i = 0; i < res.length; i++)
            System.out.println("Case " + (i + 1) + ": " + res[i][0] + "," + res[i][1]);
    }

    public static int[][] run(int[][] cases) {
        int[][] maxs = new int[cases.length][2];

        for (int i = 0; i < cases.length; i++) {
            int c = Arrays.stream(cases[i]).max().getAsInt();
            maxs[i][0] = c;
            maxs[i][1] = (int) Arrays.stream(cases[i]).filter(value -> value == c).count();
        }

        return maxs;
    }
}
</pre>
</script>