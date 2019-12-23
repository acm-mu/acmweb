<?php 
require_once("../../header.php");
require_once("sidebar.php");
 ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="practiceproblem">Practice Problem</h1>
    <div>
        <h3>Problem Description</h3>
        <p>Complete this problem to help us test if the competition software is working for all teams.</p>
        <blockquote>
            <p>Pay attention to the side-notes in this document, which explain the format of this document and the format of
                the actual competition problems.</p>
        </blockquote>
        <p>To complete this practice problem, <b>write a program that adds one (1) to every input value</b>.</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <blockquote>
            <p>For each problem, we provide a code "skeleton": a pre-made Java program which handles the parsing and
                printing of program input and output (through the console). To complete the problem, you can simply edit
                this pre-made skeleton to perform the task of the problem.</p>
            <p>You are not required to use the code skeletons, but it is highly recommended.</p>
        </blockquote>
        <p>For this problem, enter your solution in the body of this method in the given code skeleton (where it says
            "TODO"):
        </p>

        <h3>Method Signature</h3>
        <pre>public static int addOne(int input)</pre>

        <h3>Sample Method Calls</h3>
        <p><code>addOne(41)</code> returns <code>42</code></p>
        <p><code>addOne(0)</code> returns <code>1</code></p>
    </div>

    <h2>Testing Your Program from the Console</h2>
    <blockquote>
        <p>When you are done writing your program, you can test it out by entering input into the console in the format
            described in this section. This is the format that we will use and expect when we test your solution.</p>
    </blockquote>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>n</code>, the number of test cases</li>
        <li>for each test case, a single line containing the number, <code>input</code> (this is the number to which you
            should <code>addOne</code>)</li>
    </ul>

    <h3>Assumptions</h3>
    <blockquote>
        <p>Our test data will always adhere to the assumptions listed in this section of each problem.</p>
    </blockquote>
    <ul>
        <li>1 <= <code>n</code>
                <= 10</li> <li><code>input</code> >= 0</li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test case, a single line with one (1) plus the input number, <code>input</code></li>
    </ul>
    <div>
        <h3>Sample Run</h3>
        <blockquote>
            <p>
                Try this test input and check that your completed program produces the expected output. For each problem,
                before
                submitting your solution, try a couple tests that you make up (the test cases in this section are not the
                only
                ones your
                program will need to handle; we have additional "hidden" test data we use to test your solutions).
            </p>
        </blockquote>
        <h4>Input:</h4>
        <pre>
            3
            41
            0
            111
        </pre>
        <h4>Output:</h4>
        <pre>
            42
            1
            112
        </pre>
    </div>
</script>

<script type="text/template" id="python-skeleton">
    <pre>

    </pre>
</script>

<script type="text/template" id="java-skeleton">
    <pre>
        import java.util.*;

        public class Question0 {

            public static void main(String[] args) {
                Scanner keyboard = new Scanner(System.in);
                for (int cases = keyboard.nextInt(); cases > 0; cases--) {
                    int input = keyboard.nextInt();
                    int output = addOne(input);
                    System.out.println(output);
                }
                keyboard.close();
            }

            public static int addOne(int input) {
                int output = 0;

                /*
                * TODO: Change output to be "input + 1".
                */
                
                return output;
            }
        }
    </pre>
</script>