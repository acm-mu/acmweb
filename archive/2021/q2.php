<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='C' /> -->

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="hanksharvest">Hank's Harvest</h1>
    
        <h3>Problem Description</h3>

        <p>Farmer Hank owns a farm that grows corn, potatoes, and zucchini. Hank has recently upgraded his tracking system to determine if he had a good harvest this year. He has very specific criteria on what he determines to be a good harvest. For a harvest to be considered good, Farmer Hank needs the following out of his harvest:</p>
        <ul>
            <li>At least 2 corn</li>
            <li>At least 4 potatoes</li>
            <li>At least 5 zucchini</li>
            <li>At least 15 crops total</li>
            <li>At most 10% of all crops (including the rotten crops) are rotten (we never said he was a good farmer)</li>
        </ul>
        <p>If any of these requirements are not met, then Farmer Hank considered the harvest a failure. The program takes in a string representing the harvest. Each letter represents a crop: </p>
        <ul>
            <li><code>C</code> represents a cob of corn </li>
            <li><code>P</code> represents a potato</li>
            <li><code>Z</code> represents a zucchini</li>
            <li><code>R</code> represents a rotten crop</li>
        </ul>
        <p>To solve this problem, <strong>write a program that determines if this year's harvest is a good harvest.</strong></p>
    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static boolean isGoodHarvest(String harvest)</code>

        <h4>Python</h4>
        <code>def isGoodHarvest(harvest):</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>isGoodHarvest("CCCCPPPPZZZZZZZZZZZZR");</code> returns <code>This year's harvest is good!</code></p>

        <h4>Python</h4>
        <p><code>isGoodHarvest("CCCCPPPPZZZZZZZZZZZZR")</code> returns <code>This year's harvest is good!</code></p>
	
    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>

        <h3>Console Input Format</h3>
        <ul>
            <li>A string with the characters <code>C</code>, <code>P</code>, <code>Z</code>, or <code>R</code> to represent the harvest </li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
            <li>The string will only contain the capital characters <code>C</code>, <code>P</code>, <code>Z</code>, or <code>R</code></li>
            <li>The string <em><strong>may</strong></em> be empty</li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
            <li>The first line contains the number of test cases, <code>t</code></li>
            <li>For each test, a single line with either "This year's harvest is good!" or "This year's harvest is bad!"</li>
        </ul>

        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
2
CPPPPZZZZZZZZZZZZZ
CCCPPPPZZZZZZZZZ</pre>

        <h4>Output:</h4>
        <pre>
This year's harvest is bad!
This year's harvest is good!</pre>

        <h3>Sample Run Explanation</h3>
        <ol>
            <li>The first harvest is bad because there is not enough corn (recall there needs to be at least two corn)</li>
            <li>The second harvest meets all the requirements and thus is considered a good harvest.</li>
        </ol>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class HanksHarvest {
	
	/**
     * TODO: Determine if this year's harvest was considered good based on given criteria:
     *
     * @param harvest --> (String) A representation of this year's harvest where each character represents a crop.
     *
     * @return result --> (boolean) true if the harvest is considered good, false if the harvest is considered bad
     */
	public static boolean isGoodHarvest(String harvest) {

        // Write your solution here

		return false;
	}

	/*
	* It is unnecessary to edit the "main" method of each problem's provided code
	* skeleton. The main method is written for you in order to help you conform to
	* input and output formatting requirements.
	*/
	public static void main(String[] args) {

		Scanner in = new Scanner(System.in);
		
        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            String harvest = in.nextLine();
            boolean isGoodHarvest = isGoodHarvest(harvest);
            if(isGoodHarvest){ 
                System.out.println("This year's harvest is good!");
            } else {
                System.out.println("This year's harvest is bad!");
            }
        }

        in.close();
	}
}</pre>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
"""
TODO: Determine if this year's harvest was considered good based on given criteria:

@param harvest --> A representation of this year's harvest where each character represents a crop.

@return result --> True if the harvest is considered good, False if the harvest is considered bad
"""
def isGoodHarvest(harvest):

    # Write your solution here

    return False

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        harvest = input()
        is_good_harvest = isGoodHarvest(harvest)
        if(is_good_harvest):
            print("This year's harvest is good!")
        else:
            print("This year's harvest is bad!")

main()</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
def isGoodHarvest(harvest):
    """
    TODO: Determine if this year's harvest was considered good based on given criteria:

    @param harvest --> (string) A representation of this year's harvest where each character represents a crop.

    @return result --> (boolean) True if the harvest is considered good, False if the harvest is considered bad
    """
    
    numCorn = 0
    numPotatoes = 0
    numZucchini = 0
    numRotten = 0.0
    numTotal = 0
    holder = ""

    for i in range(0, len(harvest)):
        holder = harvest[i]
        if(holder == "C"):
            numCorn+=1
        elif(holder == "P"):
            numPotatoes+=1
        elif(holder == "Z"):
            numZucchini+=1
        elif(holder == "R"):
            numRotten+=1
        
        numTotal+=1

    if(numCorn >= 2 and numPotatoes >= 4 and numZucchini >= 5 and ((numRotten/numTotal)<=.10) and numTotal >= 15):
        return True
    else:
        return False

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        harvest = input()
        is_good_harvest = isGoodHarvest(harvest)
        if(is_good_harvest):
            print("This year's harvest is good!")
        else:
            print("This year's harvest is bad!")

main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class HanksHarvest {
	
	/**
     * TODO: Determine if this year's harvest was considered good based on given criteria:
     *
     * @param harvest --> (String) A representation of this year's harvest where each character represents a vegetable.
     *
     * @return result --> (boolean) true if the harvest is considered good, false if the harvest is considered bad
     */
	public static boolean isGoodHarvest(String harvest) {
		int numCorn = 0;
		int numPotatoes = 0;
		int numZucchini = 0;
		double numRotten = 0;
		double numTotal = 0;
		String holder = "";
		
		for(int i=0; i<harvest.length(); i++) {
			holder = harvest.substring(i, i+1);
			if(holder.equals("C")) {
				numCorn++;
			}
			else if(holder.equals("P")) {
				numPotatoes++;
			}
			else if(holder.equals("Z")) {
				numZucchini++;
			}
			else if(holder.equals("R")) {
				numRotten++;
			}
			numTotal++;
		}

		if(numCorn>=2 && numPotatoes>=4 && numZucchini>=5 && ((numRotten/numTotal)<=.10) && numTotal >= 15) {
			return true;
		}
		else {
			return false;
		}
		
	}

	/*
	* It is unnecessary to edit the "main" method of each problem's provided code
	* skeleton. The main method is written for you in order to help you conform to
	* input and output formatting requirements.
	*/
	public static void main(String[] args) {

		Scanner in = new Scanner(System.in);
		
        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            String harvest = in.nextLine();
            boolean isGoodHarvest = isGoodHarvest(harvest);
            if(isGoodHarvest){ 
                System.out.println("This year's harvest is good!");
            } else {
                System.out.println("This year's harvest is bad!");
            }
        }

        in.close();
	}
}</pre>
</script>