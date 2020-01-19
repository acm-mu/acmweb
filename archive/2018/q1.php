<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="morningcoffee">Morning Coffee</h1>
    <div>
        <h3>Problem Description</h3>
        <p>Mornings can be rough, so it is always a good idea to simplify your morning routine as much as possible. One
            thing that Kathleen always needs in the morning is a coffee. It would be nice if she could automatically
            calculate the coins necessary to pay for her morning coffee.</p>
        <p>Given the cost of coffee, <b>write a program that determines how to produce the exact currency amount out of a
                single type of coin</b> (quarters: 25 cents each, dimes: 10 cents each, nickels: 5 cents each, or pennies: 1
            cent each).
        </p>
        <p>For example, $1.75 (175 cents)...</p>
        <ul>
            <li>can be made out of 7 quarters</li>
            <li>cannot be made evenly out of dimes</li>
            <li>can be made out of 35 nickels</li>
            <li>can be made out of 175 pennies</li>
        </ul>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>
        
        <h3>Method Signature</h3>
        <pre>public static int[] produceAmount(int amount)</pre>
        
        <h3>Sample Method Calls</h3>
        <p><code>produceAmount(175)</code> returns an int array containing <code>{ 7, -1, 35, 175 }</code> because $1.75 can
            be
            made out of 7 quarters, 35 nickels, or 175
            pennies, but $1.75 cannot be made out of dimes.</p>
        <p><code>produceAmount(100)</code> returns an int array containing <code>{ 4, 10, 20, 100 }</code> because $1.00 can
            be
            made out of 4 quarters, 10 dimes, 20 nickels, or
            100 pennies.</p>

        <h3>Utility Method</h3>
        <p>For this question, you may also call the following method which has been written for you in the given code
            skeleton:
        </p>
        <pre>public static boolean isDivisibleBy(int x, int y)</pre>
    </div>

    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>n</code>, the number of tests</li>
        <li>for each test, a single line containing the amount, <code>x</code>, to divide (in cents)</li>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>1 &le; <code>n</code> &le; 10</li> 
        <li><code>x</code> &gt; 0</li>
    </ul>
    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with four space-separated integers: the number of quarters, dimes, nickels, and
            pennies
            required to exactly produce the amount, <code>x</code> (or -1 if the particular coin cannot evenly produce the
            amount)</li>
    </ul>
    <div>
        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
3
175
20
8
        </pre>
        <h4>Output:</h4>
        <pre>
7 -1 35 175
-1 2 4 20
-1 -1 -1 8
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.*;

public class Question1 {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        for (int cases = keyboard.nextInt(); cases > 0; cases--) {
            int amount = keyboard.nextInt();

            int[] results = produceAmount(amount);
            String[] numCoins = new String[results.length];
            for (int i = 0; i < results.length; i++)
                numCoins[i] = Integer.toString(results[i]);
            System.out.println(String.join(" ", numCoins));
        }
        keyboard.close();
    }

    public static int[] produceAmount(int amount) {
        int numOfQuarters = 0;
        int numOfDimes = 0;
        int numOfNickels = 0;
        int numOfPennies = 0;

        /*
        * TODO: For each of the coins (quarter, dime, nickel, penny), set the corresponding "numOf" variable to
        * how many coins it takes to make "amount" out of *just* that coin.
        * 
        * If "amount" can't be made out of *just* that coin, set the corresponding "numOf" variable to -1.
        *
        * For example:
        * If "amount" is 175, we should set:
        * numOfQuarters = 7;
        * numOfDimes = -1;
        * numOfNickels = 35;
        * numOfPennies = 175;
        */
        
        return new int[] { numOfQuarters, numOfDimes, numOfNickels, numOfPennies };
    }

    public static boolean isDivisibleBy(int x, int y) {
        /*
        * Feel free to use this function in your solution!
        * 
        * Returns true if x is "divisible by" y, and false otherwise.
        * 
        * For example, isDivisibleBy(10, 5) returns true, because 10 / 5 is 2.
        * isDivisibleBy(10, 3) returns false, because 10 / 3 has a remainder.
        */

        return x % y == 0;
    }
}
    </pre>
</script>