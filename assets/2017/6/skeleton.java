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
