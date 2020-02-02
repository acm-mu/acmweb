<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="flighttime">Flight Time</h1>

    <div>
        <p>Four high school friends, Jimothy, Clyle, Syrin, and Lemme-Drive-Da-Boat (or "Lemme" for short), have all been
            dying to go on a big adventure around the world; they call themselves The Four Amigos. Unfortunately, like most
            high schoolers, they don't have a lot of money. Due to this constraint, they decide to plan a virtual world
            adventure modeled after the one seen in <em>Around The World in 80 Days</em>. They call it <strong>Around The
                World in 80 Clock Cycles</strong>.</p>

        <p>While planning this adventure, Clyle buys a Powerball&reg; ticket in New Berlin, WI. As it turns out, Clyle
            purchased the winning ticket; he won the $768.4 million jackpot. Because of this new found wealth, he can take
            himself and all of his friends on a real adventure. They plan their trip and fly to their first country,
            Iceland.</p>

        <h3>Problem Description</h3>

        <p>Jimothy, Clyle, and Syrin have arrived in a foreign country. Lemme had boating practice, so he has to take a
            later flight and is meeting everyone there; he needs to be picked up at the airport. They are staying at a hotel
            without WiFi, so they cannot track Lemme's flight. Jimothy says he knows the distance from Milwaukee to
            Reykjavik, Iceland. Syrin says she knows, on average, how fast the plane is going. With this knowledge, The Four
            Amigos want to figure out what time Lemme will land so they can know by when they should be at the airport.</p>

        <p>To solve this problem, <strong>write a program that takes in a depature time and velocity and returns the arrival
                time of the flight.</strong></p>

        <ul>
            <li>You do not need to account for time of day signifiers (AM or PM).</li>
            <li>You do not need to account for time change between time zones.</li>
            <li>Use the simple physics equation <code>distance = velocity * time</code> to perform the calculations.</li>
            <li>Round the resulting arrival time down to the nearest minute.</li>
        </ul>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre>public static int[] totalFlightTime(int distance, int velocity, int departureHr, int departureMin)</pre>
        <ul>
            <li>Return an <code>int</code> array containing <code>{arrivalHr, arrivalMin}</code></li>
        </ul>

        <h4>Python</h4>
        <pre>def totalFlightTime(distance, velocity, departureHr, departureMin):</pre>
        <ul>
            <li>Return a tuple containing <code>(arrivalHr, arrivalMin)</code></li>
        </ul>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>

        <p><code>totalFlightTime(300, 200, 7, 30)</code>
            returns an <code>int</code> array containing <code>{9, 0}</code></p>

        <h4>Python</h4>

        <p><code>totalFlightTime(300, 200, 7, 30)</code>
            returns <code>(9, 0)</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first line contains the number of test cases, <code>t</code></li>
        <li>for each test case, the following four input integers appear on a line, space-separated:
            <ul>
                <li><code>distance</code>: the distance, in miles, of the flight</li>
                <li><code>velocity</code>: the velocity, in miles per hour, of the plane</li>
                <li><code>departureHr</code>: the hour in which the flight departs</li>
                <li><code>departureMin</code>: the minute in which the flight departs</li>
            </ul>
        </li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the arrival time, formatted <code>arrivalHr:arrivalMin</code>
            <ul>
                <li><code>arrivalHr</code> should have no leading zeros, e.g., <code>1:45</code> should not be formatted
                    <code>01:45</code></li>
            </ul>
        </li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li><code>t</code> is the number of test cases</li>
        <li>0 &le; <code>distance</code> &le; 5000</li>
        <li>100 &le; <code>velocity</code> &le; 600</li>
        <li>1 &le; <code>departureHr</code> &le; 12</li>
        <li>0 &le; <code>departureMin</code> &le; 59</li>
        <li>1 &le; <code>arrivalHr</code> &le; 24, and the hour will not "wrap" around into the next day</li>
        <li>0 &le; <code>arrivalMin</code> &le; 59</li>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
3
300 200 7 30
1000 450 10 16
10 600 1 0
        </pre>

        <h4>Output:</h4>
        <pre>
9:00
12:29
1:01
        </pre>

        <h3>Sample Run Explanation</h3>

        <p>The sample run contains 3 test cases (<code>t</code> = 3):</p>

        <ul>
            <li>A flight with a distance of <strong>300</strong> miles, flying at <strong>200</strong> mph, departing at
                <strong>7:30</strong>, will arrive at <strong>9:00</strong></li>
            <li>A flight with a distance of <strong>1000</strong> miles, flying at <strong>450</strong> mph, departing at
                <strong>10:16</strong>, will arrive at <strong>12:29</strong>.</li>
            <li>A flight with a distance of <strong>10</strong> miles, flying at <strong>600</strong> mph, departing at
                <strong>1:00</strong>, will arrive at <strong>1:01</strong></li>
        </ul>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre>
def totalFlightTime(distance, velocity, departureHr, departureMin):
    """
    TODO: Complete this method that calculates the arrival time of a flight based on the given parameters:
    
    Parameters:
    distance --> the distance in miles of the flight
    velocity --> how fast the plane is going in mph
    departureHr --> the hour in which the plane departs
    departureMin --> the minute in which the plane departs

    Returns:
    A list with arrivalHr at index 0 and arrivalMin at index 1

    Note: You do not need to account for time of day signifiers (AM or PM).
    Note: You do not need to account for time change between time zones.
    """
    return (0, 0)

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():

    for _ in range(int(input())):
        # User Input #
        inp = [int(s) for s in input().split(" ")]

        # Function Call
        flight = totalFlightTime(inp[0], inp[1], inp[2], inp[3])

        # Terminal Output #
        print("{}:{:02d}".format(int(flight[0]), int(flight[1])))

main()
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.Scanner;

public class FlightTime {

    /*
        * It is unnecessary to edit the "main" method of each problem's provided code
        * skeleton. The main method is written for you in order to help you conform to
        * input and output formatting requirements.
        */
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        int cases = in.nextInt();
        for (; cases > 0; cases--) {

            // User Input
            int dist = in.nextInt();
            int velo = in.nextInt();
            int depHr = in.nextInt();
            int depMin = in.nextInt();

            // Function Call
            int[] flight = totalFlightTime(dist, velo, depHr, depMin);

            // Terminal Output
            System.out.printf("%d:%02d\n", flight[0], flight[1]);
        }

        in.close();

    }

    /**
        * TODO: Complete the following method that calculates the arrival time of a
        * flight based on the given parameters:
        * 
        * Note: You do not need to account for time of day signifiers (AM or PM). Note:
        * You do not need to account for time change between time zones.
        * 
        * @param distance --> the distance in miles of the flight
        * @param velocity --> how fast the plane is going in mph
        * @param departureHr --> the hour in which the plane departs
        * @param departureMin --> the minute in which the plane departs
        * @return new int[] {arrivalHr, arrivalMin} --> an array with arrivalHr at
        *         index 0 and arrivalMin at index 1
        */
    public static int[] totalFlightTime(int distance, int velocity, int departureHr, int departureMin) {
        return new int[] {0, 0};
    }

}
    </pre>
</script>