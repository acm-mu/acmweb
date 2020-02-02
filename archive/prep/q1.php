<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="exercise1">Exercise 1</h1>

    <div>

        <h3>Problem Description</h3>

        <p> Given a list of strings of the same length, flip around the main diagonal (top left to bottom right). <br />
        In other words, the symbol in row r, column c of the input should be in row c, column r of the output.
        </p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <blockquote>
        <p>When you are done writing your program, you can test it out by entering input into the console in the format described in this section.</p>
    </blockquote>

    <h3>Assumptions</h3>
    <ul>
        <li>0 &le; <code>rows</code> &le; 20</li>
        <li>0 &le; <code>columns</code> &le; 20</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
..##@@..$
.##.@@.$.
##..@@$..
#...$$...
#..$@@...
#.$.@@...
        </pre>

        <h4>Output:</h4>
        <pre>
..####
.##...
##...$
#...$.
@@@$@@
@@@$@@
..$...
.$....
$.....
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-solution-template">
    <pre>
import java.util.Scanner;

public class Ex1 {
    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        String[] rows = new String[20];
        int num_rows = 0;
        while (keyboard.hasNextLine()) {
            rows[num_rows] = keyboard.nextLine();
            num_rows++;
        }
        int width = rows[0].length();

        String[] result = run(rows, width, num_rows);

        for(String line: result) {
        System.out.println(line);
        }
    }

    /** This is the method that students would be filling out
    *
    */
    public String[] run(String[] input, int width, int height) {
        String[] output = new String[width];

        // Last part is the only thing you would be required to implement.
        for(int c = 0; c < width; c++) {
        String line = "";
        for(int r = 0; r < height; r++)
            line += rows[r].charAt(c);
        output[c] = line;
        }

        return output;
    }
}
</pre>
</script>