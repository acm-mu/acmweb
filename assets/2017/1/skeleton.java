import java.util.Scanner;

public class QuestionOne {
	
	//The main method handles standard input and output
	//You should not change this method
	public static void main(String [] args){
		Scanner scanner = new Scanner(System.in);
		int num = scanner.nextInt();
		for(int i = 0; i < num; i++){
			int left = scanner.nextInt();
			String op = scanner.next();
			int right = scanner.nextInt();
			System.out.println(calculate(left, op, right));
		}
	}
	
	public static int calculate(int left ,String op, int right){
		int answer = 0;
		//TODO: Write your solution in the body of this method
		
		return answer;
	}
}
