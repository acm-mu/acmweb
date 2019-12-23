<?php
require_once("../../header.php");
require_once("sidebar.php");
?>

<script type="text/template" id="description-template">
    <h1 id="page" page="rugby">Rugby</h1>

    <div>
        <p>Lemme was able to get his computer back and book a luxurious AirCnC in the heart of New Delhi. They enjoyed their
            stay and have now landed in Auckland, New Zealand.</p>

        <p>Clyle is a big rugby fan and one day wants to be sports statistician for his favorite team, the Dunedin
            Highlanders. He is super excited as he has tickets to watch them play while he is in New Zealand.</p>

        <h3>Problem Description</h3>

        <p>Clyle has extraordinary luck (he won the lottery as proof) and has now won another raffle. This time, it's to be
            the Highlanders official team statistician for one game. He cannot believe it and is so excited he doesn't sleep
            the night before the game.</p>

        <p>Clyle ends up falling asleep during the game and can’t recall what happened. He says that if he was given
            possibilities of the scoring summary, how the team finished with the <code>total</code> score, he could remember
            more about the game. After every game, the scores are listed in the local newspaper. The ways to score in rugby
            are as follows:</p>

        <pre>
            Try (T): 4 points 
            Goal Kick (GK): 2 points
            Penalty (P): 2 points
            Drop Goal (DG): 1 point
        </pre>

        <p>There is no limit on the number of times a team can score in any one way.</p>

        <p>To solve this problem, <strong>write a program which takes the final team score as an integer and returns the
                number of combinations of scores that would result in that final team score.</strong></p>

        <p>For example, there are exactly 3 ways to score 3 points:</p>

        <ul>
            <li>a drop goal, and a penalty</li>
            <li>a drop goal, and a goal kick</li>
            <li>three drop goals</li>
        </ul>
    </div>
    <div>
        <h2>Writing Your Solution</h2>

        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre>public static int countCombos(int score)</pre>

        <h4>Python</h4>
        <pre>def countCombos(score)</pre>

        <h3>Sample Method Calls</h3>
        <p><code>countCombos(3)</code> returns <code>3</code></p>
        <p><code>countCombos(4)</code> returns <code>7</code></p>

    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first line contains <code>t</code>, the number of tests</li>
        <li>for each test, a line contains <code>score</code>, the input final score</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>1 &lt;= <code>t</code> &lt;= 10</li>
        <li>0 &lt;= <code>score</code> &lt;= 16</li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the number of combinations that form <code>score</code> from the ways to
            score in rugby</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            4
            0
            1
            3
            5
        </pre>

        <h4>Output:</h4>

        <pre>
            1
            1
            3
            7
        </pre>
    </div>
</script>

<script type="text/template" id="java-skeleton">
    <pre>
        import java.util.*;

        public class Rugby {

            /*It is unnecessary to edit the "main" method of each problem's provided code skeleton.
                * The main method is written for you in order to help you conform to input and output formatting requirements.
                */
            public static void main(String[] args) {
                Scanner in = new Scanner(System.in);
                int cases = in.nextInt();
                for(;cases > 0; cases--) {
                    System.out.println(countCombos(in.nextInt()));
                }
            }

            /**  
                *  TODO: Write a function that counts all combinations of points
                        a team can score to reach a given total 'score'.

                @param score --> The total score for all points to add up to.
                @return the number of combinations possible. *
            */
            public static int countCombos(int score) {

                // Hint: one way to solve this problem is to write a "generateCombos" method to return
                // all the combinations, then count them:
                return generateCombos(score).size();
            }
        }
                
    </pre>
</script>

<script type="text/template" id="python-skeleton">
    <pre>
        def countCombos(score):
            """
                TODO: Write a function that counts all combinations of points
            a team can score to reach a given total 'score'.
                
                Parameters:
                score --> The total score for all points to add up to.
                
                Returns:
                The number of combinations possible.
                """
            
                # Hint: one way to solve this problem is to write a "generateCombos" method to return
                # all the combinations, then count them.

            return 0

        # It is unnecessary to edit the "main" method of each problem's provided code skeleton.
        # The main method is written for you in order to help you conform to input and output formatting requirements.
        def main():
            for _ in range(int(input())):
                print(countCombos(int(input())))

        main()
    </pre>
</script>