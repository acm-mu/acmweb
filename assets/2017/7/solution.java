import java.util.Scanner;

public class AlphabetDice {

	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int count = sc.nextInt();
		sc.nextLine();
		
		while(count > 0){
		String die1, die2, die3, die4, die5, word;
		die1 = sc.nextLine();
		die2 = sc.nextLine();
		die3 = sc.nextLine();
		die4 = sc.nextLine();
		die5 = sc.nextLine();
		word = sc.nextLine();
		//System.out.println(die1 + "\n" + die2 + "\n" + die3 + 
		//		"\n" + die4 + "\n" + die5 + "\n" + word);
		System.out.println(rollDice(die1, die2, die3, die4, die5, word));
		count -= 1;
		}
	}
	
	/**
	 * @param d1
	 * @param d2
	 * @param d3
	 * @param d4
	 * @param d5
	 * @param word to check against the dice
	 * @return true if word can be spelt with dice
	 */
	public static boolean rollDice(String d1, String d2, String d3, String d4, String d5, String word){
		char[] die1 = d1.toCharArray();
		char[] die2 = d2.toCharArray();
		char[] die3 = d3.toCharArray();
		char[] die4 = d4.toCharArray();
		char[] die5 = d5.toCharArray();
		
		for(char one:die1){
			for(char two:die2){
				for(char three:die3){
					for(char four:die4){
						for(char five:die5){
							//System.out.println("Tops: " + one + " " + two + " " + three + " " + four + " " + five);
							char[] top = {one, two, three, four, five};
							if(computeResult(top, word))
								return true;
						}
					}
				}
			}
		}
		return false;
	}
	/**
	 * Checks the permutation of the dice to see if we can spell the word
	 * @param top char[] of the tops of the dice
	 * @param word to check against
	 * @return true if we can spell the word with this permutation
	 */
	public static boolean computeResult(char[] top, String word) {
		for(char c:top){
			//System.out.println(c);
			//System.out.println(word);
			int index = word.indexOf(c);
			if(index >= 0)
				word = word.substring(0, index) + word.substring(index+1);
			else
				return false;
		}
		return true;
	}
}