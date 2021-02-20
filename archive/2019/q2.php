<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="togglegrid">Toggle Grid</h1>
    <div>
        <p>The Four Amigos had a phenomenal time in Iceland and have now arrived in Paris, France. They take a train to
            Lyon, France as it is Syrin's dream to see the Festival of Lights. </p>

        <p>When they arrive in Lyon, it turns out the director for the event has fallen ill with senioritis (it's a real
            disease). The director tells the committee to pick the first person off the street, and they will become the new
            director. Fortunately for Syrin, she is standing outside of their office and is chosen to be the new director
            for the 2019 Festival of Lights!</p>

        <h3>Problem Description</h3>

        <p>Syrin's biggest responsibility is that she is in charge of purchasing the lights. She has been given an
            instruction set on how the pattern of lights will be displayed. She realizes that she can save money on string
            lights by buying discounted lights with missing or broken bulbs. All she needs is to figure out how many lights
            will be on after all instructions in a given instruction set are applied.</p>

        <p>Syrin knows that the instructions will be applied to a 100x100 grid of lights, and they will be one of the
            following operations: <code>turn on</code>, <code>turn off</code>, or <code>toggle</code>. Each instruction will
            target a specific rectangular section of lights, described by the starting <code>x-coordinate</code>, starting
            <code>y-coordinate</code>, <code>width</code>, and <code>height</code>. Each instruction needs to be performed
            on every light within the bounds of this rectangular section.</p>

        <p>To solve this problem, <strong>finish writing a program that counts the number of lights in a grid which are
                turned on after a instructions are applied to the grid.</strong></p>

        <p>All lights in the grid are turned off before the instruction set is executed.</p>

        <p>The instructions are given with integer codes: <code>0</code> for "turn lights off", <code>1</code> for "turn
            lights on", and <code>2</code> for "toggle lights".</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>The given code skeleton implements much of the program for you.</p>
        <p>You should write the <code>execute</code> function of the skeleton to process one instruction at a time. This
            function should adjust the lights in the two-dimensional array <code>grid</code>, setting lights to
            <code>0</code> if they are turned off, or <code>1</code> if they are turned on.</p>

        <p>The <code>main</code> method will run <code>execute</code> for each instruction. Then, it runs the provided
            <code>count</code> method to count the number of lights in <code>grid</code> which are turned on.</p>

        <p>Enter your part of the solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre class="prettyprint">public static void execute(int code, int startX, int startY, int width, int height)</pre>

        <h4>Python</h4>
        <pre class="prettyprint">def execute(code, startX, startY, width, height):</pre>

        <h3>Sample Method Calls</h3>
        <p><code>execute(1, 0, 0, 10, 10)</code></p>

        <p>turns all lights in <code>grid</code> between (and including) <code>grid[0][0]</code> and <code>grid[9][9]</code>
            to <code>1</code> (meaning these lights are turned on).</p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first line contains the number of test cases, <code>t</code></li>
        <li>for each test, a line contains <code>i</code>, the number of instructions for that test</li>
        <li>for each instruction, a line contains the following five integer inputs, comma-separated: <code>code</code>,
            <code>startX</code>, <code>startY</code>, <code>width</code>, and <code>height</code></li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>0 &le; <code>t</code> &le; 10</li>
        <li>0 &le; <code>i</code> &le; 5</li>
        <li>0 &le; <code>code</code> &le; 2</li>
        <li>0 &le; <code>startX</code>, <code>startY</code>, <code>width</code>, <code>height</code> &le; 100</li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the number of lights on after all instructions are processed</li>
    </ul>

    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
3
1
1,0,0,10,10
2
1,0,0,10,10
0,5,5,5,5
2
1,0,0,10,10
2,0,0,5,5
        </pre>

        <h4>Output:</h4>
        <pre>
100
75
75
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class ToggleGrid {

    static int[][] grid = new int[100][100];

    /**
        * TODO: Write a function that processes an instruction
        * 
        * @param code --> 0: Turn Off / 1: Turn On / 2: Toggle
        * @param startX --> The starting x-coordinate of the instruction.
        * @param startY  --> The starting y-coordinate of the instruction.
        * @param width --> The number of columns to process on.
        * @param height --> The number of rows to process on.
        */
    public static void execute(int code, int startX, int startY, int width, int height) {
    }

    public static int count() {
        int lights_on = 0;

        for (int x = 0; x < grid.length; x++)
            for (int y = 0; y < grid.length; y++)
                if (grid[y][x] == 1)
                    lights_on++;

        return lights_on;
    }

    /*
        * It is unnecessary to edit the "main" method of each problem's provided code skeleton.
        * The main method is written for you in order to help you conform to input and output formatting requirements.
        */
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        int cases = in.nextInt();
        for (; cases > 0; cases--) {
            grid = new int[100][100];
            int numInstructions = in.nextInt();
            for (; numInstructions > 0; numInstructions--) {
                String str = in.next();
                String[] s = str.split(",");

                int code = Integer.parseInt(s[0]);
                int startX = Integer.parseInt(s[1]);
                int startY = Integer.parseInt(s[2]);
                int width = Integer.parseInt(s[3]);
                int height = Integer.parseInt(s[4]);

                execute(code, startX, startY, width, height);
            }
            System.out.println(count());
        }
        in.close();
    }
}     
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
grid = [[0 for _ in range(100)] for _ in range(100)]

def execute(code, startX, startY, width, height):
    """
    TODO: Write a function that processes an instruction
    
    Parameters:
    code --> 0: Turn off / 1: Turn on / 2: Toggle.
    startX --> The starting x-coordinate of the instruction
    startY --> The starting y-coordinate of the instruction.
    width --> The number of columns to process on.
    height --> The number of rows to process on.
    """

    return

def count():
    lights_on = 0
    for x in range(0, len(grid)):
        for y in range(0, len(grid)):
            if grid[y][x] == 1:
                lights_on += 1

    return lights_on

# It is unnecessary to edit the "main" method of each problem's provided code skeleton.
# The main method is written for you in order to help you conform to input and output formatting requirements.
def main():
    global grid
    for _ in range(int(input())):
        grid = [[0 for _ in range(100)] for _ in range(100)]
        for _ in range(int(input())):
            inp = input().split(",")
            
            execute(int(inp[0]), int(inp[1]), int(inp[2]), int(inp[3]), int(inp[4]))
        print(count())

main()    
    </pre>
</script>