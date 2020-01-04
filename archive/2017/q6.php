<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="offthegrid">Off The Grid</h1>

	<div>
		<h3>Problem Description</h3>

		<p>After translating an intercepted message, Chaz and Lom learn that Darth Von Glue has poisoned several of the
			ingredients with the hope of poisoning anyone who eats the dishes. Chaz and Lom quickly run to the pantry and
			notice
			all the food items have a peculiar pattern of 16 numbers on the bottom. They realize this must be Darth Von
			Glue’s
			way of secretly noting which ingredients are poisoned.</p>

		<p>Lom thinks back to his first interaction with Darth Von Glue, and recalls Darth was working on a sudoku puzzle
			with
			fervor. It dawns on Lom and Chaz that Darth Von Glue is likely using mini-sudokus to mark which ingredients are
			poisoned. Fortunately, Chaz and Lom know that a mini-sudoku is a 4x4 square of numbers where each row, column,
			and
			quadrant of numbers has the integers 1 through 4 without any repeats.</p>

		<p>Chaz and Lom grab the open container of crackers that Chaz had been snacking on earlier and realize that the
			sudoku
			on the bottom had an invalid solution. Since Chaz is still living, they determine a valid sudoku indicated a
			poisoned ingredient.</p>

		<p>To help Lom and Chaz quickly determine the safe ingredients, <b>write a program to determine if the 4x4 pattern
				is a valid mini-sudoku solution.</b></p>

		<p>For Example: </p>

		<pre>
			valid Solution:               Invalid Solution:
			|  1  2  |  3  4  |            |  1  2  |  1  4  |
			|  3  4  |  1  2  |            |  3  4  |  1  2  |
			-------------------            -------------------
			|  2  1  |  4  3  |            |  2  1  |  4  3  |
			|  4  3  |  2  1  |            |  4  2  |  3  1  |
		</pre>
	</div>
	<div>
		<h2>Writing Your Solution</h2>
		<p>Enter your solution in the body of this method in the given method signature.</p>

		<h3>Method Signature</h3>

		<h4>Java</h4>
		<pre>public static bool isValidSolution(int[][] solution)</pre>

		<h4>Python</h4>
		<pre>def isValidSolution(solution):</pre>

		<h3>Sample Method Calls</h3>

		<pre>int solution[][] = {{1,2,3,4},{3,4,1,2},{2,1,4,3},{4,3,2,1}};</pre>
		<code>isValidSolution(solution);</code> returns <code>True</code>

		<pre>int solution[][] = {{1,2,1,4},{3,4,1,2},{2,1,4,3},{4,2,3,1}};</pre>
		<code>isValidSolution(solution);</code> returns <code>False</code>

	</div>
	<h2>Testing Your Program From the Console</h2>

	<p>After writing your program into the given code skeleton, test your solution by running the program and entering
		sample input in the following format.</p>

	<h3>Console Input Format</h3>
	<ul>
		<li>The first line will contain a single integer T, representing the number of test cases to follow.</li>
		<li>For each test case T, there are four lines of input, where each row has four space-separated numbers that
			represent one row of the solution</li>
	</ul>

	<h3>Assumptions</h3>
	<ul>
		<li>Input is a 4x4 grid</li>
		<li>All numbers input are integers <code>&lt;= 4</code> and <code>&gt;= 1</code></li>
	</ul>

	<h3>Console Output Format</h3>
	<p>True or False based on the validity of the solution.</p>

	<div>
		<h3>Sample Run</h3>

		<h4>Input:</h4>
		<pre>
			2
			1 2 3 4
			3 4 1 2
			2 1 4 3
			4 3 2 1
			1 2 1 4
			3 4 1 2
			2 1 4 3
			4 2 3 1
		</pre>

		<h4>Output:</h4>
		<pre>
			True
			False
		</pre>
		<br />
        <br />
	</div>
</script>

<script type="text/template" id="java-solution-template">
    <pre>
import java.util.Scanner;

public class QuestionSix {

	// The main method handles standard input and output
	// You should not change this method
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		int t = scanner.nextInt();
		for (int i = 0; i < t; i++) {
			int[][] array = new int[4][4];
			for (int row = 0; row < 4; row++) {
				for (int col = 0; col < 4; col++) {
					array[row][col] = scanner.nextInt();
				}
			}
			System.out.println(isValidSolution(array));
		}
	}

	public static boolean isValidSolution(int[][] solution) {
		boolean isValid = true;

		boolean[] seenValues = new boolean[5];

		// Checking all rows
		for (int r = 0; r < 4; r++) {
			// Checking each row
			for (int c = 0; c < 4; c++) {
				if (seenValues[solution[r][c]])
					return false;
				seenValues[solution[r][c]] = true;
			}
			seenValues = new boolean[5];
		}

		// Checking all columns
		for (int c = 0; c < 4; c++) {
			// Checking each column
			for (int r = 0; r < 4; r++) {
				if (seenValues[solution[r][c]])
					return false;
				seenValues[solution[r][c]] = true;
			}
			seenValues = new boolean[5];
		}

		/*
		* Checking corners
		*/
		// top-left corner
		for (int r = 0; r < 2; r++) {
			for (int c = 0; c < 2; c++) {
				if (seenValues[solution[r][c]])
					return false;
				seenValues[solution[r][c]] = true;
			}
		}
		seenValues = new boolean[5];

		// top-right corner
		for (int r = 0; r < 2; r++) {
			for (int c = 2; c < 4; c++) {
				if (seenValues[solution[r][c]])
					return false;
				seenValues[solution[r][c]] = true;
			}
		}
		seenValues = new boolean[5];

		// bottom-left corner
		for (int r = 2; r < 4; r++) {
			for (int c = 0; c < 2; c++) {
				if (seenValues[solution[r][c]])
					return false;
				seenValues[solution[r][c]] = true;
			}
		}
		seenValues = new boolean[5];

		// bottom-right corner
		for (int r = 2; r < 4; r++) {
			for (int c = 2; c < 4; c++) {
				if (seenValues[solution[r][c]])
					return false;
				seenValues[solution[r][c]] = true;
			}
		}
		seenValues = new boolean[5];

		// TODO: Write your solution in the body of this method

		return isValid;
	}
}
	</pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.Scanner;

public class QuestionSix {

	// The main method handles standard input and output
	// You should not change this method
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		int t = scanner.nextInt();
		for (int i = 0; i < t; i++) {
			int[][] array = new int[4][4];
			for (int row = 0; row < 4; row++) {
				for (int col = 0; col < 4; col++) {
					array[row][col] = scanner.nextInt();
				}
			}
			System.out.println(isValidSolution(array));
		}
	}

	public static boolean isValidSolution(int[][] solution) {
		boolean isValid = true;

		// TODO: Write your solution in the body of this method

		return isValid;
	}
}
	</pre>
</script>