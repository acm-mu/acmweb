<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="calculator">Calculator</h1>
    <div>
        <p>Syrin successfully avoids any cyber attacks from Patrick, and The Four Amigos are now ready to leave the romantic
            city of Milan, Italy for the hectic metropolis of Tokyo, Japan. Jimothy read about the first digital calculator
            in his newest edition of <em>Old Math, Old Dudes, New Concepts</em>. He found out it was invented in Tokyo, and
            he wants to see how it was created. He arrives at the museum and gets to create his own digital calculator! What
            a dream!</p>

        <h3>Problem Description</h3>

        <p>Jimothy wants to test his digital calculator; however, he's a bit lazy. He decides to get Lemme to help him test
            it. The only problem is that Lemme is terrible at math. Lemme's "test cases" for Jimothy's calculator consist of
            simple arithmetic problems that use addition, subtraction, multiplication, and division of integers. Lemme
            writes down all the steps to solve each problem. Unfortunately, much of Lemme's work contains errors.</p>

        <p>To solve this problem, <strong>write a program that reads the evaluation steps of an arithmetic expression and
                identifies the location of the mathematical error (if an error exists).</strong></p>

        <p>Lemme isn't a <em>terrible</em> helper; Jimothy can expect the following from any test cases Lemme writes out:
        </p>

        <ul>
            <li>Lemme never makes more than one error in an entire problem's work.</li>
            <li>The only types of errors that can be made are:
                <ul>
                    <li>Calculation error: when a part of the arithmetic expression is miscalculated. (e.g., if <code>2 *
                            12</code> is evaluated to 28, instead of 24)</li>
                    <li>Order of Operations error: when the next step <em>should</em> be to evaluate one part of the
                        expression (or “subexpression”), but a different subexpression is evaluated instead.</li>
                </ul>
            </li>
        </ul>

        <p>Jimothy's calculator can handle Order of Operations, so Lemme's work should follow Order of Operations...
            Evaluate different types of subexpressions in the following order:</p>

        <ol>
            <li>First, evaluate subexpressions inside parentheses, evaluating the “deepest” (innermost) pair of parentheses
                first.</li>
            <li>Then, evaluate multiplication and division.</li>
            <li>Finally, evaluate addition and subtraction.</li>
        </ol>

        <p>Subexpressions of the same type and at the same “depth” should be evaluated from left-to-right. (e.g., in the
            expression <code>2 * 6 / 3 * 8</code>, the subexpression <code>2 * 6</code> should be evaluated first)</p>

        <p>The program should output the line and token number where the error occurs (using zero-based indexing). Tokens
            are individual parentheses, operators, or numbers. For example, the expression <code>(2 + 10 * 4) / 2</code> has
            the following 9 tokens:</p>

        <table>
            <tr>
                <td>Token Index:</td>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
            </tr>
            <tr>
                <td>Token:</td>
                <td>(</td>
                <td>2</td>
                <td>+</td>
                <td>10</td>
                <td>*</td>
                <td>4</td>
                <td>)</td>
                <td>/</td>
                <td>2</td>
            </tr>
        </table>

        <p>As a complete example, consider the evaluation steps shown below:</p>

        <pre>
            Line 0:      (2 + 10 * 4) / 2
            Line 1:      (2 + 36) / 2
            Line 2:      38 / 2
            Line 3:      19
        </pre>

        <p>The error is a calculation error: the subexpression <code>10 * 4</code> should evaluate to 40, not 36. The
            program should therefore identify that an error occurred at line 1, token 3 (the location of the underlined
            token: <code>36</code>).</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>

        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <ul>
            <li><code>tokens</code> provides all input lines for a test case, accessed with:
                <code>tokens[lineIndex][tokenIndex]</code></li>

            <li>Return the <code>errorLineIndex</code> and <code>errorTokenIndex</code>. If no errors occur in the input,
                return <code>0</code> for both of these outputs.</li>
        </ul>

        <h4>Java</h4>

        <p><code>public static int[] identifyError(String[][] tokens)</code> returns an <code>int</code> array:
            <code>{errorLineIndex, errorTokenIndex}</code>
            <h4>Python</h4>

            <p><code>def identifyError(tokens):</code> returning a tuple:<code>(errorLineIndex, errorRowIndex)</code></p>

            <h3>Sample Method Calls</h3>
            <h4>Java</h4>

            <pre><code>identifyError(new String[][] {
                new String[] { "(", "2", "+", "10", "*", "4", ")", "/", "2" },
                new String[] { "(", "2", "+", "36", ")", "/", "2" },
                new String[] { "38", "/", "2" },
                new String[] { "19" } });
            </code></pre>

            <p>returns an <code>int</code> array containing <code>{ 1, 3 }</code> because a calculation error occurs at line
                1, token 3.</p>

            <pre><code>identifyError(new String[][] {
                new String[] { "7", "+", "-2", "*", "3" },
                new String[] { "7", "+", "-6" },
                new String[] { "1" } });
            </code></pre>

            <p>returns an <code>int</code> array containing <code>{ 0, 0 }</code> because no mathematical error occurred in
                the input steps.</p>

            <h4>Python</h4>

            <pre><code>identifyError([
                ["(", "2", "+", "10", "*", "4", ")", "/", "2"],
                ["(", "2", "+", "36", ")", "/", "2"],
                ["38", "/", "2"],
                ["19"] ]);
            </code></pre>

            <p>returns <code>(1, 3)</code> because a calculation error occurs at line 1, token 3.</p>

            <pre><code>identifyError([
                ["7", "+", "-2", "*", "3"],
                ["7", "+", "-6"],
                ["1"] ]);
            </code></pre>
            <p>returns <code>(0, 0)</code> because no mathematical error occurred in the input steps.</p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>

    <p>Input consists of a number of test cases. The input begins with one line containing the number of test cases
        that will follow, <code>numCases</code>. For each test case, the input proceeds as follows:</p>

    <ul>
        <li>a line containing the number of evaluation lines that will follow as input, <code>numLines</code></li>
        <li>on each line, a single line of the arithmetic evaluation, progressing one step further from the previous
            line
            <ul>
                <li>any amount of whitespace may separate the tokens of a line</li>
                <li>no “extra” parentheses tokens will be included:
                    <ul>
                        <li>no parentheses will occur around an isolated number, e.g. <code>1 + (4) * 8</code></li>
                        <li>no double parentheses will occur, e.g. <code>2 * ((3 + 4))</code></li>
                        <li>no parentheses will occur around an entire evaluation line, e.g. <code>(2 + 4 *
                                        8)</code></li>
                    </ul>
                </li>
                <li>zero will never have a negative sign in front of it, e.g. <code>4 + -0 * 5</code></li>
            </ul>
        </li>
        <li>a blank line at the end of each test case</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>1 &lt;= <code>numCases</code> &lt;= 10</li>
        <li>2 &lt;= <code>numLines</code> &lt;= 100</li>
        <li>individual tokens will be integers between -1000 and 1000, inclusive</li>
        <li>expressions will never contain a “divide by zero” subexpression – that is, there will never appear a
            subexpression <code>X / 0</code>, where X is any number</li>
        <li>The following very special subexpressions will never appear in any part of input expressions:
            <ul>
                <li><code>1 * 1 * 1</code></li>
                <li><code>1 / 1 / 1</code></li>
                <li><code>0 * 0 * 0</code></li>
                <li><code>0 + 0 + 0</code></li>
                <li><code>0 - 0 - 0</code></li>
            </ul>
        </li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test case, a single line containing the line index and token index (both zero-based) of the
            error in the arithmetic evaluation, space-separated
            <ul>
                <li>if a test case has no mathematical error, output a line index and token index of zero</li>
            </ul>
        </li>
    </ul>

    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            3
            4
            (2 + 10 * 4) / 2
            (2 + 36) / 2
            38 / 2
            19

            7
            9 + (2 * (1 - 0) + 3 * (5 – 6))
            9 + (2 * 1 + 3 * (5 – 6))
            9 + (2 * 4 * (5 – 6))
            9 + (2 * 4 * -1)
            9 + (8 * -1)
            9 + -8
            1

            3
            7 + -2 * 3
            7 + -6
            1
        </pre>

        <h4>Output:</h4>
        <pre>
            1 3
            2 5
            0 0
        </pre>

        <h3>Sample Run Explanation</h3>

        <p>The sample run has 3 test cases.</p>

        <p>The first test case has 4 lines of evaluation. A calculation error occurs on line 1 at the token
            <code>36</code> (token index 3). The subexpression <code>10 * 4</code> in line 0 should’ve evaluated to 40,
            not 36.</p>

        <p>The second test case has 6 lines of evaluation. An Order of Operations error occurs on line 2 at the token
            <code>4</code> (token index 5). This error occurred because the subexpression <code>1 + 3</code> was
            evaluated before the higher priority subexpression <code>5 – 6</code>. The latter should’ve been evaluated
            first because it lies within a deeper set of parentheses.</p>

        <p>The third test case contains no calculation or Order of Operations errors, so "0 0" is printed.</p>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre>
import re
import sys

def is_operator(token):
    return token in ['+', '-', '*', '/']

def identifyError(tokens):
    """
    TODO: Implement your routine to read the evaluation steps
    of an arithmetic expression and identify the location of
    the mathematical error, if any.
    
    Parameters:
    param tokens, 2D String Array of tokens
    
    Returns:
    errorLineIndex, errorTokenIndex, the line and token index of the error
    """

    return (0, 0)


# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    cases = int(input())
    for _ in range(cases):
        # User Input #
        num_lines = int(input())
        tokens = []
        for i_line in range(num_lines):
            # split the line into tokens by using regex to match the space inbetween tokens
            line = input()
            line = re.sub('\\s+|(?<=[0-9\\+\\-\\*\\/\\(\\)])(?=[\\+\\-\\*\\/\\(\\)])|(?<=[\\+\\*\\/\\(\\)])(?=[0-9\\+\\-\\*\\/\\(\\)])|(?<=[0-9]\\-)(?=[0-9\\+\\-\\*\\/\\(\\)])', ' ', line)
            tokens.append(line.strip().split(' '))
            
            # check for the one case the regex fails to catch: negative sign versus minus sign (e.g. "1 * -1" should have "-1" be a token, but "1 -1" should have "-" and "1" be separate tokens)
            failures_fixed = 0
            for i_token in range(len(tokens[i_line]) - 1):
                if (not is_operator(tokens[i_line][i_token + failures_fixed])) and (tokens[i_line][i_token + failures_fixed] != '(') and (not is_operator(tokens[i_line][i_token + 1 + failures_fixed])) and (tokens[i_line][i_token + 1 + failures_fixed] != '(') and (tokens[i_line][i_token + 1 + failures_fixed][0] == '-'):
                    # perform correction
                    tokens[i_line][i_token + 1 + failures_fixed] = tokens[i_line][i_token + 1 + failures_fixed][1:]
                    tokens[i_line].insert(i_token + 1 + failures_fixed, '-')
                    failures_fixed += 1

        # Function Call
        error_location = identifyError(tokens)

        # Terminal Output #
        print('{} {}'.format(error_location[0], error_location[1]))

        try:
            input()
        except EOFError:
            pass
main()
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.Scanner;

public class ErrorCheck {

    /* It is unnecessary to edit the "main" method of each problem's provided code skeleton.
    * The main method is written for you in order to help you conform to input and output formatting requirements.
    */
    public static void main(String[] args) {
        Scanner kb = new Scanner(System.in);
        int cases = kb.nextInt();
        kb.nextLine();

        for (; cases > 0; cases--) {
            int lines = kb.nextInt();
            kb.nextLine();
            String[][] tokens = new String[lines][];
            for (int line = 0; line < lines; line++) {
                // split the line into tokens by using regex to match the space inbetween tokens
                tokens[line] = kb.nextLine().split(
                        "\\s+|(?<=[0-9\\+\\-\\*\\/\\(\\)])(?=[\\+\\-\\*\\/\\(\\)])|(?<=[\\+\\*\\/\\(\\)]|[0-9]\\-)(?=[0-9\\+\\-\\*\\/\\(\\)])");
                
                // check for the one case the regex fails to catch: negative sign versus minus sign (e.g. "1 * -1" should have "-1" be a token, but "1 -1" should have "-" and "1" be separate tokens)
                ArrayList<String> tokensList = null;
                int failuresFixed = 0;
                for (int iToken = 0; iToken < tokens[line].length - 1; iToken++)
                    if (!isOperator(tokens[line][iToken]) && !tokens[line][iToken].equals("(") && !isOperator(tokens[line][iToken + 1]) && !tokens[line][iToken + 1].equals("(") && tokens[line][iToken + 1].charAt(0) == '-') {
                        // perform correction
                        if (failuresFixed == 0) tokensList = new ArrayList<String>(Arrays.asList(tokens[line]));
                        tokensList.set(iToken + 1 + failuresFixed, tokens[line][iToken + 1].substring(1));
                        tokensList.add(iToken + 1 + failuresFixed, "-");
                        failuresFixed++;
                    }
                if (failuresFixed > 0)
                    tokens[line] = tokensList.toArray(new String[0]);
            }
            int[] errorLocation = identifyError(tokens);
            System.out.printf("%d %d\n", errorLocation[0], errorLocation[1]);
        }
        kb.close();
    }

    /* TODO: Implement your routine to read the evaluation steps
    * of an arithmetic expression and identify the location of
    * the mathematical error, if any.
    * @param tokens, 2D String Array of tokens
    * @return errorLineIndex, errorTokenIndex, the line and token index of the error
    */
    public static int[] identifyError(String[][] tokens) {
        int errorRow = 0;
        int errorTokenIndex = 0;

        return new int[] { errorRow, errorTokenIndex };
    }

    public static boolean isOperator(String s) {
        return s.equals("+") || s.equals("-") || s.equals("*") || s.equals("/");
    }
}
    </pre>
</script>