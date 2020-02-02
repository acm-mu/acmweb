<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="exercise3">Exercise 3</h1>

    <div>

        <h3>Problem Description</h3>

        <p>Given a list of integers, flip around the main diagonal (top left to bottom right). 
        <br />
        In other words, the <code>int</code> in row r, column c of the input should be in row c, column r of the output.
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
        <li>-99 &le; <code>inputValue</code> &le; 999</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
0   0  -2  24
1   1  -1  25
1   5   1   0
2   0   9 -56
3   0   6   0
5   0 100   1
        </pre>

        <h4>Output:</h4>
        <pre>
0   1   1   2   3   5
0   1   5   0   0   0
-2  -1   1   9   6 100
24  25   0 -56   0   1
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-solution-template">
    <pre>
import java.util.Scanner;

public class Ex3 {
    public static void main(String[] args) {

        Scanner keyboard = new Scanner(System.in);
        int[][] vals = new int[20][20];
        int num_rows = 0;
        int num_cols = 0;

        while (keyboard.hasNextLine()) {
            String line = keyboard.nextLine();
            line = line.trim(); //otherwise, split() gives
                                //empty string at beginning
            String[] line_words = line.split("s+");
            if (num_rows == 0)
                num_cols = line_words.length;

            for (int c = 0; c < num_cols; c++)
                vals[num_rows][c] = Integer.parseInt(line_words[c]);

            num_rows++;
        }

        for(int c = 0; c < num_cols; c++) {
            for(int r = 0; r < num_rows; r++)
                System.out.printf("%4d",vals[r][c]);
            System.out.println();
        }
    }
}
    </pre>
</script>