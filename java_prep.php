<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>

<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/competition">Competition</a></li>
    <li>Java Preparation</li>
</ul>

<h1 class="title">
    Java Preparation
</h1>

<p>
    Contest programs are expected to read from System.in and write to System.out and be in the default package. Programs
    should not prompt for input. For any problem we judge it comparing the output of your program to the expected output
    file.
</p>

<p>
    All problems will come with skeleton code that will hand input and output. All the work done will be inside a
    provided method where input comes from the parameters and output is returned from the function. <b>Use of the
        skeleton is recommended but not required.</b>
</p>

<p>
    Many problems will require working with Strings, especially methods <code>length()</code>, <code>charAt()</code>,
    <code>substring()</code>, <code>equals()</code>, <code>compareTo()</code> and <code>split()</code>.
</p>

<p>
    You should know how to convert a String to a corresponding number using methods such as
    <code>Integer.parseInt()</code>, and <code>Double.parseDouble()</code>.
</p>
<p>
    We assume a basic familiarity with 1-dimensional and 2-dimensional Arrays.
</p>
<p>
    Contest problems will not involve file I/O other than System.in and System.out. There will be no command line
    arguments, graphical interface programming, or networking/web programming.
</p>
<p>
    Many teams find using a development environment such as <a href="https://www.eclipse.org/">Eclipse</a> or <a
        href="https://netbeans.org/">NetBeans</a> helpful.
</p>

<h2> Exercise 1 </h2>
<p>
    Problem: Given a list of strings of the same length, flip around the main diagonal (top left to bottom right). In
    other words, the symbol in row r, column c of the input should be in row c, column r of the output. Input will have
    at most 20 rows and 20 columns.
</p>

<label>
    Input:
</label>

<pre>
..##@@..$
.##.@@.$.
##..@@$..
#...$$...
#..$@@...
#.$.@@...
</pre>

<label>
    Output:
</label>

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

<label>
    Sample solution:
</label>

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

<h2>Exercise 2</h2>
<p>
    Problem: First row of input gives the number of cases. Each following row consists of the number of values for this
    case followed by the list of values. Print the maximum value and number of entries equal to this maximum for each
    case as shown below.
</p>

<label>
    Input:
</label>

<pre>
5
3 0 2 1
5 12 12 14 14 14
6 -2 -4 -4 -3 -3 -4
1 100
8 10 11 12 11 12 11 10 9
</pre>

<label>
    Output:
</label>

<pre>
Case 1: 2,1
Case 2: 14,3
Case 3: -2,1
Case 4: 100,1
Case 5: 12,2
</pre>

<label>
    Sample solution:
</label>

<pre>
package org.taco.syslab;

import java.util.Arrays;
import java.util.Scanner;

public class Ex2 {
    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        int num_cases = keyboard.nextInt();
        int[][] cases = new int[num_cases][];

        // Output wants cases numbered from 1
        for (int c = 0; c < num_cases; c++) {
            int num_vals = keyboard.nextInt();
            cases[c] = new int[num_vals];
            for (int i = 0; i < num_vals; i++)
                cases[c][i] = keyboard.nextInt();
        }

        int[][] res = run(cases);
        for (int i = 0; i < res.length; i++)
            System.out.println("Case " + (i + 1) + ": " + res[i][0] + "," + res[i][1]);
    }

    public static int[][] run(int[][] cases) {
        int[][] maxs = new int[cases.length][2];

        for (int i = 0; i < cases.length; i++) {
            int c = Arrays.stream(cases[i]).max().getAsInt();
            maxs[i][0] = c;
            maxs[i][1] = (int) Arrays.stream(cases[i]).filter(value -> value == c).count();
        }

        return maxs;
    }
}
</pre>

<h2>Exercise 3</h2>
<p>
    Problem: Exercise 1 with numbers. Input is given in width 4 fields, ints between -99 and 999. Output should also use
    width 4 fields.

    This is done without using a skeleton.
</p>

<label>
    Input:
</label>

<pre>
0   0  -2  24
1   1  -1  25
1   5   1   0
2   0   9 -56
3   0   6   0
5   0 100   1
</pre>

<label>
    Output:
</label>

<pre>
0   1   1   2   3   5
0   1   5   0   0   0
-2  -1   1   9   6 100
24  25   0 -56   0   1
</pre>

<label>
    Sample solution:
</label>

<pre>
import java.util.Scanner;

public class Ex3 {
    public static void main(String[] args) {

        Scanner keyboard = new Scanner(System.in);
        int[][] vals = new int[20][20];
        int num_rows = 0;
        int num_cols = 0;

        while (keyboard.`hasNextLine()`) {
            String line = keyboard.`nextLine()`;
            line = line.`trim()`; //otherwise, `split()` gives
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
            System.out.`println()`;
        }
    }
}
</pre>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>