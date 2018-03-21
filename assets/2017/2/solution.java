import java.util.Scanner;

public class solution  {
    // The main method handles standard input and output
    // You should not change this method
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int     t       = scanner.nextInt();

        for (int i = 0; i < t; i++) {
            int a = scanner.nextInt();
            int b = scanner.nextInt();
            System.out.println(leastCommonMultiple(a, b));
        }
    }

    public static int gcd(int a, int b) {
        return b == 0 ? a : gcd(b, a % b);
    }

    public static int leastCommonMultiple(int a, int b) {
        return a * (b / gcd(a, b));
    }
}
