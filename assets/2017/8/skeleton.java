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
