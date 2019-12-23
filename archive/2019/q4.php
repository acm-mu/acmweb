<?php
require_once("../../header.php");
require_once("sidebar.php");
?>

<script type="text/template" id="description-template">
    <h1 id="page" page="looksay">Look &amp; Say</h1>

    <div>
        <p>Now that Jimothy has his free lifetime subscription to <em>Old Math, Old Dudes, New Concepts</em>, The Four
            Amigos continue on their adventure. They have left the lush land of Scotland for the hot and humid climate of
            New Delhi, India.</p>

        <p>Lemme was in charge of planning this portion of the trip. However, he was not on top of his game and forgot to
            book their hotel. Bad news... all hotels in New Dehli are sold out for the ENTIRE week. Lemme decides to visit
            India's version of Airbnb, Aircnc. Aircnc is a somewhat sketchy website that is filled with ads and popups. All
            of a sudden, Lemme's laptop shuts down. He believes he got malware from Aircnc.</p>

        <h3>Problem Description</h3>

        <p>He boots his computer back up and notices a file called lookandsay.txt in his documents. After researching look
            &amp; say sequences, he finds the following information: </p>

        <p>Look &amp; say sequences are generated recursively, using the previous value as input for the next step. For each
            step, replace each series of consecutive digits (like <code>222</code>) with the number of digits
            (<code>3</code>) followed by the digit itself (<code>2</code>). For example:</p>

        <ul>
            <li><code>1</code> becomes <code>11</code> (1 copy of digit 1).</li>
            <li><code>11</code> becomes <code>21</code> (2 copies of digit 1).</li>
            <li><code>21</code> becomes <code>1211</code> (one 2 followed by one 1).</li>
            <li><code>1211</code> becomes <code>111221</code> (one 1, one 2, and two 1s).</li>
            <li><code>111221</code> becomes <code>312211</code> (three 1s, two 2s, and one 1).</li>
        </ul>

        <p>To solve this problem, <strong>finish writing a program that applies the look &amp; say algorithm 3 times and
                returns the sum of the digits of the 3rd result.</strong></p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>

        <p>The given code skeleton implements much of the program for you. You should write the <code>lookandsay</code>
            function of the skeleton to execute the lookandsay algorithm a single time. The <code>main</code> method will
            run <code>lookandsay</code> 3 times. Then, it runs the provided <code>sum</code> method to total the digits of
            3rd result.</p>

        <p>Enter your part of the solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre>public static String lookandsay(String input)</pre>

        <h4>Python</h4>
        <pre>def lookandsay(input)</pre>

        <h3>Sample Method Calls</h3>

        <p><code>lookandsay("1")</code> returns <code>"11"</code></p>
        <p><code>lookandsay("11")</code> returns <code>"21"</code></p>
        <p><code>lookandsay("21")</code> returns <code>"1211"</code></p>
        <p>Supposing that these were the three method calls made by <code>main</code>, then the <code>sum("1211")</code>
            call returns <code>5</code>.</p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first line contains <code>t</code>, the number of tests</li>
        <li>for each test, a single line contains the starting input, <code>input</code></li>
    </ul>

    <h3 id="assumptions">Assumptions</h3>
    <ul>
        <li><code>input</code> is a non-empty string containing numerical digits</li>
        <li>1 &lt;= length of <code>input</code> &lt;= 20</li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line containing the sum of the digits of the result of the 3rd execution of the
            lookandsay algorithm</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            4
            1
            13
            111221
            849583
        </pre>

        <h4>Output:</h4>
        <pre>
            5
            11
            16
            67
        </pre> 
    </div>
</script>

<script type="text/template" id="java-skeleton">
    <pre>
        import java.util.*;

        public class LookAndSay {

            /** 
            * TODO: Write a function that applies the look and say sequence 3 times, 
            * using the previous result as the input for the next sequence.
            *    @param input --> The initial input.
            *    @return the result of applying the look and say sequence 3 times. **/
            public static String lookandsay(String input){
                return "";
            }

            public static int sum(String input){
                int sum = 0;
                for(char c : input.toCharArray())
                    sum += Integer.parseInt(c + "");
                return sum;
            }

            /* It is unnecessary to edit the "main" method of each problem's provided code skeleton.
                * The main method is written for you in order to help you conform to input and output formatting requirements.\
                */
            public static void main(String[] args) {
                Scanner in = new Scanner(System.in);

                int cases = in.nextInt();
                for(;cases > 0; cases--) {
                    System.out.println(sum(lookandsay(in.next())));
                }
            }
        }    
    </pre>
</script>

<script type="text/template" id="python-skeleton">
    <pre>
        def lookandsay(input):
            """ TODO: Write a function that applies the look and say sequence 3 times, 
                using the previous result as the input for the next sequence.
            @param: input [string] --> The initial input.
            @return [string result] - The result of applying the look and say sequence 3 times.
            """

            return ""

        def sum(input):
        sum = 0
        for s in input:
            sum += int(s)
        return sum

        # It is unnecessary to edit the "main" method of each problem's provided code skeleton.
        # The main method is written for you in order to help you conform to input and output formatting requirements.
        def main():
        cases = int(input())
        for _ in range(cases):
            print(sum(lookandsay(str(input()))))

        main()
    </pre>
</script>