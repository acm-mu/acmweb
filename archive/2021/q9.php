<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='J' /> -->

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="aharrowingexpedition">A Harrowing Expedition</h1>
    
        <h3>Problem Description</h3>

        <p>Dennis is working at a major aerospace company planning multiple trips to send people to live on Mars. Sometimes, one of these missions has to be aborted due to bad landing conditions on Mars. Dennis has been working on a method to find the statistical probability of multiple successful missions to Mars. His superiors have asked him to find the probability of <code>x</code> success over <code>n</code> tries given a <code>p</code>% landing rate for the brave crew. Write a function to calculate this probability.</p>
        <p>To find the chance of exactly <code>x</code> number of successes, we can use the binomial distribution.The binomial distribution can be thought of as the probability of an <code>x</code> success in an experiment that is occurring <code>n</code> times with each success having a probability of <code>p</code>.</p>
        <p>To solve this problem, <strong>write a program that computes the probability using the binomial distribution given x, n, and p.</strong></p>
        
        <blockquote>
            <p>Note: In Java, you may find it helpful to use the BigDecimal API. Documentation for the BigDecimal API can be found <a href="https://docs.oracle.com/javase/8/docs/api/java/math/BigDecimal.html">here</a>.</p>
            <p>Note: In Python, you may find it helpful to use the Decimal API. Documentation for the Decimal API can be found <a href="https://docs.python.org/3/library/decimal.html">here</a></p>
        </blockquote>
    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>

        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static BigDecimal binomial(int x, int n, double p)</code>

        <h4>Python</h4>
        <code>def binomial(x, n, p)</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>binomial(6, 10, 0.5)</code> returns <code>0.20508</code></p>

        <h4>Python</h4>
        <p><code>binomial(6, 10, 0.5)</code> returns <code>0.20508</code></p>

    </div>

    <h4>

    <div>
        <h2>Testing Your Program from the Console</h2>

        <h3>Console Input Format</h3>
        <ul>
            <li>The first line contains the number of test cases, <code>t</code></li>
            <li>For each test, the first line represents <code>x</code>, the second line represents <code>n</code>, and the third line represents <code>p</code></li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
            <li><code>x</code> &gt; 0</li>
            <li><code>n</code> &gt; 0</li>
            <li><code>x</code> &lt; <code>n</code></li>
            <li>1 &gt; <code>p</code> &gt; 0</li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
            <li>For each test, a single line with the output truncated to 5 decimal places</li>
        </ul>

        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
2
6 
10 
0.5
10
20
0.25</pre>

	    <h4>Output:</h4>
        <pre>
0.20508
0.00992</pre>

        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
"""
TODO: calculate the probability of exactly x successes given n trials with probability of p given the following parameters:

x --> (integer) number of successes 
n --> (integer) number of trials
p --> (float) probability of success

Returns:
a Decimal containing the probability of exactly x successes out of n trials with a probability of p

Note: In Python, you may find it helpful to use the Decimal API.  Documentation for the Decimal API can be found here: https://docs.python.org/3/library/decimal.html

"""
def binomial(x, n, p):

    # Write your solution here

    return 0

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        # User Input #
        x = int(input())
        n = int(input())
        p = float(input())

        # Function Call
        result = binomial(x, n, p)

        # Terminal Output #
        print(float("{:.5f}".format(result)))

main()</pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.math.BigDecimal;
import java.util.Scanner;

public class AHarrowingExpedition {

    /**
    * TODO: calculate the probability of exactly x successes given n trials with probability of p given the following parameters:
    * 
    * Note: Documentation for the BigDecimal API can be found here: https://docs.oracle.com/javase/8/docs/api/java/math/BigDecimal.html
    * 
    * @param x --> (integer) number of successes 
    * @param n --> (integer) number of trials
    * @param p --> (double) probability of success
    *
    * @return new BigDecimal --> a BigDecimal containing the probability of exactly x successes out of n trials with a probability of p
    */
    public static BigDecimal binomial(int x, int n, double p) {

        // Write your solution here

        return new BigDecimal("1");
	}

    /*
    * It is unnecessary to edit the "main" method of each problem's provided code
    * skeleton. The main method is written for you in order to help you conform to
    * input and output formatting requirements.
    */
    public static void main(String[] args) {
		Scanner in = new Scanner(System.in);

        int cases = in.nextInt();
        for (; cases > 0; cases--) {
			// User Input
            int x = in.nextInt();
            int n = in.nextInt();
			double p = in.nextDouble();

            // Function Call
            BigDecimal returnedVal = binomial(x, n, p);

			// Output
			System.out.printf("%.5f\n", returnedVal);
	
		}
	}

}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
import decimal 
"""
TODO: calculate the probability of exactly x successes given n trials with probability of p given the following parameters:

x --> (integer) number of successes 
n --> (integer) number of trials
p --> (float) probability of success

Returns:
a Decimal containing the probability of exactly x successes out of n trials with a probability of p

Note: In Python, you may find it helpful to use the Decimal API.  Documentation for the Decimal API can be found here: https://docs.python.org/3/library/decimal.html

"""
def binomial(x, n, p):
    nChooseRNumerator = decimal.Decimal('1')
    nChooseRDenominator = decimal.Decimal('1')

    counter=n
    while(counter > (n-x)):
        nChooseRNumerator = nChooseRNumerator * counter
        counter=counter-1
    counter=x
    while(counter > 0):
        nChooseRDenominator = nChooseRDenominator * counter
        counter=counter-1
    nChooseR = decimal.Decimal('1')
    nChooseR =  nChooseRNumerator / nChooseRDenominator
    successes = pow(p, x)
    failures = pow(1 - p, n - x)
    result = nChooseR * decimal.Decimal(successes)
    result = result * decimal.Decimal(failures)

    return result

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        # User Input #
        x = int(input())
        n = int(input())
        p = float(input())

        # Function Call
        result = binomial(x, n, p)

        # Terminal Output #
        print(float("{:.5f}".format(result)))

main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.math.BigDecimal;
import java.util.Scanner;

public class AHarrowingExpedition {
	
	public static BigDecimal binomial(int x, int n, double p) {
		BigDecimal nChooseRNumerator = new BigDecimal("1");
		BigDecimal nChooseRDenominator = new BigDecimal("1");
		for (int i = n; i > (n - x); i--) {
			nChooseRNumerator = nChooseRNumerator.multiply(BigDecimal.valueOf(i));
		}
		for (int i = x; i > 0; i--) {
			nChooseRDenominator = nChooseRDenominator.multiply(BigDecimal.valueOf(i));
		}
		BigDecimal nChooseR = nChooseRNumerator.divide(nChooseRDenominator);
		double successes = Math.pow(p, x);
		double failures = Math.pow(1 - p, n - x);
		BigDecimal result = nChooseR.multiply(BigDecimal.valueOf(successes));
		result = result.multiply(BigDecimal.valueOf(failures));
		return result;
	}
	
	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);

        int cases = in.nextInt();
        for (; cases > 0; cases--) {
			// User Input
            int x = in.nextInt();
            int n = in.nextInt();
			double p = in.nextDouble();

            // Function Call
            BigDecimal returnedVal = binomial(x, n, p);

			// Output
			System.out.printf("%.5f\n", returnedVal);
	
		}
	}
}</pre>
</script>