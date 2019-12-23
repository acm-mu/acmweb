<?php
require_once("../../header.php");
require_once("sidebar.php");
?>

<script type="text/template" id="description-template">
    <h1 id="page" page="taylorseries">Taylor Series</h1>
    <div>
        <h3>Problem Description</h3>

        <p>Syrin did a fantastic job as a fill-in for the director of The Festival of Lights. The Four Amigos now hop on a
            train and take the Chunnel to the UK and arrive in Edinburgh, Scotland. Jimothy is a big mathematics history
            buff and decides to visit where Taylor series, a famous formula in Calculus, was created.</p>

        <p>On his way to the historical site, he notices an advertisement stating that if he could write a program that can
            calculate the sine and cosine values of any given angle, he would get a free lifetime subscription to his
            favorite math history magazine titled, <em>Old Math, Old Dudes, New Concepts</em>.</p>

        <p>To solve this problem, <strong>write a program which uses the Taylor Series to calculate the sine and cosine of a
                specified angle.</strong> The Taylor Series equation for sine and cosine are shown below.</p>

        <p><img src="https://i.imgur.com/K86Frwv.png" style="width: 100%" alt="" /></p>

        <p>The program should implement these equations, rather than simply calling native <code>sin</code> and
            <code>cos</code> methods provided by common programming languages.</p>

        <p>The program will accept input angles in degrees, so it should convert the angles to radians before applying the
            Taylor Series. That is, <code>x</code> in the above equations must be the value of an angle in radians. The
            following equation converts an angle from units of degrees to units of radians:</p>

        <pre>Radian value = Degrees value * (PI / 180)</pre>

        <p>Finally, the program cannot compute the summations for an infinite number of iterations (or it would never stop).
            The program should compute the cosine series through the <code>x ^ 40</code> term (<code>n</code> should range
            from 0 to 20), and the program should compute the sine series through the <code>x ^ 39</code> term
            (<code>n</code> should range from 0 to 19).</p>

        <p>Note: the exclamation mark is the factorial operator:</p>

        <pre>
            0! = 1
            1! = 1
            2! = 1 * 2
            3! = 1 * 2 * 3
            4! = 1 * 2 * 3 * 4
            etc.
        </pre>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <ul>
            <li><code>x</code> specifies an angle in units of degrees</li>
        </ul>

        <h4>Java</h4>
        <pre>public static double cos(double x)</pre>
        <pre>public static double sin(double x)</pre>

        <ul>
            <li>a <code>factorial</code> function is implemented for you</li>
        </ul>

        <h4>Python</h4>
        <pre>def cos(x):</pre>
        <pre>def sin(x):</pre>

        <h3>Sample Method Calls</h3>
        <p><code>cos(0.0)</code> returns <code>1.0</code></p>
        <p><code>sin(0.0)</code> returns <code>0.0</code></p>
        <p><code>cos(90.0)</code> returns <code>0.5</code></p>
        <p><code>sin(90.0)</code> returns <code>0.866</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first line contains the number of test cases, <code>t</code></li>
        <li>for each test, a line contains a decimal number <code>x</code>, the input angle in degrees</li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>0 &lt;= <code>t</code> &lt;= 10</li>
        <li>0.0 &lt;= <code>x</code> &lt; 360.0</li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the sine and cosine of the input angle, separated by a space
            <ul>
                <li>the output values should be rounded down to three decimal places</li>
            </ul>
        </li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            2
            0.0
            30.0
        </pre>

        <h4>Output:</h4>
        <pre>
            0.000 1.000
            0.500 0.866
        </pre>
    </div>
</script>

<script type="text/template" id="java-skeleton">
    <pre>
        import java.util.Scanner;

        public class TaylorSeries {

                /*
                * It is unnecessary to edit the "main" method of each problem's provided code skeleton.
                * The main method is written for you in order to help you conform to input and output formatting requirements.
                */
            public static void main(String[] args) {
                Scanner in = new Scanner(System.in);
                int cases = in.nextInt();
                for (; cases > 0; cases--) {
                    double a = in.nextDouble();
                    System.out.printf("%.3f %.3f\n", sin(a), cos(a));
                }
                in.close();
            }

            /**
                * TODO: Complete the following method which calculates the cosine given an angle in degrees
                * 
                * @param x --> the angle given in degrees
                * @return result --> the cosine given in radians
                */
            public static double cos(double x) {
                return 0;
            }

            /**
                * TODO: Complete the following method which calculates the sine given an angle in degrees
                * 
                * @param x --> the angle given in degrees
                * @return result --> the sine given in radians
                */
            public static double sin(double x) {
                return 0;
            }

            /**
                * 
                * Note: Use this factorial method when developing your code 
                * 
                * @param x --> the value that is used to calculate the factorial
                * @return result --> the result of x!
                */
            public static double factorial(int x) {
                double result = 1;
                if (x == 0)
                    result = 1;
                else {
                    for (int i = 1; i <= x; i++) {
                        result *= i;
                    }
                }
                return result;
            }
        }     
    </pre>
</script>

<script type="text/template" id="python-skeleton">
    <pre>
        def cos(x):
            """
            TODO: Complete this method which calculates the cosine given an angle

            Parameters:
            x --> the given angle

            Returns:
            result --> the given cosine in radians

            Note:
            It is suggested to import the math library and use math.pow(base, exponent), math.pi, and math.factorial(number) for this problem.        
            """
            result = 0

            return result

        def sin(x):
            """
            TODO: Complete this method which calculates the sine given an angle

            Parameters:
            x --> the given angle

            Returns:
            result --> the given sine in radians

            Note:
            It is suggested to import the math library and use math.pow(base, exponent), math.pi, and math.factorial(number) for this problem.        
            """
            result = 0

            return result

        # It is unnecessary to edit the "main" method of each problem's provided code skeleton.
        # The main method is written for you in order to help you conform to input and output formatting requirements.
        def main(): 
            for _ in range(int(input())):
                a = float(input())
                print(format(sin(a), '.3f') + " " + format(cos(a), '.3f'))
        main()    
    </pre>
</script>