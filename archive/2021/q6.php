<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='G' /> -->

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="weekdays">Weekdays</h1>

        <h3>Problem Description</h3>

        <p>Turing Company makes computers for enterprises in Milwaukee, Wisconsin. They build computers Monday through Friday. Recently, they have asked for your help in redoing their payroll software. In order to calculate payroll for their hourly employees, they need to find the number of weekdays between two dates in 2021. </p>
        <p>To solve this problem, <strong>calculate the number of weekdays between two dates in 2021.</strong></p>
        
        <blockquote>
            <p>Note: Include the first date in your count (if it's a weekday) but not the second date.</p>
            <p>Note: To help test, here is a <a href="https://www.timeanddate.com/calendar/">calendar for 2021</a></p>
        </blockquote>

    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>

        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static int weekdays(int first_month, int first_day, int second_month, int second_day)</code>

        <h4>Python</h4>
        <code>def weekdays(first_month, first_day, second_month, second_day):</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
	    <p><code>weekdays(2, 3, 4, 5);</code> returns <code>43</code></p>

        <h4>Python</h4>
        <p><code>weekdays(2, 3, 4, 5)</code> returns <code>43</code></p>

    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>

        <h3>Console Input Format</h3>
        <ul>
            <li>The first line contains the number of test cases, <code>t</code></li>
            <li>A single line containing the input, <code>&lt;first_month&gt;/&lt;first_day&gt; &lt;second_month&gt;/&lt;second_day&gt;</code>. For example, <code>2/3 4/5</code>.</li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
            <li>The month number will always be between 1-12</li>
            <li>The day numbers will be valid for the given months</li>
            <li>If the second date occurs before the first date, return <code>0</code></li>
            <li>The entire range is within 2021 (i.e. there are no test cases like <code>10/23 1/23</code> since this range occurs in two different years)</li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
            <li>A single integer with the number of weekdays between two dates in 2021 </li>
        </ul>

        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
1
4/15 4/21</pre>

        <h4>Output:</h4>
        <pre>
4</pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
"""
TODO: Find the number of weekdays between two dates in 2021 given the following parameters:

Parameters:
first_month --> (integer) the month number of the first date (1 = January, 2 = February, ..., 12 = December)
first_day --> (integer) the day number of the first date (1, 2, 3, ...)
second_month --> (integer) the month number of the second date (1 = January, 2 = February, ..., 12 = December)
second_day --> (integer) the day number of the second date (1, 2, 3, ...)

Returns:
an integer representing the number of days between the two dates

Note: Include the first date in your count (if it's a weekday) but not the second date.
"""
def weekdays(first_month, first_day, second_month, second_day):
    # Here is the number of days in each month:
    month_list = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
    
    # Write your solution here

    return 0

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        text = input()
        dates = text.split(' ')
        
        firstEntry = dates[0].split('/')
        secondEntry = dates[1].split('/')

        first_month = int(firstEntry[0])
        first_day = int(firstEntry[1])
        second_month = int(secondEntry[0])
        second_day = int(secondEntry[1])

        print(weekdays(first_month, first_day, second_month, second_day))

main()</pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class Weekdays {

    /**
    * TODO: Find the number of weekdays between two dates in 2021 given the following parameters:
    * 
    * @param first_month --> (integer) the month number of the first date (1 = January, 2 = February, ..., 12 = December)
    * @param first_day --> (integer) the day number of the first date (1, 2, 3, ...)
    * @param second_month --> (integer) the month number of the second date (1 = January, 2 = February, ..., 12 = December)
    * @param second_day --> (integer) the day number of the second date (1, 2, 3, ...)
    *
    * @return an integer representing the number of days between the two dates
    *
    * Note: Include the first date in your count (if it's a weekday) but not the second date.
    */
    public static int weekdays(int first_month, int first_day, int second_month, int second_day)
    {
        // Here is the number of days in each month:
        int[] month_list = { 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 };

        // Write your solution here

        return 0;
    }

    /*
     * It is unnecessary to edit the "main" method of each problem's provided code
     * skeleton. The main method is written for you in order to help you conform to
     * input and output formatting requirements.
     */
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            String text = in.nextLine();
            String[] dates = text.split(" ");

            String[] firstEntry = dates[0].split("/");
            String[] secondEntry = dates[1].split("/");
            
            int first_month = Integer.parseInt(firstEntry[0]);
            int first_day = Integer.parseInt(firstEntry[1]);
            int second_month = Integer.parseInt(secondEntry[0]);
            int second_day = Integer.parseInt(secondEntry[1]);

            System.out.println(weekdays(first_month, first_day, second_month, second_day));
        }

        in.close();
    }
}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
def weekdays(first_month, first_day, second_month, second_day):
    """
    Find the number of weekdays between 2 dates in 2021. Include the first
      date but not the second.
    :type first_month: int
    :type first_day: int
    :type second_month: int
    :type second_day: int
    :rtype: int
    """

    # JAN 1, 2021 is a Friday
    # Here are the number of days in each month:
    month_list = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    WEEKEND = (2, 3)

    first_date = 0
    second_date = 0
    num_weekdays = 0

    #get num days for date 1 since epoch
    for i in range(first_month - 1):
        first_date += month_list[i]
    first_date += first_day

    #get num days for date 2 since epoch
    for i in range(second_month - 1):
        second_date += month_list[i]
    second_date += second_day

    # get num days between date 1 and date 2
    days_between = second_date - first_date

    # for each full week between, add 5 to num_weekdays
    while (days_between >= 7):
        num_weekdays += 5
        days_between -= 7

    # for remaining days, determine what days are weekdays and add them to num_weekdays
    while (days_between > 0):
        if first_date % 7 not in WEEKEND:
            # when the date is not a saturday or sunday
            num_weekdays += 1
        days_between -= 1
        first_date += 1

    return num_weekdays

def main():
    for _ in range(int(input())):
        text = input()
        dates = text.split(' ')
        
        firstEntry = dates[0].split('/')
        secondEntry = dates[1].split('/')

        first_month = int(firstEntry[0])
        first_day = int(firstEntry[1])
        second_month = int(secondEntry[0])
        second_day = int(secondEntry[1])

        print(weekdays(first_month, first_day, second_month, second_day))

main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class Weekdays {

    public static int weekdays(int first_month, int first_day, int second_month, int second_day)
    {
        // JAN 1, 2021 is a Friday
        // Here are the number of days in each month:
        int[] month_list = { 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 };

        int[] WEEKEND = { 2, 3 };

        int first_date = 0;
        int second_date = 0;
        int num_weekdays = 0;

        //get num days for date 1 since epoch
        for (int i = 0; i < first_month - 1; i++)
            first_date += month_list[i];
        first_date += first_day;

        //get num days for date 2 since epoch
        for (int i = 0; i < second_month - 1; i++)
            second_date += month_list[i];
        second_date += second_day;

        //get num days between date 1 and date 2
        int days_between = second_date - first_date;

        //for each full week between, add 5 to num_weekdays
        while (days_between >= 7) {
            num_weekdays += 5;
            days_between -= 7;
        }

        //for remaining days, determine what days are weekdays and add them to num_weekdays
        while (days_between > 0) {
            if (first_date % 7 != WEEKEND[0] && first_date % 7 != WEEKEND[1])
                num_weekdays += 1;
            days_between--;
            first_date++;
        }

        return num_weekdays;
    }

    /*
     * It is unnecessary to edit the "main" method of each problem's provided code
     * skeleton. The main method is written for you in order to help you conform to
     * input and output formatting requirements.
     */
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            String text = in.nextLine();
            String[] dates = text.split(" ");

            String[] firstEntry = dates[0].split("/");
            String[] secondEntry = dates[1].split("/");
            
            int first_month = Integer.parseInt(firstEntry[0]);
            int first_day = Integer.parseInt(firstEntry[1]);
            int second_month = Integer.parseInt(secondEntry[0]);
            int second_day = Integer.parseInt(secondEntry[1]);

            System.out.println(weekdays(first_month, first_day, second_month, second_day));
        }

        in.close();
    }
}</div>
</script>