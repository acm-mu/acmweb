import java.util.Scanner;

public class QuestionFour {

	// The main method handles standard input and output
	// You should not change this method
	public static void main(String [] args){
		Scanner scanner = new Scanner(System.in);
		int t = scanner.nextInt();
		scanner.nextLine();//advances scanner to next line
		//to print your answer
		for(int i = 0; i < t; i++){
			String morse = scanner.nextLine();
			System.out.println(decodeMorse(morse));
		}
	}
	public static String decodeMorse(String morse){
		String answer = "answer";
		
		//TODO: Write your solution in the body of this method

		return answer;
	}
}
