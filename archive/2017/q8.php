<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="allezcuisine">Allez Cuisine!</h1>
	<div>
		<h3>Problem Description</h3>

		<p>With Darth Von Glue defeated, the judges promptly inform Lom and Chaz that there is still time left in the
			competition! They quickly finish cooking and are ready to serve up their dishes, but suddenly remember the
			judges' serving rule: all contestants must fill the judging table with their dishes!</p>

		<p>To best serve their three-course dish, Lom and Chaz decide to use triomino-shaped plates - plates made up of
			three equally sized, square portions:</p>

		<p><img src="http://i.imgur.com/5dkypat.png" alt="IMG" /></p>

		<p>Since these plates have corners, the heroes are confident they are able to fill the judging table in a variety of
			ways. To commemorate their victory over Darth Von Glue, Lom and Chaz decide to leave the arrangement of the
			plates up to chance: they will randomly select an arrangement from a set of valid arrangements. To do so,
			however, they will need to know the number of valid ways to fill a rectangular table with triomino plates.</p>

		<p>To help Lom and Chaz finish strong in the competition, <strong>write a program that determines the number of ways
				to fill a given size rectangular grid with triomino-shaped pieces.</strong></p>

		<p>For example, if Lom and Chaz find that the rectangle they need to fill is 2-by-3, they will know that there are
			three possible triomino-fitting arrangements:</p>

		<p><img src="http://i.imgur.com/zBZbwZH.png" alt="IMG" /></p>
	</div>
	<div>
		<h2>Writing Your Solution</h2>

		<p>Enter your solution in the body of this method in the given code skeleton:</p>

		<h3>Method Signature</h3>

		<h4>Java</h4>
		<pre>public static int countTriominoFittings(int rows, int columns)</pre>

		<h4>Python</h4>
		<pre>def countTriominoFittings(rows, columns):</pre>

		<h3>Sample Method Calls</h3>

		<p><code>countTriominoFittings(3, 4)</code> returns <code>23</code></p>
		<p><code>countTriominoFittings(2, 4)</code> returns <code>-1</code></p>
	</div>

	<h2>Testing Your Program From the Console</h2>

	<p>After writing your program into the given code skeleton, test your solution by running the program and entering
		sample input in the following format.</p>

	<h3>Console Input Format</h3>
	<ul>
		<li>The first line will contain a single integer T, representing the number of test cases to follow.</li>
		<li>T lines follow, each containing integers N and M, separated by a space, indicating a test case of a grid with N
			columns and M rows.</li>
	</ul>

	<h3>Assumptions</h3>
	<ul>
		<li><code>1  &lt; T &lt; 10</code> </li>
		<li><code>0  &lt; N, M &lt; 9</code> </li>
	</ul>

	<h3>Console Output Format</h3>

	<p>For each test case, prints out one value (the number of ways the grid could be filled). Note that the output value
		may be zero.</p>
	<div>
		<h3>Sample Run</h3>

		<h4>Input:</h4>
		<pre>
			2
			3 4
			2 4
		</pre>

		<h4>Output:</h4>
		<pre>
			23
			-1
		</pre>
	</div>
</script>

<script type="text/template" id="java-solution-template">
    <pre>
import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

/**
* Solution to the Triominoes problem from ACMPC 2017. Solved recursively:
* placing a triomino as you go down the recursive tree, and picking it up as
* you go back up, counting the solutions all the way.
* 
* Memoizes solutions to improve performance.
* 
* @author Charlie Morley
*
*/
public class Triominoes {

	/**
	* Console application checking how many ways that specific grid areas can
	* be filled with triominoes (pieces of area 3 spaces).
	* 
	* Input consists of:
	* 
	* 1. The number of test cases. <br>
	* 2. Each test case on a new line, the first number is the number of rows
	* in the grid, the second is the number of columns.
	*/
	public static void main(String[] args) {
		Scanner kb = new Scanner(System.in);
		for (int casesRemaining = kb.nextInt(); casesRemaining > 0; casesRemaining--)
			System.out.println(fitTriominoes(kb.nextInt(), kb.nextInt()));
		kb.close();
	}

	/**
	* Lists information about the shape of the triominoes.
	* 
	* The algorithm scans across the grid from left-to-right, top-to-bottom,
	* attempting to fit each triomino into the current space. So, imagine: each
	* triomino will be attempted to fit in a top-left-corner space.
	* 
	* This shape information describes the offset from the current space to the
	* other two spaces the triomino covers.
	* 
	* So, for example: the L shape right-and-down triomino (red), since it is
	* best fit into a top-left-corner space by putting the piece's bend on the
	* space... the other two triomino-covering spaces are one to the right of
	* the current space, and one below. Hence we have (0, 1) and (1, 0) for the
	* other two covered spaces. (same row, right 1 column) and (down 1 row,
	* same column)
	* 
	* As another example, the L shape left-and-up triomino (orange) is best fit
	* into a top-left-corner space by putting the piece's up-leg on the
	* space... the other two triomino-covering spaces are one below and one
	* diagonally below and left. Hence we have (1, 0) and (1, -1) for the other
	* two covered spaces. (down 1 row, same column) and (down 1 row, left 1
	* column)
	*/
	private static final int[][][] TRIOMINOES = new int[][][] {
			// L shape right-and-down (red)
			new int[][] { new int[] { 0, 1 }, new int[] { 1, 0 } },
			// L shape left-and-down (green)
			new int[][] { new int[] { 0, 1 }, new int[] { 1, 1 } },
			// L shape right-and-up (blue)
			new int[][] { new int[] { 1, 0 }, new int[] { 1, 1 } },
			// L shape left-and-up (orange)
			new int[][] { new int[] { 1, 0 }, new int[] { 1, -1 } },
			// vertical bar (cyan)
			new int[][] { new int[] { 1, 0 }, new int[] { 2, 0 } },
			// horizontal bar (black)
			new int[][] { new int[] { 0, 1 }, new int[] { 0, 2 } } };

	/**
	* Returns the number of ways a grid of the given size can be filled with
	* triominoes.
	* 
	* This is a top level call for
	* {@link #fitTriominoes(boolean[][], int, int)}.
	* 
	* @param rows
	*            the vertical size of the grid
	* @param cols
	*            the horizontal size of the grid
	* @return the number of ways the grid can be filled with triominoes, or -1
	*         if the grid can't be filled with triominoes
	*/
	private static long fitTriominoes(int rows, int cols) {
		savedSolutions.clear();
		if (rows % 3 != 0 && cols % 3 != 0)
			return -1;

		// represent the grid as an array of booleans - true is a filled spot
		long time = System.currentTimeMillis();
		long result = fitTriominoes(new boolean[rows][cols], 0, 0);
		//System.out.println("Running time: " + (System.currentTimeMillis() - time) + "ms");
		return result;
	}

	/**
	* Recursively determines the number of ways the given grid can be filled
	* with triominoes, starting by trying to fit in a triomino at the given
	* coordinate (row, column).
	* 
	* The given grid may be empty (current position would be (0, 0)), but it
	* may be partially filled!
	* 
	* The given coordinate will then be the next top-left-corner space to be
	* filled: the algorithm attempts to fill the grid by scanning the grid
	* left-to-right, top-to-bottom and filling the grid with triominoes at each
	* available space.
	* 
	* For each call, the algorithm will fill the grid with each type of
	* triomino in turn, and recursively call with the next available current
	* coordinate. The base case is a filled grid - there are no more available
	* positions, in which case an additional way has been found.
	* 
	* @param grid
	*            the in-progress grid attempting to be filled: true represents
	*            filled spots, false represents empty spots
	* @param row
	*            the vertical position of the current scanning coordinate
	* @param col
	*            the horizontal position of the current scanning coordinate
	* @return the number of ways the given grid could be filled (might return
	*         0)
	*/
	private static long fitTriominoes(boolean[][] grid, int row, int col) {
		long hash = hashState(grid, row, col);
		Long savedSolution = savedSolutions.get(hash);
		if (savedSolution != null)
			return savedSolution;

		// attempt to fill the grid by starting with each type of triomino, and
		// tally up the number of ways filled
		long waysFilled = 0;
		for (int triomino = 0; triomino < TRIOMINOES.length; triomino++) {
			// check if the current type of triomino can fit at the current
			// position. If not, that part of the recursion is a dead-end: don't
			// tally any new ways
			if (tryPlaceTriomino(grid, row, col, triomino)) {
				// otherwise, the triomino was fit

				// loop until we find an empty spot for the next triomino,
				// scanning left-to-right, top-to-bottom
				int nextrow = row;
				int nextcol = col;
				while (grid[nextrow][nextcol]) {
					// haven't found an empty spot yet, advance to the next spot
					nextcol++;
					if (nextcol >= grid[0].length) { // wrap around the row
						nextrow++;
						nextcol = 0;
						if (nextrow == grid.length)
							// we reached the last row, the grid has been filled
							break;
					}
				}

				if (nextrow == grid.length) {
					// we reached the last row, the grid has been filled. We
					// found a new way, go to the next type of triomino
					//verifyFilled(grid);
					waysFilled++;
				} else
					// recursively fill the next current scanning coordinate
					waysFilled += fitTriominoes(grid, nextrow, nextcol);

				// now check the next type of triomino. pick the current
				// triomino up off the grid
				removeTriomino(grid, row, col, triomino);
			}
		}

		savedSolutions.put(hash, waysFilled);
		return waysFilled;
	}

	private static void verifyFilled(boolean[][] grid) {
		for (boolean[] col : grid)
			for (boolean cell : col)
				if (!cell)
					throw new RuntimeException("Found non-filled solution");
	}

	/**
	* Test-and-set placing the specified triomino type in the specified spot in
	* the given grid.
	* 
	* Places triominoes according to the shapes specified at
	* {@link #TRIOMINOES}.
	* 
	* @param grid
	*            the grid to try to place the triomino on: true represents
	*            filled spots, false represents empty spots
	* @param row
	*            the vertical position to place the triomino at
	* @param col
	*            the horizontal position to place the triomino at
	* @param triomino
	*            the type of triomino to place (see {@link #TRIOMINOES})
	* @return true if the triomino was placed, false if the triomino couldn't
	*         fit at that spot
	*/
	private static boolean tryPlaceTriomino(boolean[][] grid, int row, int col, int triomino) {
		/*
		* Test all three spots on the specified triomino - the current,
		* specified position, and the other two positions relative to the
		* current position as specified by the deltas in variable TRIOMINOES
		* 
		* Also, before testing the two delta positions, test that the they do
		* not go out of range of the grid. (we can assume the current position
		* does not go out of range)
		* 
		* Developer note: if the array references are confusing, go look at
		* removeTriomino first for a simpler example of using variable
		* TRIOMINOES
		*/
		if (!grid[row][col] // current position
				// first relative position
				&& row + TRIOMINOES[triomino][0][0] < grid.length && row + TRIOMINOES[triomino][0][0] >= 0
				&& col + TRIOMINOES[triomino][0][1] < grid[0].length && col + TRIOMINOES[triomino][0][1] >= 0
				&& !grid[row + TRIOMINOES[triomino][0][0]][col + TRIOMINOES[triomino][0][1]]
				// second relative position
				&& row + TRIOMINOES[triomino][1][0] < grid.length && row + TRIOMINOES[triomino][1][0] >= 0
				&& col + TRIOMINOES[triomino][1][1] < grid[0].length && col + TRIOMINOES[triomino][1][1] >= 0
				&& !grid[row + TRIOMINOES[triomino][1][0]][col + TRIOMINOES[triomino][1][1]]) {

			// the triomino fits. put it down and return true
			grid[row][col] = true;
			grid[row + TRIOMINOES[triomino][0][0]][col + TRIOMINOES[triomino][0][1]] = true;
			grid[row + TRIOMINOES[triomino][1][0]][col + TRIOMINOES[triomino][1][1]] = true;
			return true;
		} else
			// the triomino does not fit
			return false;
	}

	/**
	* Removes the specified triomino shape off the given grid at the specified
	* position.
	* 
	* Removes triominoes according to the shapes specified at
	* {@link #TRIOMINOES}.
	* 
	* @param grid
	*            the grid to remove the triomino from: true represents filled
	*            spots, false represents empty spots
	* @param row
	*            the vertical position to remove the triomino from
	* @param col
	*            the horizontal position to remove the triomino from
	* @param triomino
	*            the type of triomino to remove (see {@link #TRIOMINOES})
	*/
	private static void removeTriomino(boolean[][] grid, int row, int col, int triomino) {
		grid[row][col] = false;
		grid[row + TRIOMINOES[triomino][0][0]][col + TRIOMINOES[triomino][0][1]] = false;
		grid[row + TRIOMINOES[triomino][1][0]][col + TRIOMINOES[triomino][1][1]] = false;
	}

	private static Map<Long, Long> savedSolutions = new HashMap<Long, Long>();

	private static long hashState(boolean[][] grid, int row, int col) {
		long hash = 0;
		hash |= ((long) ((byte) row));
		hash |= ((long) ((byte) col)) << 8;

		int bit = 16;
		for (int r = row; r < grid.length && r < row + 3; r++)
			for (int c = 0; c < grid[r].length; c++) {
				if (grid[r][c])
					hash |= ((long) 1) << bit;
				bit++;
			}

		return hash;
	}
}
	</pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.Scanner;

public class QuestionEight {

	// The main method handles standard input and output
	// You should not change this method
	public static void main(String [] args){
		Scanner scanner = new Scanner(System.in);
		
		int t = scanner.nextInt();
		for(int i = 0; i < t; i++){
			int rows = scanner.nextInt();
			int columns = scanner.nextInt();
			System.out.println(countTriominoFittings(rows, columns));
		}
		
	}
	public static int countTriominoFittings(int rows, int columns){
		int numFittings = 0;
		
		//TODO: Write your solution in the body of this method
		
		return numFittings;
	}
}
	</pre>
</script>