<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="headsortails">Exclusively Heads or Tails</h1>
    <div>
        <h3>Problem Description</h3>
        <p>Alice and Bob decide to play a game of chance: they want to see who can get the most heads in a set of coin
            flips. Chaz wants to join in, but has lost this game so many times that he decides to cheat. Chaz uses rigged
            coins that land according to how Alice and Bob’s coins land.</p>
        <p>Alice, Bob, and Chaz flip coins over 8 rounds. Alice and Bob’s coins are fair (they have an equal chance of
            landing on heads or tails), but Chaz’s coin always follows very special rules:</p>
        <ul>
            <li>If Alice and Bob both land heads or both land tails, then Chaz lands heads.</li>
            <li>If Alice and Bob land different results (one lands heads and the other lands tails), then Chaz lands tails.
            </li>
        </ul>
        <p>Given the results of Alice and Bob’s coin flips for each round, <b>write a program which determines Chaz’s
                results for each round, then outputs who wins with the most heads (Alice, Bob, or Chaz).</b></p>
        <p>Chaz has convinced the other two that he deserves an advantage, given how poorly he has played in the past. If
            two or all three people tie for the most number of heads, then Chaz wins.</p>
        <hr>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <pre>public static String getWinner(char[] aliceFlipResults, char[] bobFlipResults)</pre>

        <h3>Sample Method Calls</h3>
        <p><code>getWinner(new char[] { 'H', 'T', 'H', 'H', 'H', 'T', 'H', 'T' }, new char[] { 'T', 'T', 'T', 'T', 'T', 'H', 'H', 'H'
    })</code> returns <code>Alice</code> because Alice scored 5 heads, Bob scored 3 heads, and Chaz scored 2 heads.</p>
        <p><code>getWinner(new char[] { 'H', 'H', 'T', 'T', 'H', 'H', 'T', 'T' }, new char[] { 'H', 'H', 'T', 'T', 'H', 'H', 'H', 'H'
    })</code> returns <code>Chaz</code> because Alice scored 4 heads, Bob scored 6 heads, and Chaz scored 6 heads. (Chaz
            wins the tie)</p>
    </div>
    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>n</code>, the number of tests</li>
        <li>for each test, two lines are inputted: the first contains Alice's results for each round, the second contains
            Bob's results for
            each round</li>
        <ul>
            <li>each line is 8 'H' or 'T' characters (one for each round), with no spaces separating the characters</li>
        </ul>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>
            <pre>1 <= <code>n</code>  <= 10</pre>
        </li>
    </ul>
    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the name of the winner</li>
    </ul>
    <div>
        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
            2
            HTHHHTHT
            TTTTTHHH
            HHTTHHTT
            HHTTHHHH
        </pre>

        <h4>Output:</h4>
        <pre>
            Alice
            Chaz
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.*;

public class Question2 {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        int cases = keyboard.nextInt();
        keyboard.nextLine();
        for (; cases > 0; cases--) {
            String aliceResults = keyboard.nextLine();
            String bobResults = keyboard.nextLine();
            System.out.println(getWinner(aliceResults.toCharArray(), bobResults.toCharArray()));
        }
        keyboard.close();
    }

    public static String getWinner(char[] aliceFlipResults, char[] bobFlipResults) {
        // both "aliceFlipResults" and "bobFlipResults" will only contain 'H' and 'T' characters, and each array has 8 elements

        String winner = "Alice";

        // TODO: change "winner" to be the name of the player with the most heads ("Alice", "Bob", or "Chaz")

        return winner;
    }
}
    </pre>
</script>