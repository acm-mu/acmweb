<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="pipeflow">Pipe Flow</h1>
    <div>
        <h3>Problem Description</h3>
        <p>Alex, the city manager, needs a new computer system to manage the water distribution to his city's residents.
            Calculate the amount of water flowing through the output pipes of a complex city pipe system.</p>
        <p>See the example pipe system diagram:</p>
        <img style="float:right" src="q7.png">
        <p>This pipe system contains three inputs, four junctions, and two outputs. Alex supplies the layout: Input 0
            connects to Junction 0, Junction 0 connected to Junction 2, etc.</p>
        <p>Alex also supplies the amount of flow entering through each of the inputs: Input 0 sends 200 (gallons/sec), Input
            1 sends 100 (gallons/sec), and Input 2 sends 300 (gallons/sec)</p>
        <p>To determine the amount of flow through the outputs, the intermediate steps must be calculated. Each junction
            combines the flow from incoming connections and divides the total among the outgoing connections. In this case,
            Output 0 receives 375 (gallons/sec).</p>
        <p>To solve this problem, <b>write a program that takes the configuration of a pipe system, as well as the amount of
                water going through the input pipes, and calculates the amount of water going through the output pipes.</b>
        </p>
        <p>Input pipes and output pipes will only have one connection each, but junctions can have any number of incoming
            and outgoing connections. There will never be any loops - water flows only from the inputs "towards" the
            outputs.
        </p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signature</h3>
        <pre>public static float[] getOutputFlows(int numInputs, int numJunctions, int numOutputs, String[][] connections, float[]
    inputFlows)</pre>
        <ul>
            <li>Each element of connections is an array of two strings. Each of the pairs is the start and end of an
                individual
                connection.</li>
            <li>inputFlows is the amount of water entering through each input pipe</li>
        </ul>

        <h3>Sample Method Calls</h3>
        <pre>
            getOutputFlows(3, 4, 2, // numInputs, numJunctions, numOutputs
                new String[][] { // connections
                    new String[] { "IN0", "JUNC0" }, new String[] { "IN1", "JUNC0" }, new String[] { "IN2", "JUNC1" },
                    new String[] { "JUNC0", "JUNC2" }, new String[] { "JUNC1", "JUNC2" }, new String[] { "JUNC1", "JUNC3" },
                    new String[] { "JUNC2", "JUNC3" }, new String[] { "JUNC2", "OUT0" }, new String[] { "JUNC3", "OUT1" } },
                new float[] { 200.0, 100.0, 300.0 } ) // inputFlows
        </pre>
        <p>returns a <code>float</code> array containing <code>{ 225.0, 375.0 }</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>
    <h3>Console Input Format (line by line)</h3>
    <ul>
        <li>a line containing four space-separated integers: the number of inputs ( <code>numInputs</code> ), the number of
            junctions ( <code>numJunctions</code> ), the number of outputs ( <code>numOutputs</code> ), and the number of
            connections ( <code>numConnections</code> )</li>
        <li>one on each line, the individual connections between inputs, junctions, and outputs</li>
        <ul>
            <li>each line has the name of the first endpoint, then a space, then the name of the second endpoint</li>
            <li>endpoints will always be "IN", "JUNC", or "OUT", followed by an integer, representing that input, junction,
                or output</li>
            <li>endpoints will always be numbered starting from zero (e.g., if numInputs is 3, there will exist "IN0",
                "IN1", and "IN2")</li>
            <li>the connections are not guaranteed to be listed in any particular order</li>
        </ul>
        <li>on a single line, the number of test cases, <code>numTests</code></li>
        <li>for each test, one line containing the test's input flow values (space-separated, and in order: "IN0" flow, then
            "IN1" flow, etc.)</li>
    </ul>
    <h3>Assumptions</h3>
    <ul>
        <li>
            <pre>1 <= <code>numInputs</code>, <code>numJunctions</code>, <code>numOutputs</code>  <= 10</pre>
        </li>
        <li>
            <pre>1 <= <code>numConnections</code> <= 100</pre>
        </li>
        <li>
            <pre>1 <= <code>numTests</code> <= 10</pre>
        </li>
        <li>individual input flow values will be between 0 and 1000, inclusive</li>
    </ul>
    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line containing the flow values through the output pipes, space-separated</li>
        <ul>
            <li>the values should be printed in the order of the output names ("OUT0" value, then "OUT1" value, etc.)</li>
            <li>the output flow values should be printed as integers - drop any decimal portion (e.g., an output of 168.82
                should be printed as "168")</li>
        </ul>
    </ul>
    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
            3 4 2 9
            IN0 JUNC0
            IN1 JUNC0
            IN2 JUNC1
            JUNC0 JUNC2
            JUNC1 JUNC2
            JUNC1 JUNC3
            JUNC2 JUNC3
            JUNC2 OUT0
            JUNC3 OUT1
            2
            200 100 300
            0 0 20
        </pre>

        <h4>Output:</h4>
        <pre>
            225 375
            5 15
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import java.util.*;

public class Question7 {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);

        int numInputs = keyboard.nextInt(), numJunctions = keyboard.nextInt(), numOutputs = keyboard.nextInt(), numConnections = keyboard.nextInt();
        keyboard.nextLine();
        String[][] connections = new String[numConnections][2];
        for (int iConnection = 0; iConnection < numConnections; iConnection++) {
            connections[iConnection] = keyboard.nextLine().split(" ");
        }

        for (int cases = keyboard.nextInt(); cases > 0; cases--) {
            float[] inputFlows = new float[numInputs];
            for (int iInput = 0; iInput < numInputs; iInput++)
                inputFlows[iInput] = keyboard.nextFloat();
            
            float[] outputFlows = getOutputFlows(numInputs, numJunctions, numOutputs, connections, inputFlows);
            String[] outputFlowsPrintable = new String[numOutputs];
            for (int iOutput = 0; iOutput < numOutputs; iOutput++)
                outputFlowsPrintable[iOutput] = Integer.toString((int) outputFlows[iOutput]);
            System.out.println(String.join(" ", outputFlowsPrintable));
        }
        keyboard.close();
    }

    public static float[] getOutputFlows(int numInputs, int numJunctions, int numOutputs, String[][] connections, float[] inputFlows) {
        // see the problem description for descriptions of the input arguments

        float[] outputFlows = new float[numOutputs];

        // TODO: populate "outputFlows" with the amount of water going through each of the output pipes
        // e.g., output[0] should be the amount of water through "OUT0", output[1] should be the amount through "OUT1", etc.

        return outputFlows;
    }
}
    </pre>
</script>