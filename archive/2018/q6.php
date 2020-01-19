<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="casualpoker">Casual Poker</h1>
    <div>
        <h3>Problem Description</h3>
        <p>Randy wants to play poker, but he forgot a lot of the rules. Determine who wins with these modified, “suitless”
            rules.</p>
        <p>Poker is played with a deck of playing cards. Cards can have any of the following values: 2, 3, 4, 5, 6, 7, 8, 9,
            10, J(ack), Q(ueen), K(ing), A(ce). Cards also come with a “suit” category, but these rules ignore the suit.</p>
        <p><b>Write a program which takes two "hands" (sets) of five playing cards and determines which hand is “better”
                according to poker rankings, disregarding the suits of the cards:</b></p>
        <ul>
            <li>Best Hand: Four of a Kind (e.g., [10 10 10 10 4])</li>
            <li>Full House: Three of one kind, and two of another (e.g., [J J 7 7 7])</li>
            <li>Straight: Five cards which form a sequence (e.g., [3 4 5 6 7])</li>
            <li>Three of a Kind (e.g., [9 9 9 6 2])</li>
            <li>Two Pairs (e.g., [4 4 J J 9])</li>
            <li>One Pair (e.g., [6 6 3 Q 10])</li>
            <li>Worst Hand: No Pair (e.g., [A K 4 10 8])</li>
        </ul>
        <p>Every hand falls into exactly one of these ranks, regardless of their arrangement (e.g., [7 2 4 7 10] falls under
            the One Pair rank, since it has two 7's and all the other cards are different).
            If two hands are at the same rank, Randy calls it a tie, no matt er what the individual cards in each hand are.
            (e.g. [6 6 3 Q 10] is considered a tie with [4 4 8 7 K] since both are at the One Pair rank)</p>
        <p>In order to simplify entering the cards into the computer, the non-numerical card values have been replaced with
            numerical values:</p>
        <pre>J(ack) = 11, Q(ueen) = 12, K(ing) = 13, A(ce) = 14</pre>
        <p>Disclaimer: This question is posed purely for its interest as a computation challenge, and not to condone or
            promote gambling in any way.</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <pre>public static int comparePokerHands(int[] hand1, int[] hand2)</pre>
        <p>(output <code>1</code> if <code>hand1</code> is the better hand, output <code>2</code> if <code>hand2</code> is
            the better hand, and output <code>0</code> if there is a tie)</p>
            
        <h3>Sample Method Calls</h3>
        <p><code>comparePokerHands(new int[] { 9, 8, 9, 7, 9 }, new int[] { 14, 13, 12, 11, 2 })</code> returns
            <code>1</code>
        </p>
        <p><code>comparePokerHands(new int[] { 5, 5, 13, 13, 2 }, new int[] { 6, 14, 14, 6, 14 })</code> returns
            <code>2</code>
        </p>
        <p><code>comparePokerHands(new int[] { 2, 3, 4, 5, 6 }, new int[] { 5, 8, 7, 9, 6 })</code> returns <code>0</code>
        </p>
    </div>
    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>n</code>, the number of tests</li>
        <li>for each test, two lines containing the two hands: each hand is five integers separated by spaces</li>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>1 &le; <code>n</code> &le; 10</li>
        <li>each "card" is between 2 and 14, inclusive</li>
    </ul>
    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with "First" if the first (top) hand wins, "Second" if the second (bottom) hand
            wins, or "Tie" if the hands are tied</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
3
9 8 9 7 9
14 13 12 11 2
5 5 13 13 2
6 14 14 6 14
2 3 4 5 6
5 8 7 9 6
        </pre>

        <h4>Output:</h4>
        <pre>
First
Second
Tie
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.*;

public class Question6 {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        for (int cases = keyboard.nextInt(); cases > 0; cases--) {
            int[][] hands = new int[2][5];
            for (int iHand = 0; iHand < 2; iHand++)
                for (int iCard = 0; iCard < 5; iCard++)
                    hands[iHand][iCard] = keyboard.nextInt();

            int result = comparePokerHands(hands[0], hands[1]);
            if (result == 1)
                System.out.println("First");
            else if (result == 2)
                System.out.println("Second");
            else if (result == 0)
                System.out.println("Tie");
            else
                System.out.println("Error - output was " + result);
        }
        keyboard.close();
    }

    public static int comparePokerHands(int[] hand1, int[] hand2) {
        int winner = 0;

        // TODO: set "winner" to 1 if hand1 beats hand2, set "winner" to 2 if hand2 beats hand1, or set "winner" to 0 if the two hands tie

        return winner;
    }
}
    </pre>
</script>