import java.util.Scanner;

public class QuestionFive {

	// The main method handles standard input and output
	// You should not change this method
	public static void main(String [] args){
		Scanner scanner = new Scanner(System.in);
		int t = scanner.nextInt();
		//to print your answer
		for(int i = 0; i < t; i++){
			long num = scanner.nextLong();
			int base = scanner.nextInt();
			char [] answer = baseConvert(num, base);
			for(int j = 0; j < answer.length; j++){
				System.out.print(answer[j]);
			}
		}
	}
	public static char [] baseConvert(long num, int base){
		char [] array = null;
		
		//TODO: Write your solution in the body of this method
		
		return array;
	}
}
