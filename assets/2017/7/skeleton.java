import java.util.Scanner;

public class QuestionSeven {

	// The main method handles standard input and output
	// You should not change this method
	public static void main(String [] args){
		Scanner scanner = new Scanner(System.in);
		int count = scanner.nextInt();
		scanner.nextLine();
		while(count > 0){
			String die1 = scanner.nextLine();
			String die2 = scanner.nextLine();
			String die3 = scanner.nextLine();
			String die4 = scanner.nextLine();
			String die5 = scanner.nextLine();
			String word = scanner.nextLine();
			System.out.println(rollDice(die1, die2, die3, die4, die5, word));
			count -= 1;
		}
		
	}
	public static boolean rollDice(String die1, String die2, String die3, String die4, String die5, String word){
		boolean isPossible = true;
		
		//TODO: Write your solution in the body of this method
		
		return isPossible;
	}
}
