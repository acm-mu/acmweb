<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='F' /> -->

<script type="text/template" id="description-template">
    <h1 id="page" page="hiketothepeak">Hike to the Peak</h1>

    <div>
        <h3>Problem Description</h3>

        <p>During the pandemic, Brad has discovered his love for hiking. He has recently been tracking the elevations of his hikes he takes. He is using characters to track an increase, decrease, or no change in elevation. <code>u</code> represents an increase in 1 unit of elevation, <code>d</code> represents a decrease in 1 unit of elevation, and <code>_</code> represents no change. Given a string of characters <code>u</code>, <code>d</code>, and <code>_</code> find the maximum elevation Brad reaches during a hike. </p>
	    
        <p>To solve this problem, <strong>write a program to find the maximum elevation Brad reached.</strong></p>

    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>

        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static int findMaxElevation(String log)</code>

        <h4>Python</h4>
        <code>def findMaxElevation(log)</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>findMaxElevation("uuuudddudu")</code> returns <code>4</code></p>
        
        <h4>Python</h4>
        <p><code>findMaxElevation("uuuudddudu")</code> returns <code>4</code></p>

    </div>

    <hr>

    <div>

        <h2>Testing Your Program from the Console</h2>

        <h3>Console Input Format</h3>
        <ul>
            <li>The first line contains the number of test cases, <code>t</code></li>
            <li>For each test, a single line containing the input, <code>s</code></li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
            <li>Brad starts at elevation 0</li>
            <li>The only characters in the string are <code>u</code>, <code>d</code>, and <code>_</code></li>
            <li>The elevation will never be negative</li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
            <li>For each test, a single line with the output</li>
        </ul>

        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
2
uuudduuduuddd
uud__duu_ud</pre>

        <h4>Output:</h4>
        <pre>
4
3</pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class HikeToThePeak {

    /**
    * TODO: Find the maximum elevation Brad reached given the following parameters:
    *
    * Parameters:
    * @param log --> (String) A string representing the change in Brad's elevation
    *
    * Returns:
    * @return an integer containing the maximum elevation Brad reached
    *
    */
    public static int findMaxElevation(String log) {

        // Write your code here

        return 0;
    }

    /*
    * It is unnecessary to edit the "main" method of each problem's provided code
    * skeleton. The main method is written for you in order to help you conform to
    * input and output formatting requirements.
    */
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        int cases = Integer.parseInt(in.nextLine());
        for (; cases > 0; cases--) {
            // User Input
            String log = in.nextLine();

            // Function Call
            int returnedVal = findMaxElevation(log);

            // Terminal Output
            System.out.println(returnedVal);
        }

        in.close();
    }

}</pre>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
"""
TODO: Find the maximum elevation Brad reached given the following parameters:

Parameters:
log --> (String) A string representing the change in Brad's elevation

Returns:
an integer containing the maximum elevation the Brad reached

"""
def findMaxElevation(log):

    # Write your code here

    return 0

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():

    for _ in range(int(input())):
        # User Input #
        inp = input()

        # Function Call
        returnedVal = findMaxElevation(inp)

        # Terminal Output #
        print(returnedVal)

main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class HikeToThePeak {
	
	public static int findMaxElevation(String log)
	{
		int peak = 0;
		int alt = 0;
        char[] logArray = log.toCharArray();

		for(int x = 0; x < logArray.length; x++) {
			if(logArray[x]=='u')
				alt += 1;
			else if(logArray[x] == 'd')
				alt -= 1;

			if(alt > peak)
				peak = alt;
		}
		
        return peak;
	}

    /*
    * It is unnecessary to edit the "main" method of each problem's provided code
    * skeleton. The main method is written for you in order to help you conform to
    * input and output formatting requirements.
    */
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        int cases = Integer.parseInt(in.nextLine());
        for (; cases > 0; cases--) {
            // User Input
            String log = in.nextLine();

            // Function Call
            int returnedVal = findMaxElevation(log);

            // Terminal Output
            System.out.println(returnedVal);
        }

        in.close();
    }
}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
"""
TODO: Find the maximum elevation Brad reached given the following parameters:

Parameters:
log --> (String) A string representing the change in Brad's elevation

Returns:
an integer containing the maximum elevation Brad reached

"""
def findMaxElevation(log):
    peak = 0
    alt = 0
    for val in log:
        if val == 'u':
            alt += 1
        elif val == 'd':
            alt -= 1
        if alt > peak:
            peak = alt

    return peak

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():

    for _ in range(int(input())):
        # User Input #
        inp = input()

        # Function Call
        returnedVal = findMaxElevation(inp)

        # Terminal Output #
        print(returnedVal)

main()</pre>
</script>