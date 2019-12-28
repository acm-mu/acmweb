<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="piglatin">Umericnay Pig Latin</h1>
    <div>
        <h3>Problem Description</h3>
        <p>To help Yakob encrypt his contact book, convert a set of 7-digit phone numbers using these pig-latin-inspired
            rules:
        </p>
        <ul>
            <li>If the number ends with an odd one’s digit, move the one’s digit to the left-hand side of the number, and
                add a 7 to the left-hand side of the number. For example:</li>
            <ul>
                <li>2342895:</li>
                <ul>
                    <li>First move “5” to the left: 5234289</li>
                    <li>Then add a “7” to the left: 75234289</li>
                </ul>
                <li>1084933 becomes 73108493</li>
            </ul>
            <li>If the number ends with an even one’s digit, instead just add two sevens to the left-hand side of the
                number:
            </li>
            <ul>
                <li>1234568 becomes 771234568</li>
                <li>29380 becomes 770029380</li>
                <ul>
                    <li>Note that the numbers can contain and begin with zeroes! The input numbers should always be
                        interpreted
                        as
                        seven digits (e.g., "123" should be processed as "0000123". See the console input format for further
                        examples).</li>
                </ul>
            </ul>
        </ul>
        <p>To solve this problem, <b>write a program which converts a 7-digit number to "numeric pig latin"</b>.</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <pre>public static int convertToPigLatin(int input)</pre>

        <h3>Sample Method Calls</h3>
        <p><code>convertToPigLatin(8675309)</code> returns <code>79867530</code></p>
        <p><code>convertToPigLatin(1234568)</code> returns <code>771234568</code></p>
        <p><code>convertToPigLatin(194825)</codE> returns <code>75019482</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>n</code>, the number of tests</li>
        <li>for each test, a single line containing the input number, <code>x</code>
            the input number will not have leading zeroes</li>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>
            <pre>1 <= <code>n</code> <= 10</pre>
        </li>
        <li>
            <pre>0 <= <code>x</code> <= 9999999</pre>
        </li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the pig latin conversion of x</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            3
            8675309
            1234568
            194825
        </pre>

        <h4>Output:</h4>
        <pre>
            79867530
            771234568
            75019482
        </pre>
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.*;

public class Question3 {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        for (int cases = keyboard.nextInt(); cases > 0; cases--) {
            System.out.println(convertToPigLatin(keyboard.nextInt()));
        }
        keyboard.close();
    }

    public static int convertToPigLatin(int input) {
        int convertedInput = 0;

        // TODO: set "convertedInput" to the numeric pig latin version of "input"

        return convertedInput;
    }
}
    </pre>
</script>