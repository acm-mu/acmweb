import java.util.Scanner;

public class solution {

    //The main method handles standard input and output
    //You should not change this method
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int num = scanner.nextInt();
        for (int i = 0; i < num; i++) {
            int left = scanner.nextInt();
            String op = scanner.next();
            int right = scanner.nextInt();
            System.out.println(calculate(left, op, right));
        }
    }

    public static int calculate(int left, String op, int right) {
        int answer;
        switch (op) {
            case "+":
                answer = left + right;
                break;
            case "-":
                answer = left - right;
                break;
            case "*":
                answer = left * right;
                break;
            case "/":
                answer = right == 0 ? 0 : left / right;
                break;
            default:
                answer = 0;

        }
        return answer;
    }
}
