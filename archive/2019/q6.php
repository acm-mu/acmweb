<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="basebounds">Base Bounds</h1>

        <p>Clyle was able to replicate the stats for the Dunedin Highlanders and was offered a job after he graduates from
            Marquette University. The Four Amigos are now on their way from Auckland, New Zealand to Beijing, China.</p>

        <p>They decide to visit an old archeological dig site. Jimothy read in his magazine, <em>Old Math, Old Dudes, New
                Concepts</em>, about a Chinese book called the <em>I Ching</em>.</p>

        <p>The <em>I Ching</em>, also called <em>The Book of Changes</em> is an ancient Chinese manuscript about philosophy,
            religion, literature, and art. While digging at the site, The Four Amigos discover what they believe to be a
            rough draft of <em>The Book of Changes</em>. Jimothy can't believe his eyes, and he tells one of the site
            managers, Cassley. </p>

        <h3>Problem Description</h3>

        <p>Cassley now needs The Four Amigos help for her research. Famously, <em>The Book of Changes</em> makes use of a
            base-64 numbering system. Cassley believes the rough draft, however, uses a base-62 numbering system. She has
            devised a way to compare similarities between the number bases, but they need a way to generate the data to make
            those comparisons quickly.</p>

        <p>To help Cassley and solve this problem, <strong>write a program that will take an integer in decimal (base-10), a
                lower bound, and an upper bound and lists the decimal number in every base between (and including) the
                bounds.</strong></p>

        <p>The program should implement base conversion manually, rather than simply calling native methods for base
            conversion such as Java's <code>Integer.toString(int x, int radix)</code>.</p>

        <p>The possible digits for higher bases start with the numerical digits (0-9), then the capital letters (A-Z), then
            the lowercase letters (a-z). For example, base 40 may make use of the digits:
            <code>0,1,2,...,8,9,A,B,C,...,Y,Z,a,b,c,d</code>.</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre>public static String[] multBaseConverter(int base10, int lwrBnd, int uprBnd)</pre>

        <h4>Python</h4>
        <pre>def multBaseConverter(base10, lwrBnd, uprBnd):</pre>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>multBaseConverter(10, 2, 4)</code>
            returns a <code>String</code> array containing the value <code>10</code> in bases 2, 3, and 4:
            <code>{"1010", "101", "22"}</code></p>

        <h4>Python</h4>
        <p><code>multBaseConverter(10, 2, 4)</code>
            returns a list containing the value <code>10</code> in bases 2, 3, and 4: <code>["1010", "101", "22"]</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first line contains <code>t</code>, the number of test cases</li>
        <li>for each test case, a single line contains the following three integer inputs, space-separated:
            <ul>
                <li><code>base10</code>, the number in decimal (base 10)</li>
                <li><code>lwrBnd</code>, the lowest base to which <code>base10</code> should be converted</li>
                <li><code>uprBnd</code>, the highest base to which <code>base10</code> should be converted</li>
            </ul>
        </li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>0 &lt;= <code>t</code> &lt;= 10</li>
        <li>2 &lt;= <code>lwrBnd</code> &lt;= 62</li>
        <li>2 &lt;= <code>uprBnd</code> &lt;= 62</li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the output numbers, comma-separated and in brackets (e.g., print "[1010, 101,
            22]")</li>
    </ul>
    <div>
        <h3>Sample Runs</h3>

        <h4>Input:</h4>
        <pre>
            2
            10 2 4
            100 15 20
        </pre>

        <h4>Output:</h4>
        <pre>
            [1010, 101, 22]
            [6A, 64, 5F, 5A, 55, 50]
        </pre>

        <h3>Sample Run Explanation</h3>
        <p>There are two tests in the sample run (<code>t</code> = 2).</p>

        <p>The first test formats the value <code>10</code> in bases 2, 3, and 4. The second test formats the value
            <code>100</code> in bases 15, 16, 17, 18, 19, and 20.</p>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre>
def multBaseConverter(base10, lwrBnd, uprBnd):
    """
    TODO: Complete this method which converts a decimal to all bases between two bounds

    Parameters:
    base10 --> the number to be converted, given in decimal (base 10)
    lwrBnd --> the lower bound of bases to which base10 will be converted to
    uprBnd --> the upper bound of bases to which base10 will be converted to

    Returns:
    allBases --> an array of base10 converted to bases between the lwrBnd and uprBnd

    Note: lwrBnd and uprBnd are INCLUDED in the final returned result.
    Note: Don't worry about null elements in the return array. The main method removes all null elements.        
    """

    # Variable Declarations #
    allBases = []

    return allBases


# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    
    for _ in range(int(input())):
        # User Input #
        inp = [int(s) for s in input().split(" ")]

        # Terminal Output #
        print("[%s]" % (', '.join(multBaseConverter(inp[0], inp[1], inp[2])))) # Function call

main()
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.Scanner;

public class BaseConverter {

    /*
        * It is unnecessary to edit the "main" method of each problem's provided code
        * skeleton. The main method is written for you in order to help you conform to
        * input and output formatting requirements.
        */
    public static void main(String[] args) {

        /* Variable Declarations */
        int num, lwrBnd, uprBnd;
        ArrayList<String> outputList;
        Scanner in = new Scanner(System.in);

        int cases = in.nextInt();
        for (; cases > 0; cases--) {
            /* User Input */
            num = in.nextInt();
            lwrBnd = in.nextInt();
            uprBnd = in.nextInt();

            /* Function call */
            /* Converts the output of multBaseConverter to an ArrayList outputList. */
            outputList = new ArrayList<String>(Arrays.asList(multBaseConverter(num, lwrBnd, uprBnd)));
            /* Gets rid of any null elements in the ArrayList. */
            outputList.removeAll(Collections.singleton(null));

            /* Terminal Output */
            System.out.println(outputList.toString());
        }
        in.close();
    }

    /**
        * TODO: Complete the following method which converts a decimal to all bases between two bounds
        * 
        * Note: lwrBnd and uprBnd are INCLUDED in the final returned result. 
        * Note: Don't worry about null elements in the return array. The main method removes all null elements.
        * 
        * @param base10 --> the number to be converted, given in decimal (base 10)
        * @param lwrBnd --> the lower bound of bases to which base10 will be converted to
        * @param uprBnd --> the upper bound of bases to which base10 will be converted to
        * @return allBases --> an array of base10 converted to bases between the lwrBnd and uprBnd
        */
    public static String[] multBaseConverter(int base10, int lwrBnd, int uprBnd) {
        String[] allBases = new String[63];

        return allBases;
    }
}    
    </pre>
</script>