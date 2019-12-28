<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="allyourbasearebelongtous">All your base are belong to us</h1>
    <div>
        <h3>Problem Description</h3>

        <p>Now that Darth Von Glue’s secret Morse code has been broken, Lom and Chaz realize they also must exchange secret
            messages to discuss how they will foil Darth Von Glue’s evil plot. Von Glue, being the nefarious mastermind he
            is,
            realizes they must be talking in code now. To prevent Von from reading this correspondence we must encode our
            messages in a different numerical base. Your task is to convert a decimal base integer to any other specified
            numerical base.</p>

        <p>The default base is decimal also know as base 10. For instance, take 234, which can be thought of as follows:</p>

        <table>
            <tr>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>10^2</td>
                <td>10^1</td>
                <td>10^0</td>
            </tr>
        </table>

        <p>Which equates to</p>

        <pre>
            <code>234=2*10^2 + 3*10^1 + 4*10^0.</code>
        </pre>

        <p>So, you may be wondering then, are there other bases outside of base 10? Yes. In fact, a common one you may have
            heard of is binary or base 2. If we wanted to write 234 in base 2 it would be as follows:</p>

        <p>For example:</p>

        <table>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2^7</td>
                <td>2^6</td>
                <td>2^5</td>
                <td>2^4</td>
                <td>2^3</td>
                <td>2^2</td>
                <td>2^1</td>
                <td>2^0</td>
            </tr>
        </table>

        <p>This equates to:</p>

        <pre>
            <code>234=(1*2^7)+(1*2^6)+(1*2^5)+(0*2^4)+(1*2^3)+(0*2^2)+(1*2^2)+(1*2^1)+(0*2^0).</code>
        </pre>

        <p>So given what you know about base 10 and the binary shown above, a pattern that can be identified is that a
            number in
            any position can only go up to the (base# - 1) before it adds a 1 in the next position. A more straightforward
            way
            might be to count to 9 before you get to 10 or 19 before 20 or 99 before 100. Another key thing is what to do
            when
            you have a base greater than 10. That is where it gets tricky so instead of numerical digits you use letters.
            This
            Legend should give you a clearer idea.</p>

        <p>Legend</p>

        <table>
            <tr>
                <td>Letter</td>
                <td>Number</td>
            </tr>
            <tr>
                <td>A</td>
                <td>10</td>
            </tr>
            <tr>
                <td>B</td>
                <td>11</td>
            </tr>
            <tr>
                <td>C</td>
                <td>12</td>
            </tr>
            <tr>
                <td>D</td>
                <td>13</td>
            </tr>
            <tr>
                <td>E</td>
                <td>14</td>
            </tr>
            <tr>
                <td>F</td>
                <td>15</td>
            </tr>
        </table>
    </div>
    <div>
        <h2>Writing your solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre>public static char[] baseConvert(long num, int base);</pre>

        <h4>Python</h4>
        <pre>def baseConvert(num, base):</pre>

        <h3>Sample Method Calls</h3>

        <p><code>baseConvert(234,2);</code> returns <code>[1,1,1,0,1,0,1,0]</code> </p>
        <p><code>baseConvert(234,16);</code> returns <code>[0,0,0,0,0,0,E,A]</code> </p>
        <p><code>baseConvert(234,8)</code> returns <code>[0,0,0,0,0,3,5,2]</code> </p>
    </div>

    <h2>Testing your program from the Console</h2>

    <p>After writing your program into the given code skeleton, test your solution by running the program and entering
        sample input in the following format.</p>

    <h3>Console Input Format</h3>
    <ul>
        <li>The first line will contain a single integer T, this represents the number of test cases to follow.</li>
        <li>Each line T will contain the number <code>num</code>, and the base <code>base</code> separated by spaces.</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>Base ten number <code>0 &lt;= num &lt;= 4294967295</code></li>
        <li>Given base <code>2 &lt;= base &lt;= 16</code></li>
    </ul>

    <h3>Console Output Format</h3>
    <p>The function baseConvert should return a character array of length 8 with each index in the correct base.</p>

    <h3>Sample Run</h3>

    <h4>Input:</h4>
    <pre>
        3
        234 2
        234 16
        234 8
    </pre>

    <h4>Output:</h4>
    <pre>
        [1,1,1,0,1,0,1,0]
        [0,0,0,0,0,0,E,A]
        [0,0,0,0,0,3,5,2]
    </pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre>
import java.util.*;
public class BaseConversionSolution {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int t = scanner.nextInt();
        for(int i = 0; i < t; i++){
            long num = scanner.nextLong();
            int base = scanner.nextInt();
            char[] solution = baseConvert(num,base);
            System.out.println(Arrays.toString(solution));
        }
    }
    public static char[] symbols = {'0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'};
    public static char[] baseConvert(long num,int base){
        char[] solution = new char[8];
        
        for (int i = 7; i>=0;i--){
            int answer = (int) (num/Math.pow(base, i));
            num-= answer*Math.pow(base,i);
            solution[(7-i)]=symbols[answer];
        }
        return solution;
    }
}
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.Scanner;

public class QuestionFive {

    // The main method handles standard input and output
    // You should not change this method
    public static void main(String [] args){
        Scanner scanner = new Scanner(System.in);
        int t = scanner.nextInt();
        //to print your answer
        for(int i = 0; i < t; i++){
            long num = scanner.nextLong();
            int base = scanner.nextInt();
            char [] answer = baseConvert(num, base);
            for(int j = 0; j < answer.length; j++){
                System.out.print(answer[j]);
            }
        }
    }
    public static char [] baseConvert(long num, int base){
        char [] array = null;
        
        //TODO: Write your solution in the body of this method
        
        return array;
    }
}
    </pre>
</script>