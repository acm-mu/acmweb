import java.util.HashMap;
import java.util.Scanner;

public class solution {

    // The main method handles standard input and output
    // You should not change this method
    public static void main(String [] args){
        Scanner scanner = new Scanner(System.in);
        int t = scanner.nextInt();
        scanner.nextLine();
        //to print your answer
        for(int i = 0; i < t; i++){
            String morse = scanner.nextLine();
            System.out.println(decodeMorse(morse));
        }
    }

    private static final HashMap<String, String> hash;
    static {
        hash = new HashMap<>();
        hash.put(".-", "A");
        hash.put("-...", "B");
        hash.put("-.-.", "C");
        hash.put("-..", "D");
        hash.put(".", "E");
        hash.put("..-.", "F");
        hash.put("--.", "G");
        hash.put("....", "H");
        hash.put("..", "I");
        hash.put(".---", "J");
        hash.put("-.-", "K");
        hash.put(".-..", "L");
        hash.put("--", "M");
        hash.put("-.", "N");
        hash.put("---", "O");
        hash.put(".--.", "P");
        hash.put("--.-", "Q");
        hash.put(".-.", "R");
        hash.put("...", "S");
        hash.put("-", "T");
        hash.put("..-", "U");
        hash.put("...-", "V");
        hash.put(".--", "W");
        hash.put("-..-", "X");
        hash.put("-.--", "Y");
        hash.put("--..", "Z");
        hash.put("/", " ");
    }

    public static String decodeMorse(String morse){
        StringBuilder answer = new StringBuilder();

        String[] chars = morse.split(" ");
        for(String s : chars){
            String val = hash.get(s);
            answer.append(val == null ? s : val);
        }

        return answer.toString();
    }
}
