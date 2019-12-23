<?php 
require_once("../../header.php");
require_once("sidebar.php");
 ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="onegiantleap">One Giant Leap</h1>

	<div>
		<h3>Problem Description</h3>

		<p>Armed with the knowledge of how many ingredients they can grab, Lom and Chaz each use their expansive knowledge
			of
			kitchen cuisine to select the perfect mixture of ingredients. Each item of food has placed on it an expiration
			date,
			including the year, month, and day on which it will expire. Just as Lom and Chaz are about to begin cooking, the
			organizers of the competition inform them of a twist: <em>they are not allowed to use any food which expires
				during
				a leap year.</em></p>

		<p>A <em>leap year</em> is a year whose number is perfectly divisible by 4, except years which are both divisible by
			100
			AND not divisible by 400.</p>

		<p>"Who came up with these ridiculous rules?" Lom wondered aloud.
			"Well, it could be worse, Lom! We could be dealing with daylight savings time!" Chaz said with a shudder.</p>

		<p>Lom and Chaz need your help. <strong>Given a starting and ending year, write a function which will return a list
				of
				all of the leap years in between the starting and ending year, not including either the starting year or the
				ending year.</strong></p>
	</div>
	<div>
		<h2>Writing Your Solution</h2>
		<p>Enter your solution in the body of this method in the given code skeleton:</p>

		<h3>Method Signature</h3>

		<h4>Java</h4>
		<pre>public static int [] findLeapYears(int startingYear, int endingYear);</pre>

		<h4>Python</h4>
		<pre>def findLeapYears(startingYear, endingYear):</pre>

		<h3>Sample Method Calls</h3>

		<p><code>findLeapYears(1967, 2004);</code> returns
			<code>[1968, 1972, 1976, 1980, 1984, 1988, 1992, 1996, 2000]</code>
		</p>
		<p><code>findLeapYears(1299, 1337);</code> returns
			<code>[1304, 1308, 1312, 1316, 1320, 1324, 1328, 1332, 1336]</code>
		</p>
	</div>
	<h2>Testing your Program from the Console</h2>

	<p>After writing your program into the given code skeleton, test your solution by running the program and entering
		sample input in the following format.</p>

	<h3>Console Input Format</h3>
	<ul>
		<li>The first line will contain a single integer T, this represents the number of test cases to follow.</li>
		<li>T lines follow, each contains a integer S and a integer E. S represents the starting year, and E represents the
			ending year.</li>
	</ul>

	<h3>Assumptions</h3>
	<ul>
		<li><code>startingYear</code> is a valid four-digit calendar year between 1000 and 9999</li>
		<li><code>endingYear</code> is a valid four-digit calendar year between 1000 and 9999, which is greater than or
			equal to the value of <code>startingYear</code></li>
	</ul>

	<h3>Output Format</h3>
	<p>The function findLeapYears should return an integer array containing all of the leap years between startingYear and
		endingYear.</p>
	<div>
		<h3>Sample Run</h3>

		<h4>Input:</h4>
		<pre>
			2
			1967 2004
			1299 1337
		</pre>

		<h4>Output:</h4>
		<pre>
			1968, 1972, 1976, 1980, 1984, 1988, 1992, 1996, 2000
			1304, 1308, 1312, 1316, 1320, 1324, 1328, 1332, 1336
		</pre>
	</div>
</script>

<script type="text/template" id="java-solution">
    <pre>
		import java.util.ArrayList;
		import java.util.Arrays;
		import java.util.Scanner;

		public class QuestionThree {

			// The main method handles standard input and output
			// You should not change this method
			public static void main(String [] args){
				Scanner scanner = new Scanner(System.in);
				int t= scanner.nextInt();
				for(int i=0;i<t;i++){
					int startingYear = scanner.nextInt();
					int endingYear = scanner.nextInt();
					ArrayList<Integer> solution = findLeapYears(startingYear, endingYear);
					Integer solution2[] = new Integer[solution.size()];
					solution2 = solution.toArray(solution2);
					//to print your array
					System.out.println(Arrays.toString(solution2));
				}
			}
			public static ArrayList<Integer> findLeapYears(int startingYear, int endingYear){
				ArrayList<Integer>  leapYears = new  ArrayList<Integer>();
				for(int i =startingYear+1; i < endingYear;i++){
					if((i%4)==0){
						if(!((i%100==0)&&!(i%400==0))){
							leapYears.add(i);
						}
					}
					
				}
				//TODO: Write your solution in the body of this method
				return leapYears;
			}
		}
	</pre>
</script>

<script type="text/template" id="java-skeleton">
    <pre>
		import java.util.ArrayList;
		import java.util.Arrays;
		import java.util.Scanner;

		public class QuestionThree {

			// The main method handles standard input and output
			// You should not change this method
			public static void main(String [] args){
				Scanner scanner = new Scanner(System.in);
				int t= scanner.nextInt();
				for(int i=0;i<t;i++){
					int startingYear = scanner.nextInt();
					int endingYear = scanner.nextInt();
					ArrayList<Integer> solution = findLeapYears(startingYear, endingYear);
					Integer solution2[] = new Integer[solution.size()];
					solution2 = solution.toArray(solution2);
					//to print your array
					System.out.println(Arrays.toString(solution2));
				}
			}
			public static ArrayList<Integer> findLeapYears(int startingYear, int endingYear){
				ArrayList<Integer>  leapYears = new  ArrayList<Integer>();

				//TODO: Write your solution in the body of this method
				return leapYears;
			}
		}
	</pre>
</script>