<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="sunrise">Sunrise</h1>

    <div>
        <h3>Problem Description</h3>

        <p>The sun rises brightly on the morning of the Marquette Cooking Competition(MCC), Wisconsin's premier competition
            for
            the state's strongest young chefs. Lom Tazer and his trusty sous-chef Chaz O'Rabbit have entered this
            competition to
            learn more about cooking, as well as have fun. At the same time, Darth Von Glue is plotting something sinister.
        </p>

        <p>When Lom woke up this morning he realized that his ingredient calculator had broken and now outputs 42 no matter
            what
            the input is. Without his ingredient calculator Lom can't work as fast, and that could be the difference between
            a
            win and a loss at the MCC.</p>

        <p>To help Lom <b>write a function to calculate mathematical equations.</b></p>

        <p>Chaz suggests that if Lom enters a 0 as the divisor, the calculator should return zero.</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre class="prettyprint">public static int calculate(int left, String op, int right)</pre>

        <h4>Python</h4>
        <pre class="prettyprint">def calculate(left, op, right):</pre>

        <h3>Sample Method Calls</h3>

        <p><code>calculate(1, "+", 1)</code> returns <code>2</code></p>
        <p><code>calculate(4, "*", 2)</code> returns <code>8</code></p>
        <p><code>calculate(151, "/", 0)</code> returns <code>0</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>n Number of Tests</li>
        <li>an expression in the form of <code>left op right</code>
            <ul>
                <li>where <code>left</code> and <code>right</code> are integers </li>
                <li>and <code>op</code> is a string representing the four main mathematical operators. <br />
                    <ul>
                        <li> + </li>
                        <li> - </li>
                        <li> / </li>
                        <li> * </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li><code>left &lt; 10^6</code></li>
        <li><code>right &lt; 10^6</code></li>
        <li><code>op is in [+, -, /, *]</code></li>
    </ul>

    <h3>Console Output Format</h3>
    <p>The result of the mathematical expression, on a single line</p>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            3
            1 + 1
            4 * 2
            151 / 0
        </pre>

        <h4>Output:</h4>
        <pre>
            2
            8
            0
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class solution {

    //The main method handles standard input and output
    //You should not change this method
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int num = scanner.nextInt();
        for (int i = 0; i < num; i++) {
            int left = scanner.nextInt();
            String op = scanner.next();
            int right = scanner.nextInt();
            System.out.println(calculate(left, op, right));
        }
    }

    public static int calculate(int left, String op, int right) {
        int answer;
        switch (op) {
            case "+":
                answer = left + right;
                break;
            case "-":
                answer = left - right;
                break;
            case "*":
                answer = left * right;
                break;
            case "/":
                answer = right == 0 ? 0 : left / right;
                break;
            default:
                answer = 0;

        }
        return answer;
    }
}
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class QuestionOne {
    
    //The main method handles standard input and output
    //You should not change this method
    public static void main(String [] args){
        Scanner scanner = new Scanner(System.in);
        int num = scanner.nextInt();
        for(int i = 0; i < num; i++){
            int left = scanner.nextInt();
            String op = scanner.next();
            int right = scanner.nextInt();
            System.out.println(calculate(left, op, right));
        }
    }
    
    public static int calculate(int left ,String op, int right){
        int answer = 0;
        //TODO: Write your solution in the body of this method
        
        return answer;
    }
}
    </pre>
</script>