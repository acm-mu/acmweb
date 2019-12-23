<?php 
require_once("../../header.php");
require_once("sidebar.php");
?>

<script type="text/template" id="description-template">
    <h1 id="page" page="bombkeypads">Bomb Keypads</h1>
    <div>
        <h3>Problem Description</h3>
        <p>Patrick is defusing a bomb, but the bomb-defusal manual is pretty confusing. He needs a program to help him
            figure it out.</p>
        <p>The bomb has a keypad with four <b>buttons</b>, labeled with a single letter each (for example, “A”, “P", “S”,
            “I”). The bomb manual covers many different defusal situations; it has a table of letters which could appear on
            these buttons. For a particular bomb, the letters on the four buttons can be found in exactly one <b>row</b> of
            this table.</p>

        <p>In order to defuse the bomb:</p>
        <ol>
            <li>Patrick must figure out which row of the table contains the four letters on his bomb.</li>
            <li>Then, he must press the buttons in the order that they appear in the matching row (from left to right)</li>
        </ol>
        <hr>
        <p>For example, suppose the bomb manual's table has three rows of letters:</p>
        <pre>
            HSOVIA
            WISAUP
            LOQUIX
        </pre>
        <p>Suppose Patrick looks on the bomb and sees that the four buttons are labeled "A", "P", "S", "I".</p>
        <p>Therefore, the matching row would be "WISAUP", since that is the only row containing all four button labels
            ("HSOVIA" is missing "P", and "LOQUIX" is missing "P", "S", and "A"). In addition, the correct order to press
            the buttons would be first “I”, then “S”, then “A”, and finally “P”, since that’s the order they appear in the
            matching row: "WISAUP".</p>
        <p>Given the bomb manual's table rows and the four buttons' letters, <b>write a program which gives the order of the
                button letters as they appear in the one matching row</b>.</p>
        <p>The bomb will always have four buttons. The manual can have any number of rows, but every row will contain six
            letters (two letters of the matching row will be unused for a particular bomb - in the above example, "W" and
            "U" are unused).
        </p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <pre>public static String getButtonOrder(String buttonLabels, String[] labelOrderGroups)</pre>

        <h3>Sample Method Calls</h3>
        <p><code>getButtonOrder("APSI", new String[] { "HSOVIA", "WISAUP", "LOQUIX" })</code> returns <code>"ISAP"</code>
        </p>
        <p><code>getButtonOrder("ABCD", new String[] { "UZOPBW", "LBQASC", "DABPON", "BCIWAD", "ZXCVBN" })</code> returns
            <code>"BCAD"</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>m</code>, the number of label groups</li>
        <li>the bomb manual table rows for all of the tests: one on each line, six uppercase letters without spaces
            <code>n</code> , the number of tests (button labels)</li>
        <li>for each test, one line containing the four button labels: four uppercase letters without spaces</li>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>
            <pre>1 <= <code>m</code> <= 300</pre>
        </li>
        <li>
            <pre>1 <= <code>n</code> <= 10</pre>
        </li>
        <li>each of the test cases (four button labels) will match exactly one of the table rows</li>
        <li>each of the test cases is made up of four unique button labels (e.g., "AABC" will not appear as a test case)
        </li>
        <li>each of the table rows is made up of six unique letters (e.g., "AABCDE" will not appear as a table row)</li>
    </ul>
    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line containing the order in which the buttons should be pressed: four uppercase letters
            in order without spaces</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            3
            HSOVIA
            WISAUP
            LOQUIX
            4
            APSI
            IOVH
            LQUX
            AIVO
        </pre>
        
        <h4>Output:</h4>
        <pre>
            ISAP
            HOVI
            LQUX
            OVIA
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

        public class Question5 {

            public static void main(String[] args) {
                Scanner keyboard = new Scanner(System.in);
                String[] tableRows = new String[keyboard.nextInt()];
                keyboard.nextLine();
                for (int i = 0; i < tableRows.length; i++)
                    tableRows[i] = keyboard.nextLine();

                int cases = keyboard.nextInt();
                keyboard.nextLine();
                for (; cases > 0; cases--) {
                    String[] tableRowsCopyForThisTest = new String[tableRows.length];
                    System.arraycopy(tableRows, 0, tableRowsCopyForThisTest, 0, tableRows.length);

                    System.out.println(getButtonOrder(keyboard.nextLine(), tableRowsCopyForThisTest));
                }

                keyboard.close();
            }

            public static String getButtonOrder(String buttonLabels, String[] tableRows) {
                String orderedButtonLabels = buttonLabels;

                // TODO: reorder "orderedButtonLabels" to contain the button labels in the order that they appear in the one
                // matching row of "tableRows" (the row that contains all four of the button labels)

                return orderedButtonLabels;
            }
        }
    </pre>
</script>