<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="lcmlcm">LCM LCM</h1>

    <div>
        <h3>Problem Description</h3>

        <p>Lom and Chaz are ready to begin cooking and are faced with a number of refrigerators containing ingredients for
            their
            dishes. The organizers of the cooking competition, being the number lovers they are, printed two numbers on each
            fridge, and made a strange rule for the chefs to follow: the chefs may grab no more ingredients than the
            <em>least
                common multiple</em> of the two numbers on each fridge.</p>

        <p>The least <em>common multiple</em> of two numbers is the smallest positive number that is a multiple of both
            numbers.
        </p>

        <p>Since Lom and Chaz’s brains are far too consumed with cooking knowledge to understand math, they need your help.
            <b>Write a function which takes two integers and returns the least common multiple of them.</b></p>

    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre class="prettyprint">public static int leastCommonMultiple(int a, int b);</pre>

        <h4>Python</h4>
        <pre class="prettyprint">def leastCommonMultiple(a, b):</pre>

        <h3>Sample Method Calls</h3>

        <p><code>leastCommonMultiple(6, 7);</code> returns <code>42</code></p>
        <p><code>leastCommonMultiple(4, 4);</code> returns <code>4</code></p>
        <p><code>leastCommonMultiple(100, 125);</code> returns <code>500</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>The first line will contain a single integer T, the number of test cases to follow.</li>
        <li>T lines follow, eaching containing integers A and B, seperated by a space, indicating a test case of a grid with
            N columns and M rows.</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>A and B are positive values between 0 and 1000</li>
        <li><code>1 &lt; T &lt; 10</code></li>
    </ul>

    <h3>Console Output Format</h3>
    <p>The function leastCommonMultiple should return a single integer value, the least common multiple of a and b.</p>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            3
            6 7
            4 4
            100 125
        </pre>
        <h4>Output:</h4>
        <pre>
            42
            4
            500
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class solution  {
    // The main method handles standard input and output
    // You should not change this method
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int     t       = scanner.nextInt();

        for (int i = 0; i < t; i++) {
            int a = scanner.nextInt();
            int b = scanner.nextInt();
            System.out.println(leastCommonMultiple(a, b));
        }
    }

    public static int gcd(int a, int b) {
        return b == 0 ? a : gcd(b, a % b);
    }

    public static int leastCommonMultiple(int a, int b) {
        return a * (b / gcd(a, b));
    }
}
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class QuestionTwo {
    // The main method handles standard input and output
    // You should not change this method
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int     t       = scanner.nextInt();

        for (int i = 0; i < t; i++) {
        int a = scanner.nextInt();
        int b = scanner.nextInt();
        System.out.println(leastCommonMultiple(a, b));
        }
    }

    public static int leastCommonMultiple(int a, int b) {
        //TODO 
        return 0;
    }
}
    </pre>
</script>