import java.util.*;
public class BaseConversionSolution {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		int t = scanner.nextInt();
		for(int i = 0; i < t; i++){
			long num = scanner.nextLong();
			int base = scanner.nextInt();
			char[] solution = baseConvert(num,base);
			System.out.println(Arrays.toString(solution));
		}
	}
	public static char[] symbols = {'0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'};
	public static char[] baseConvert(long num,int base){
		char[] solution = new char[8];
		
		for (int i = 7; i>=0;i--){
			int answer = (int) (num/Math.pow(base, i));
			num-= answer*Math.pow(base,i);
			solution[(7-i)]=symbols[answer];
		}
		return solution;
	}

}