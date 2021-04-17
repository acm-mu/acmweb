<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='H' /> -->

<script type="text/template" id="description-template">
    <h1 id="page" page="citygrid">City Grid</h1>
    <div>
        <h3>Problem Description</h3>

        <p>Recently, the City of Xinu passed a law that limits uses for specific plots in the city (cities generally restrict how the land can be used, called zoning). In the same law, the mayor decided that in order for a new subdivision to be valid, all zones of the same type must be touching. He has given you a proposed grid of the new subdivision. Your job is to determine if the grid complies with the requirement that all zones of the same type must be touching. The grid is filled with integers which represent each zone: <code>1</code> = Residential, <code>2</code> = Commercial, and <code>3</code> = Industrial. <code>0</code> represents an empty plot. The empty plots do not need to be touching.</p>
	    
        <p>To solve this problem, <strong>write a program that determines if all zones of the same type are touching.</strong></p>

    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton.</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static boolean isValidCityGrid(int[][] grid)</code>

        <h4>Python</h4>
        <code>def isValidCityGrid(grid)</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <pre>isValidCityGrid(new int[] { new int[] { 0, 3, 3, 3, 3, 3, 0, 0, 0, 0 }, 
                            new int[] { 0, 2, 1, 0, 0, 3, 3, 3, 0, 0 },
                            new int[] { 0, 2, 1, 0, 0, 0, 0, 3, 0, 0 },
                            new int[] { 0, 2, 1, 0, 0, 0, 0, 3, 0, 0 },
                            new int[] { 0, 2, 1, 1, 1, 0, 0, 3, 0, 0 },
                            new int[] { 0, 2, 0, 0, 1, 0, 0, 3, 0, 0 },
                            new int[] { 0, 2, 0, 0, 1, 0, 0, 3, 0, 0 },
                            new int[] { 0, 2, 2, 2, 1, 0, 0, 3, 0, 0 },
                            new int[] { 0, 0, 0, 0, 1, 0, 0, 0, 0, 0 },
                            new int[] { 0, 0, 0, 0, 1, 0, 0, 0, 0, 0 },
                          });</pre>
	    <p>returns <code>true</code></p>

        <h4>Python</h4>
        <pre>isValidCityGrid([[0, 3, 3, 3, 3, 3, 0, 0, 0, 0 ], 
                 [0, 2, 1, 0, 0, 3, 3, 3, 0, 0 ],
                 [0, 2, 1, 0, 0, 0, 0, 3, 0, 0 ],
                 [0, 2, 1, 0, 0, 0, 0, 3, 0, 0 ],
                 [0, 2, 1, 1, 1, 0, 0, 3, 0, 0 ],
                 [0, 2, 0, 0, 1, 0, 0, 3, 0, 0 ],
                 [0, 2, 0, 0, 1, 0, 0, 3, 0, 0 ],
                 [0, 2, 2, 2, 1, 0, 0, 3, 0, 0 ],
                 [0, 0, 0, 0, 1, 0, 0, 0, 0, 0 ],
                 [0, 0, 0, 0, 1, 0, 0, 0, 0, 0 ]])</pre>
	    <p>returns <code>true</code></p>
    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>

        <h3>Console Input Format</h3>
        <ul>
            <li>The first line contains the number of test cases, <code>t</code></li>
            <li>For each test, 10 lines with 10 integers separated by a comma</li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
            <li>The grid will only be filled with integers 0, 1, 2, or 3.</li>
            <li>The grid is always 10 x 10</li>
            <li>Zones that are diagonal from another zone are <strong>not</strong> considered adjacent</li>
            <li>A zone may not appear at all in the grid</li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
            <li>For each test, a single line with either "True" or "False"</li>
        </ul>

        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
2
0,0,0,0,0,0,0,0,0,0
0,0,0,0,2,2,2,0,0,0
0,0,0,1,2,2,2,0,0,0
0,0,0,1,1,2,2,0,0,0
0,0,0,0,0,0,0,0,0,0
0,0,0,1,1,0,3,0,0,0
0,0,0,0,1,0,3,0,0,0
0,0,0,0,0,0,3,0,0,0
0,0,3,3,3,3,3,0,0,0
0,0,0,0,0,0,0,0,0,0
0,0,0,0,0,0,0,0,0,0
0,0,0,0,2,2,2,3,3,0
0,0,0,0,2,2,2,3,3,0
0,0,0,0,0,2,2,3,3,0
0,0,0,1,0,0,0,0,3,0
0,0,0,1,1,0,3,0,3,0
0,0,0,0,1,0,3,0,3,0
0,0,0,0,0,0,3,0,3,0
0,0,3,3,3,3,3,3,3,0
0,0,0,0,0,0,0,0,0,0</pre>

	    <h4>Output:</h4>
        <pre>
False
True</pre>

    <br />
    <br />

    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
"""
TODO: Determine if a city grid is valid given the following parameters:

Parameters:
grid --> A 10x10 two-dimensional array filled with integer values: 0, 1, 2, or 3.

Returns:
a boolean: True if the city grid is valid. Otherwise, False.

Note: The grid will only be filled with the integers 0, 1, 2, or 3.  The size of the grid will always be 10 by 10.
"""
def isValidCityGrid(grid):

    # Write your solution here

    return False

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        grid = [[0 for _ in range(10)] for _ in range(10)]
        for row in range(10):
            inp = input().split(",")
            for col in range(10):
                grid[row][col] = int(inp[col])

        result = isValidCityGrid(grid)

        if(result == True):
            print("True")
        else:
            print("False")

main()</pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class CityGrid {

   /*
    * TODO: Determine if a city grid is valid given the following parameters:
    *
    * Parameters:
    * grid --> A 10x10 two-dimensional int array filled with integer values: 0, 1, 2, or 3.
    * 
    * Returns:
    * a boolean: True if the city grid is valid. Otherwise, false.
    * 
    * Note: The grid will only be filled with the integers 0, 1, 2, or 3.  The size of the grid will always be 10 by 10.
    */
    public static boolean isValidCityGrid(int[][] grid){

        // Write your solution here

        return false;
    }

    // It is unnecessary to edit the "main" function of each problem's provided code skeleton.
    // The main function is written for you in order to help you conform to input and output formatting requirements.
    public static void main(String[] args) {
		Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            int[][] grid = new int[10][10];

            for (int row = 0; row < 10; row++) {
                String str = in.next();
                String[] s = str.split(",");
                
                for (int col = 0; col < 10; col++)
                    grid[row][col] = Integer.parseInt(s[col]);
            }
            
            boolean result = isValidCityGrid(grid);

            if(result)
                System.out.println("True");
            else
                System.out.println("False");
        }
		
        in.close();
	}
}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
def isValidCityGrid(grid):
    """
    TODO: Determine if a city grid is valid given the following parameters:

    Parameters:
    grid --> A 10x10 two-dimensional array filled with integer values: 0, 1, 2, or 3.

    Returns:
    a boolean: True if the city grid is valid. Otherwise, False.

    Note: The grid will only be filled with the integers 0, 1, 2, or 3.  The size of the grid will always be 10 by 10.
    """

    return checkForValidZone(grid, 1) and checkForValidZone(grid, 2) and checkForValidZone(grid, 3)

def findFirstOccuranceInArray(grid, zone):
    for row in range(10):
        for col in range(10):
            if(grid[row][col] == zone):
                return (row, col)
    
    return (-1, -1)

def recursivelyReplace(oldElement, newElement, grid, row, col):
    if(grid[row][col] != oldElement):
        return
    
    grid[row][col] = newElement

    if(row > 0):
        recursivelyReplace(oldElement, newElement, grid, row-1, col)
    if(row < 9):
        recursivelyReplace(oldElement, newElement, grid, row+1, col)
    if(col > 0):
        recursivelyReplace(oldElement, newElement, grid, row, col-1)
    if(col < 9):
        recursivelyReplace(oldElement, newElement, grid, row, col+1)

def checkForValidZone(grid, zoneNumber):
    (firstOneRow, firstOneCol) = findFirstOccuranceInArray(grid, zoneNumber)
    if(firstOneRow != -1 and firstOneCol != -1):
        recursivelyReplace(zoneNumber, zoneNumber+3, grid, firstOneRow, firstOneCol)
    else:
        return True

    (firstOneRow, firstOneCol) = findFirstOccuranceInArray(grid, zoneNumber)
    return firstOneRow == -1 and firstOneCol == -1

def main():
    for _ in range(int(input())):
        grid = [[0 for _ in range(10)] for _ in range(10)]
        for row in range(10):
            inp = input().split(",")
            for col in range(10):
                grid[row][col] = int(inp[col])

        result = isValidCityGrid(grid)

        if(result == True):
            print("True")
        else:
            print("False")

main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class CityGrid {

    public static boolean isValidCityGrid(int[][] grid){
        /*
        TODO: Determine if a city grid is valid given the following parameters:
        
        Parameters:
        grid --> A 10x10 two-dimensional int array filled with integer values: 0, 1, 2, or 3.
        Returns:
        a boolean: True if the city grid is valid. Otherwise, false.
        Note: The grid will only be filled with the integers 0, 1, 2, or 3.  The size of the grid will always be 10 by 10.
        */

        return checkForZone(grid, 1) && checkForZone(grid, 2) && checkForZone(grid, 3);
    }

    public static int[] findFirstOccurance(int[][] grid, int zone){
        for (int row = 0; row < 10; row++)
            for (int col = 0; col < 10; col++)
                if(grid[row][col] == zone)
                    return new int[] { row, col };

        return new int[] { -1, -1 };
    }

    public static void recursivelyReplace(int oldElement, int newElement, int[][] grid, int row, int col){
        if(grid[row][col] != oldElement)
            return;
        
        grid[row][col] = newElement;

        if(row > 0)
            recursivelyReplace(oldElement, newElement, grid, row-1, col);
        if(row < 9)
            recursivelyReplace(oldElement, newElement, grid, row+1, col);
        if(col > 0)
            recursivelyReplace(oldElement, newElement, grid, row, col-1);
        if(col < 9)
            recursivelyReplace(oldElement, newElement, grid, row, col+1);
    }

    public static boolean checkForZone(int[][] grid, int zoneNumber){
        int[] firstOccurance = findFirstOccurance(grid, zoneNumber);
        if(firstOccurance[0] != -1 && firstOccurance[1] != -1)
            recursivelyReplace(zoneNumber, zoneNumber+3, grid, firstOccurance[0], firstOccurance[1]);
        else
            return true;

        firstOccurance = findFirstOccurance(grid, zoneNumber);
        return firstOccurance[0] == -1 && firstOccurance[1] == -1;
    }

    public static void main(String[] args) {
		Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            int[][] grid = new int[10][10];

            for (int row = 0; row < 10; row++) {
                String str = in.next();
                String[] s = str.split(",");
                
                for (int col = 0; col < 10; col++)
                    grid[row][col] = Integer.parseInt(s[col]);
            }
            
            boolean result = isValidCityGrid(grid);

            if(result)
                System.out.println("True");
            else
                System.out.println("False");
        }
		
        in.close();
	}
}</pre>
</script>