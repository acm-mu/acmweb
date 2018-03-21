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
