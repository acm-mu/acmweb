<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="passwordstrength">Password Strength Checker</h1>
    <div>
        <h3>Problem Description</h3>
        <p>George is running a new website, and requires users to log in with a username and password. He has come up with
            some security requirements regarding the users' choice of passwords.</p>
        <p>Determine if a given password is permitted, according to the following requirements:</p>
        <ul>
            <li>A password must be at least 8 characters long</li>
            <li>A password must contain characters in at least three of these four categories:</li>
            <ul>
                <li>A lower case letter</li>
                <li>An upper case letter</li>
                <li>A number</li>
                <li>A symbol in the number row of the keyboard: ! , @ , # , $ , % , ^ , & , * , ( , or )</li>
            </ul>
            <li>A password may not contain the user’s first or last name</li>
            <li>A password may not contain the user’s birthday (month number followed directly by day number) or birth year
            </li>
            <ul>
                <li>For example, if the user’s birthday is March 18th, 2000, then both “318Party” and “super#2000” are
                    invalid passwords</li>
                <li>A single-digit birthday has a leading zero; for example, if the user's birthday is March 2nd, then
                    "302Animal" is invalid, but "32Animal" is okay.</li>
            </ul>
        </ul>
        <p>To solve this problem, <b>write a program which determines if a given password is acceptable, or if it breaks
                some of the requirements</b>.</p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <pre>public static boolean isAcceptablePassword(String password, String userFirstName, String userLastName, int birthYear,
    int birthMonth, int birthDay)</pre>

        <h3>Sample Method Calls</h3>
        <p><code>isAcceptablePassword("lightning66%", "Lom", "Tazer", 1998, 1, 15)</code> returns <code>true</code></p>
        <p><code>isAcceptablePassword("X!NUROCK$", "Kivani", "Sholi", 1997, 2, 20)</code> returns <code>false</code></p>
        <p><code>isAcceptablePassword("wr@tHofvOngLuE", "Darth", "Vonglue", 1918, 12, 25)</code> returns <code>false</code>
        </p>
        <p><code>isAcceptablePassword("science!108", "Stephen", "Hawking", 1942, 1, 8)</code> returns <code>false</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li><code>n</code>, the number of tests</li>
        <li>for each test, a single line containing the input arguments separated by spaces: password, first name, last
            name, birth year, birth month, and birth day</li>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>
            <pre>1 <= <code>n</code> <= 10</pre>
        </li>
        <li>each argument (password, first name, etc.) will:</li>
        <ul>
            <li>not contain spaces</li>
            <li>contain at least one character</li>
        </ul>
    </ul>
    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line containing "OK" if the password is acceptable, or "INVALID" if the password
            violates a requirement</li>
    </ul>
    <div>
        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
            4
            lightning66% Lom Tazer 1998 1 15
            X!NUROCK$ Kivani Sholi 1997 2 20
            wr@tHofvOngLuE Darth Vonglue 1918 12 25
            science!108 Stephen Hawking 1942 1 8
        </pre>

        <h4>Output:</h4>
        <pre>
            OK
            INVALID
            INVALID
            INVALID
        </pre>
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.*;

public class Question4 {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);
        int cases = keyboard.nextInt();
        keyboard.nextLine();
        for (; cases > 0; cases--) {
            String[] arguments = keyboard.nextLine().split(" ");
            if (isAcceptablePassword(arguments[0], arguments[1], arguments[2], Integer.parseInt(arguments[3]), Integer.parseInt(arguments[4]), Integer.parseInt(arguments[5])))
                System.out.println("OK");
            else
                System.out.println("INVALID");
        }
        keyboard.close();
    }

    public static boolean isAcceptablePassword(String password, String userFirstName, String userLastName, int birthYear, int birthMonth, int birthDay) {
        boolean isAcceptable = true;

        // TODO: set "isAcceptable" to false if the password violates any of the requirements, otherwise leave "isAcceptable" true

        return isAcceptable;
    }
}
    </pre>
</script>