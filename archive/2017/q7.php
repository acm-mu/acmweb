<?php 
require_once("../../header.php");
require_once("sidebar.php");
 ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="rollforinitiative">Roll For Initiative</h1>
	<div>
		<h3>Problem Description</h3>

		<p>Lom Tazer now has enough proof to get Darth Von Glue arrested, but the Marquette judges are weird and have
			strange form to report people. This form requires the user to roll dice combinations instead of the average
			captcha. If Lom and Chaz cannot find the right combinations Von Glue Will Escape. <b>To help them write a
				program to figure out if certain dice combinations are possible.</b></p>

		<p>The dice used are a set of five alphabetic dice where each die has a capital letter on each of its six sides.
			When you roll these dice, five letters appear on their top faces and sometimes you can spell a five-letter
			English word from these letters. You want to know if these five dice can possibly
			roll a specific five-letter word. For example, assume the dice contain the following letters on their six sides:
			Die1: ABGRTY Die2: EGKOWX Die3: ABVCXA Die4: POYEAT Die5: EITYTJ That is, Die1 has the six letters "A", "B",
			"G", "R", "T", and "Y" on its six sides. With these dice you could roll the word GREAT using a "G" from Die2, an
			"R" from Die1, an "E" from Die4, an "A" from Die3, and a "T" from Die5. However, you cannot roll the word TIGER
			using the dice above; while individually these letters appear on some die, it is not possible for all five
			letters to appear on the top of five dice at the same time. Note that the same letter may appear multiple times
			on the same die.
		</p>
	</div>
	<div>
		<h2>Writing Your Solution</h2>
		<p>Enter your solution in the body of this method in the given code skeleton.</p>

		<h3>Method Signature</h3>

		<p>Java</p>
		<pre>public static boolean rollDice(String die1, String die2, String die3, String die4, String die5, String word)
		</pre>

		<h4>Python</h4>
		<pre>def rollDice(die1, die2, die3, die4, die5, word):</pre>

		<h3>Sample Method Calls</h3>

		<p><code>rollDice("ABGRTY", "EGKOWX", "ABVCXA", "POYEAT", "EITYTJ", "GREAT");
	</code> returns <code>True</code> </p>
		<p><code>rollDice("ABGRTY", "EGKOWX", "ABVCXA", "POYEAT", "EITYTJ", "TIGER");</code> returns
			<code>False</code></p>
	</div>

	<h2>Testing your program From the Console</h2>

	<p>After writing your program into the given code skeleton, test your solution by running the program and entering
		sample input in the following format.</p>

	<h3>Console Input Format</h3>
	<ul>
		<li>The first line will contain a single integer T, representing the number of test cases to follow.</li>
		<li>For each test case T, The first five lines will contain six-character strings representing dice and the letters
			on their faces</li>
		<li>The sixth line will have the string you are checking to see if you can spell the word with the dice</li>
	</ul>

	<h3>Assumptions</h3>
	<ul>
		<li>All dice have six sides, thus, six characters</li>
		<li>The string to check if being spelled will always be five characters long</li>
		<li>All characters will be uppercase</li>
	</ul>

	<h3>Console Output Format</h3>
	<p><code>rollDice</code> should return true if the word can be spelled with the given dice, false otherwise</p>
	<div>
		<h3>Sample Run</h3>

		<h4>Input:</h4>
		<pre>
			2
			ABGRTY
			EGKOWX
			ABVCXA
			POYEAT
			EITYTJ
			GREAT
			ABGRTY
			EGKOWX
			ABVCXA
			POYEAT
			EITYTJ
			TIGER
		</pre>

		<h4>Output:</h4>
		<pre>
			True
			False
		</pre>
	</div>
</script>

<script type="text/template" id="java-solution">
    <pre>
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
	</pre>
</script>

<script type="text/template" id="java-skeleton">
    <pre>
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
	</pre>
</script>