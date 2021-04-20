<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='A' /> -->
<meta yt-link='https://youtu.be/5IsCt4NytDM' />

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="packingformars">Packing for Mars</h1>
    
        <p>You and your friend Elon are really into astronomy and space travel. Matter of fact, you two have created a company together to travel to Mars called OrbitalExpress, or OE for short. OE is getting ready to launch on its first route to the Red Planet and they want to advise their passengers what type of clothes to pack. </p>
		<p>Because of atmospheric differences, there is no great way to figure out the temperature on the planet using our current standards for temperature (Celsius and Fahrenheit). Elon has done enough research and created a new unit of measure for temperature on the Martian Planet. He calls it Martian Units, or MU for short. He has also developed an equivalent measure for here on Earth called Global Overtemps, or GO for short.</p>
		<p>At first, Elon thought these two units were standardized and were a direct conversion. But you, being the math wizard you are, realized that they are <strong>not</strong> standardized and need some sort of conversion tool.</p>
		
        <h3>Problem Description</h3>
		<p>Without some sort of converter, there is no way to figure out what temperature it will be on Mars.</p>
		<p>You do some research and find that Martian Units can be converted to Global Overtemps rather easily following this formula:</p>
		
        <p><em>go = ( mu × 3/4 ) + 34</em></p>
		<p>With <em>go</em> representing the resulting temperature in Global Overtemps, and <em>mu</em> being the inputted temperature in Martian Units.</p>
		<p>To solve this problem, <strong>write a program that uses the formula above to calculate the temperature in Global Overtemps (GO) given the temperature in Martian Units (MU).</strong></p>
    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>

        <p>To find the temperature in Global Overtemps, apply the formula to every inputted temperature in Martian Units.</p>
		<p>Enter your solution in the body of the following method in the given code skeleton:</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static double converter(int mu)</code>

        <h4>Python</h4>
        <code>def converter(mu)</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>converter(100)</code> returns <code>109.0</code></p>

        <h4>Python</h4>
        <p><code>converter(100)</code> returns <code>109.0</code></p>
    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>
        <h3>Console Input Format</h3>
        <ul>
            <li>the first line contains the number of test cases, <code>t</code></li>
            <li>for each test, a single line containing the input temperature to convert, <code>mu</code></li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
                <li>1 ≤ <code>t</code> ≤ 10</li>
                <li>0 ≤ <code>mu</code> ≤ 10000</li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
			<li>For each test, a single line with the converted temperature.</li>
		</ul>
        
        <h3>Sample Run</h3>

        <blockquote>
            <p>Every test provides a sample set of input and expected output. When you run your completed program, typing in
                the data under "Input:" should yield the data under "Output:".</p>

        </blockquote>
        <blockquote>
            <p>For judging, we use additional test cases, besides those in the Sample Runs. Pay close attention to the
                "Assumptions" section of each problem, and think of other possible inputs to try out before submitting your
                solution.</p>
        </blockquote>

        <h4>Input:</h4>
        <pre>
2
100
50</pre>
        <h4>Output:</h4>
        <pre>
109.0
71.5</pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
// Do NOT include a package statement at the top of your solution.

import java.util.Scanner;

public class MartianUnitsConverter {

    /**
     * TODO: Complete the following method that converts a temperature in Martian
     * Units to Global Overtemps based on the given parameters:
     * 
     * @param mu --> the input temperature in Martian Units
     * @return result --> the temperature converted to Global Overtemps
     */

    public static double converter(int mu) {
        double result = 0.0;

        // Write your solution here

        return result;
    }

    /*
     * It is unnecessary to edit the "main" method of each problem's provided code
     * skeleton. The main method is written for you in order to help you conform to
     * input and output formatting requirements.
     */
    public static void main(String[] args) {
        Scanner kb = new Scanner(System.in);
        int numCases = kb.nextInt();
        for (int iCase = 0; iCase < numCases; iCase++) {
            int martianUnits = kb.nextInt();
            double globalOvertemps = converter(martianUnits);
            System.out.println(globalOvertemps);
        }
        kb.close();
    }
}</pre>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
def converter(mu):
    """
    TODO: Complete this function, which should return Martian Units converted to Global Overtemps.

    Parameters:
        mu --> (integer) the input temperature in Martian Units

    Returns:
        result --> (float) the temperature converted to Global Overtemps
    """
    result = 0.0

    # Write your solution here

    return result


# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    num_cases = int(input())

    for _ in range(num_cases):
        martian_units = int(input())
        global_overtemps = converter(martian_units)
        print(global_overtemps)


main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
// Do NOT include a package statement at the top of your solution.

import java.util.Scanner;

public class MartianUnitsConverter {

    /**
     * TODO: Complete the following method that converts a temperature in Martian
     * Units to Global Overtemps based on the given parameters:
     * 
     * @param mu --> the input temperature in Martian Units
     * @return result --> the temperature converted to Global Overtemps
     */

    public static double converter(int mu) {
         
        return (double)((mu * (3.0 / 4.0)) + 34.0);
    }

    /*
     * It is unnecessary to edit the "main" method of each problem's provided code
     * skeleton. The main method is written for you in order to help you conform to
     * input and output formatting requirements.
     */
    public static void main(String[] args) {
        Scanner kb = new Scanner(System.in);
        int numCases = kb.nextInt();
        for (int iCase = 0; iCase < numCases; iCase++) {
            int martianUnits = kb.nextInt();
            double globalOvertemps = converter(martianUnits);
            System.out.println(globalOvertemps);
        }
        kb.close();
    }

}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
def converter(mu):
    """
    TODO: Complete this function, which should return Martian Units converted to Global Overtemps.

    Parameters:
        mu --> (integer) the input temperature in Martian Units

    Returns:
        result --> (float) the temperature converted to Global Overtemps
    """

    return (mu * (3/4)) + 34


# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    num_cases = int(input())

    for _ in range(num_cases):
        martian_units = int(input())
        global_overtemps = converter(martian_units)
        print(global_overtemps)


main()</pre>
</script>