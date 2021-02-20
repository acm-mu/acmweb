<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="morsecode">-- --- .-. ... .</h1>

    <div>
        <h3>Problem Description</h3>

        <p>As Lom and Chaz continue cooking, they begin to notice one of the lights in the main floor keeps flashing in
            seemingly random patterns. But after a while, Chaz notices the signal is actually Morse code.</p>

        <p>Chaz explains that Morse code was originally created in the mid 1800s to send simple messages through the
            electric
            telegraph. Morse code is a representation of plain English, using two simple symbols, commonly vocalized as
            dit(.),
            and dot(-).</p>

        <p>Chaz is suspicious of these messages and suggests Lom stops cooking for a bit to translate these messages. The
            flashing is too fast for Lom and Chaz to translate by hand.</p>

        <p>Help Lom <strong>decode the message by writing a Morse code to ASCII converter, so he can translate the
                message.</strong></p>

        <p>Here is a table of Morse code to help you.</p>

        <table>
            <tr>
                <td>Morse</td>
                <td>.-</td>
                <td>-...</td>
                <td>-.-.</td>
                <td>-..</td>
                <td>.</td>
                <td>..-.</td>
                <td>--.</td>
                <td>....</td>
                <td>..</td>
                <td>.---</td>
                <td>-.-</td>
                <td>.-..</td>
                <td>--</td>
                <td>-.</td>
                <td>---</td>
                <td>.--.</td>
                <td>--.-</td>
                <td>.-.</td>
                <td>...</td>
                <td>-</td>
                <td>..-</td>
                <td>...-</td>
                <td>.--</td>
                <td>-..-</td>
                <td>-.--</td>
                <td>--..</td>
            </tr>
            <tr>
                <td>English</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>F</td>
                <td>G</td>
                <td>H</td>
                <td>I</td>
                <td>J</td>
                <td>K</td>
                <td>L</td>
                <td>M</td>
                <td>N</td>
                <td>O</td>
                <td>P</td>
                <td>Q</td>
                <td>R</td>
                <td>S</td>
                <td>T</td>
                <td>U</td>
                <td>V</td>
                <td>W</td>
                <td>X</td>
                <td>Y</td>
                <td>Z</td>
            </tr>
        </table>
    </div>
    <div>
        <h2>Writing your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h4>Method Signature</h4>

        <h4>Java</h4>
        <pre class="prettyprint">public static String decodeMorse(String morse);</pre>

        <h4>Python</h4>
        <pre class="prettyprint">def decodeMorse(morse):</pre>

        <h3>Sample Method Calls</h3>

        <p><code>decodeMorse(".-.");</code> returns <code>R</code></p>
        <p><code>decodeMorse(".... . .-.. .-.. --- / .-- --- .-. .-.. -..");</code> returns <code>HELLO WORLD</code></p>
        <p><code>decodeMorse("-.. .- .-. -.- / .-.. --- .-. -.. / -..- .. -. ..- / ... . -. -.. ... / .... .. ... / .-. . --. .- .-. -.. ... !");</code>
            returns <code>DARK LORD XINU SENDS HIS REGARDS!</code></p>

    </div>
    <h2>Testing you program from the Console</h2>

    <p>After writing your program into the given code skeleton, test your solution by running the program and entering
        sample input in the following format.</p>

    <h3>Console Input Format</h3>
    <ul>
        <li>The first line will contain a single integer T, the number of test cases to follow</li>
        <li>T lines follow, each containing a list of space-separated Morse symbols, this represents one message.</li>
        <li>If there is a character which does not appear on the table, leave it in the output</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li><code>1  &lt; T &lt; 10</code></li>
        <li>Each message will not be longer then English 1000 characters.</li>
    </ul>

    <h3>Output Format Format</h3>
    <p>The translated English message.</p>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            3
            .-.
            .... . .-.. .-.. --- / .-- --- .-. .-.. -..
            -.. .- .-. -.- / .-.. --- .-. -.. / -..- .. -. ..- / ... . -. -.. ... / .... .. ... / .-. . --. .- .-. -.. ... !
        </pre>
        
        <h4>Output:</h4>
        <pre>
            R
            HELLO WORLD
            DARK LORD XINU SENDS HIS REGARDS!
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.HashMap;
import java.util.Scanner;

public class solution {

    // The main method handles standard input and output
    // You should not change this method
    public static void main(String [] args){
        Scanner scanner = new Scanner(System.in);
        int t = scanner.nextInt();
        scanner.nextLine();
        //to print your answer
        for(int i = 0; i < t; i++){
            String morse = scanner.nextLine();
            System.out.println(decodeMorse(morse));
        }
    }

    private static final HashMap<String, String> hash;
    static {
        hash = new HashMap<>();
        hash.put(".-", "A");
        hash.put("-...", "B");
        hash.put("-.-.", "C");
        hash.put("-..", "D");
        hash.put(".", "E");
        hash.put("..-.", "F");
        hash.put("--.", "G");
        hash.put("....", "H");
        hash.put("..", "I");
        hash.put(".---", "J");
        hash.put("-.-", "K");
        hash.put(".-..", "L");
        hash.put("--", "M");
        hash.put("-.", "N");
        hash.put("---", "O");
        hash.put(".--.", "P");
        hash.put("--.-", "Q");
        hash.put(".-.", "R");
        hash.put("...", "S");
        hash.put("-", "T");
        hash.put("..-", "U");
        hash.put("...-", "V");
        hash.put(".--", "W");
        hash.put("-..-", "X");
        hash.put("-.--", "Y");
        hash.put("--..", "Z");
        hash.put("/", " ");
    }

    public static String decodeMorse(String morse){
        StringBuilder answer = new StringBuilder();

        String[] chars = morse.split(" ");
        for(String s : chars){
            String val = hash.get(s);
            answer.append(val == null ? s : val);
        }

        return answer.toString();
    }
}
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class QuestionFour {

    // The main method handles standard input and output
    // You should not change this method
    public static void main(String [] args){
        Scanner scanner = new Scanner(System.in);
        int t = scanner.nextInt();
        scanner.nextLine();//advances scanner to next line
        //to print your answer
        for(int i = 0; i < t; i++){
            String morse = scanner.nextLine();
            System.out.println(decodeMorse(morse));
        }
    }
    public static String decodeMorse(String morse){
        String answer = "answer";
        
        //TODO: Write your solution in the body of this method

        return answer;
    }
}
    </pre>
</script>