<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='A' /> -->
<meta yt-link='https://youtu.be/aJVDSbGPeSc' />

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="practiceproblem">Practice Problem</h1>

        <h3>Problem Description</h3>

        <p>Complete this problem to help us test if the competition software is working for all teams.</p>

        <blockquote>
            <p>Pay attention to these side-notes in this practice problem. They explain the format of this document, which matches the format of the actual competition problems.</p>
            <p>Problems descriptions end with a problem statement, which summarizes the task:</p>
        </blockquote>

        <p>To complete this practice problem, <strong>write a program that returns whether or not a given value is odd</strong>.</p>
        
        <blockquote>
            <p>Often times there will be extra clarifications after the problem statement explaining technical details.</p>
        </blockquote>

        <p>For this problem, zero is considered even. The program should indicate as such.</p>
    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>

        <blockquote>
            <p>For each problem, we provide a code "skeleton": a pre-made Java or Python program that handles the parsing and printing of program input and output (through the console). Simply edit the indicated method in the pre-made skeleton to solve the problem, and leave the rest of the skeleton unchanged.</p>
            <p>You are not required to use the code skeletons, but <strong>it is highly recommended</strong>. Each problem has strict input and output format requirements, and these skeletons can help you conform to those requirements.</p>
        </blockquote>

        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static boolean isOdd(int input)</code>

        <h4>Python</h4>
        <code>def is_odd(input):</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>isOdd(2)</code> returns boolean value <code>false</code></p>
        <p><code>isOdd(3)</code> return boolean value <code>true</code></p>

        <h4>Python</h4>
        <p><code>is_odd(2)</code> returns boolean value <code>False</code></p>
        <p><code>is_odd(3)</code> returns boolean value <code>True</code></p>

    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>

        <blockquote>
            <p>When you are done writing your program, you can test it out by entering input into the console in the format described in this section. This is the format that we will use and expect when we test your solution.</p>
        </blockquote>

        <h3>Console Input Format</h3>

        <ul>
            <li>the first input line contains, <code>t</code>, the number of tests
                
                <blockquote>
                    <p>Most problems will input multiple test cases during a single run of the program.</p>
                </blockquote>

            </li>

            <li>then, for each test, a single line containing the input number to check, <code>x</code></li>
        </ul>

        <h3>Assumptions</h3>

        <blockquote>
            <p>Our test data (used to judge your solution) will <em>always</em> adhere to the assumptions listed in this section of each problem.</p>
        </blockquote>

        <ul>
            <li>1 ≤ <code>t</code> ≤ 10</li>
            <li>-1000 ≤ <code>x</code> ≤ 1000</li>
            <li><code>x</code> will always be a whole number</li>
            <li>A value of <code>x</code> equal to zero is valid input; when <code>x</code> = 0, the program should output that <code>x</code> is even</li>
        </ul>

        <h3>Console Output Format</h3>

        <ul>
            <li>for each test, output a single line. Print "Odd" if <code>x</code> is true, otherwise print "Even"</li>
        </ul>

        <h3>Sample Run</h3>

        <blockquote>
            <p>Every test provides a sample set of input and expected output. When you run your completed program, typing in the data under "Input:" should yield the data under "Output:".</p>
            <p>For judging, we use additional test cases, besides those in the Sample Runs. Pay close attention to the "Assumptions" section of each problem, and think of other possible inputs to try out before submitting your solution.</p>
        </blockquote>

        <h4>Input:</h4>
        <pre>
4
1
2
-3
0</pre>
        <p>(4 is <code>t</code>, and the following values were different <code>x</code> cases)</p>

        <h4>Output:</h4>
        <pre>
Odd
Even
Odd
Even</pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
// Do NOT include a package statement at the top of your solution.

import java.util.Scanner;

public class PracticeProblem {

    /*
     * It is unnecessary to edit the "main" method of each problem's provided code
     * skeleton. The main method is written for you in order to help you conform to
     * input and output formatting requirements.
     */
    public static void main(String[] args) {
        Scanner kb = new Scanner(System.in);
        int numCases = kb.nextInt();
        for (int iCase = 0; iCase < numCases; iCase++) {
            int x = kb.nextInt();
            boolean xIsOdd = isOdd(x);
            if (xIsOdd) {
                System.out.println("Odd");
            } else {
                System.out.println("Even");
            }
        }
        kb.close();
    }

    public static boolean isOdd(int x) {
        boolean result = false;

        // Write some code here

        return result;
    }
}</pre>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
def is_odd(x):
    """
    TODO: Complete this function, which should return whether or not the input number is odd.

    Parameters:
        x --> (integer) the input number

    Returns:
        result --> (boolean) True if x is odd, and False otherwise
    """

    return result


# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    num_cases = int(input())

    for _ in range(num_cases):
        x = int(input())
        x_is_odd = is_odd(x)

        if x_is_odd:
            print('Odd')
        else:
            print('Even')


main()</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
def is_odd(x):
    """
    TODO: Complete this function, which should return whether or not the input number is odd.

    Parameters:
        x --> (integer) the input number

    Returns:
        result --> (boolean) True if x is odd, and False otherwise
    """

    return (x % 2 != 0)


# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    num_cases = int(input())

    for _ in range(num_cases):
        x = int(input())
        x_is_odd = is_odd(x)

        if x_is_odd:
            print('Odd')
        else:
            print('Even')


main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
// Do NOT include a package statement at the top of your solution.

import java.util.Scanner;

public class PracticeProblem {

    /*
     * It is unnecessary to edit the "main" method of each problem's provided code
     * skeleton. The main method is written for you in order to help you conform to
     * input and output formatting requirements.
     */
    public static void main(String[] args) {
        Scanner kb = new Scanner(System.in);
        int numCases = kb.nextInt();
        for (int iCase = 0; iCase < numCases; iCase++) {
            int x = kb.nextInt();
            boolean xIsOdd = isOdd(x);
            if (xIsOdd) {
                System.out.println("Odd");
            } else {
                System.out.println("Even");
            }
        }
        kb.close();
    }

    public static boolean isOdd(int x) {
        return (x % 2 != 0);
    }
}</pre>
</script>